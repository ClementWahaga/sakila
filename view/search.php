<?php
require './app/autoloader.php'; 
require './helper/db.php';

Autoloader::register(); 

if (isset($_GET['title'])){
$p = $_GET['title'];
}else{
    $p ='home';
}


ob_start();

if ($p === 'search'){
require './view/search.php';
}


$content = ob_get_clean();
require './partial/template.php';