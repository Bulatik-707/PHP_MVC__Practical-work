<?php
require_once "bootstrap.php";

if(isset($_POST['btnDog'])){
    $id_dog = $data->insertDog($_POST);
    header("Location: /new/Pr_7/");
    exit;
}
require_once "dogs/insertDog.view.php";