<?php 
//Start Session variable
session_start();//to access to $_SESSION

//config File
require_once 'config.php';

//Include helpers file
require_once 'utils/system_helper.php';

// require_once('./lib/Template.php');
//Autoloader avoid to inject require_once several times manually inside files
function my_autoload($class_name) {
    include( 'lib/' . $class_name . '.php');
}
spl_autoload_register('my_autoload');

// echo 'test';