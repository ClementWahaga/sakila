<?php
require './app/autoloader.php'; 
require './helper/db.php';

Autoloader::register(); 

if (isset($_GET['p'])){
$p = $_GET['p'];
}else{
    $p ='home';
}


ob_start();

if ($p === 'home'){
require './view/home.php';


}elseif($p === 'actor'){
    require './view/actor.php';

}elseif($p === 'chouchouter'){
    require './view/chouchouter.php';

}elseif($p === 'deco'){
    require './view/deco.php';

}elseif($p === 'truc&astuces'){
    require './view/truc&astuces.php';

}elseif($p === 'vosQuestions'){
    require './view/vosQuestions.php';
}









$content = ob_get_clean();
require './partial/template.php';