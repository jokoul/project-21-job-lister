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
                        FROM Jobs
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

}
