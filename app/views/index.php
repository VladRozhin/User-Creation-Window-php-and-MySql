<?php
if($_SERVER['REQUEST_URI'] == '/php323/ooppractic/index.php'){
    header("Location: /php323/ooppractic/");
    exit();
}
$title = 'Home page';
ob_start(); 
?>

<h1>Home page</h1>


<?php $content = ob_get_clean();
include 'app/views/layout.php';
?>
