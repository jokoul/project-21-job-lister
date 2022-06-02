<?php
//All our dependency files gonna be called one times inside init.php
include_once 'config/init.php';
?>
<?php
//Initiate Job class to use its properties and methods
$job = new Job;

//Initiate Template class by defining frontpage as an instance object.
$template = new Template('templates/frontpage.php');//take as parameter the path to the template we want

//get category send from user form  
$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
    $template->jobs = $job->getByCategory($category);
    $template->title = 'Job In ' . $job->getCategory($category)->name;
}else{
    //define template properties and store database retrieved data inside.
    $template->title = 'Latest jobs';
    $template->jobs = $job->getAllJobs();
}


$template->categories = $job->getCategories();

echo $template;