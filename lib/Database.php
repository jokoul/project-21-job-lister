<?php
//This class is reusable in several project and allow to connect to database

class Database 
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;//Database Handler
    private $error;
    private $stmt;//statement SQL
    private $charset = "utf8mb4";

    public function __construct()
    {
        //Set DSN
        $dsn = "mysql:host=" . $this->host . ";dbname=". $this->dbname . ";charset=". $this->charset;
        //Set Options
        $options = array(
            PDO::ATTR_PERSISTENT=> true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION//if error this line take error and send to catch
        );
        //PDO Instance
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch(PDOException $e){
            $this->error = $e->getMessage();
        }
    }

    public function query($query)
    {
        //This method handle our db query
        $this->stmt = $this->dbh->prepare($query);
    }

    //This method bind values
    public function bind($param, $value, $type=null)
    {
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    //This function execute the SQL statement
    public function execute()
    {
        return $this->stmt->execute();
    }

    //fn responsible of fetching all result 
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //fn responsible of fetching single result 
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
}