<?php 

class Job
{
    private $db;

    public function __construct()
    {
        //Instantiate th db class
        $this->db = new Database;
    }

    //Get All Jobs
    public function getAllJobs()
    {
        //"jobs.*" means select every thing inside jobs table, and we select only the name field from categories table. 
        $this->db->query('SELECT jobs.*, categories.name AS cname
                    FROM jobs
                    INNER JOIN categories 
                    ON jobs.category_id = categories.id
                    ORDER BY post_date DESC
                    ');//join relation with foreign key in jobs table equal to primary key in categories table
        //Assign Result Set
        $results = $this->db->resultSet();
        
        return $results;
    }

    //Get Categories
    public function getCategories()
    {
        $this->db->query("SELECT * FROM categories");
        //Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }

    //Get Jobs By Category
    public function getByCategory($category)
    {
        $this->db->query("SELECT jobs.*, categories.name AS cname
                        FROM jobs
                        INNER JOIN categories
                        ON jobs.category_id = categories.id
                        WHERE jobs.category_id = $category
                        ORDER BY post_date DESC
                    ");
        // Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }

    //Get category
    public function getCategory($category_id)
    {
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");//:category_id the column before means we bind $category_id value to the placeholder category_id
        $this->db->bind(':category_id', $category_id);
        //Assign Row
        $row = $this->db->single();

        return $row;
    }

    //Get Job
    public function getJob($id)
    {
        $this->db->query("SELECT * FROM jobs WHERE id = :id");
        $this->db->bind(':id', $id);
        //Assign Row
        $row = $this->db->single();

        return $row;
    }

    //Create Job
    public function create($data)
    {
        //prepare a SQL query
        $this->db->query("INSERT INTO jobs (category_id,company,job_title,`description`,salary,`location`,contact_user,contact_email) VALUES (:category_id, :company, :job_title, :description, :salary, :location, :contact_user, :contact_email)");//next is to bind all the placeholder
        //Bind Data with placeholder
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':contact_user', $data['contact_user']);
        $this->db->bind(':contact_email', $data['contact_email']);
        //Execute the query
        if($this->db->execute()){
            return true;
        }else{
            return false;

        }
    }

    //Delete Job
    public function delete($id)
    {
        //Insert Query
        $this->db->query("DELETE FROM jobs WHERE id = $id");
        //Execute query now
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    //Update Job
    public function update($id, $data)
    {
        //Insert Query
        $this->db->query("UPDATE jobs
                        SET
                        category_id = :category_id,
                        job_title = :job_title,
                        company = :company,
                        description = :description,
                        location = :location,
                        salary = :salary,
                        contact_user = :contact_user,
                        contact_email = :contact_email
                        WHERE id = $id");
        //Bind Data
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':contact_user', $data['contact_user']);
        $this->db->bind(':contact_email', $data['contact_email']);
        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}
