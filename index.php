<?php
include_once 'config/init.php';
?>
<?php
$template = new Template('templates/frontpage.php');//take as parameter the path to the template we want

$template->title = 'Latest job';
echo $template;