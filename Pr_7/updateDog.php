<?php
// Настраиваем обновление 
require_once "bootstrap.php";

if(!isset($_GET['id_dog']) || empty($_GET['id_dog'])){
    exit;
}

$getAllDogs = $data->getOneDogs($_GET['id_dog']);
if(!$getAllDogs){
    header("Location: /new/Pr_7/");
    exit;
}

if(isset($_POST['btnDog'])){
    $_POST['id_dog'] = $_GET['id_dog'];
    $data->updateDog($_POST);
    header("Location: /new/Pr_7/");
    exit;
}

//Куда передать (откуда взять код)
require_once "dogs/updateDog.view.php";
?>