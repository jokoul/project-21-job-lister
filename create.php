<?php
//All our dependency files gonna be called one times inside init.php
include_once 'config/init.php';
?>
<?php
//Initiate Job class to use its properties and methods
$job = new Job;

//Retrieve all the data send by user form
if(isset($_POST['submit'])){
    //Create Data Array to store user input
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];


    if($job->create($data)){
        //We want to be able to redirect without using header("Location: index.php")
        redirect('index.php','Your job has been listed', 'success');//second parameter is a message we want to display
    }else{
        redirect('index.php','Something went wrong', 'error');

    }
}

//Initiate Template class by defining frontpage as an instance object.
$template = new Template('templates/job-create.php');//take as parameter the path to the template we want

$template->categories = $job->getCategories();

echo $template;