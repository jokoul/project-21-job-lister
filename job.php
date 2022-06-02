<?php
//All our dependency files gonna be called one times inside init.php
include_once 'config/init.php';
?>
<?php
//Initiate Job class to use its properties and methods
$job = new Job;

if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($job->delete($del_id)){
        redirect('index.php', 'Job Deleted', 'success');
    }else{
        redirect('index.php', 'Job Not Deleted', 'error');
    }
}

//Initiate Template class by defining frontpage as an instance object.
$template = new Template('templates/job-single.php');//take as parameter the path to the template we want

//get id send from url get parameter 
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);

echo $template;