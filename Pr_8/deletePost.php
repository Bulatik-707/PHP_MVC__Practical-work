<?php 
// Настраиваем удаление 
require_once "bootstrap.php";
if(!isset($_GET['id']) || empty($_GET['id'])){
    exit;
}
if($data->deletePost($_GET['id'])){
    header("Location: /Pr_8/");
    exit;
}
else{
    echo "--------";
}
?>