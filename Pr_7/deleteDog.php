<?php 
// Настраиваем удаление 
require_once "bootstrap.php";
if(!isset($_GET['id_dog']) || empty($_GET['id_dog'])){
    exit;
}
if($data->deleteDog($_GET['id_dog'])){
    header("Location: /new/Pr_7/");
    exit;
}
else{
    echo "--------";
}