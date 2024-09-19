<?php 

require_once "bootstrap.php";

if(isset($_POST['btnPost'])){
    $_POST['datePublication'] = date("Y-m-d");
    $id = $data->insertPost($_POST);
    header("Location: /Pr_8/");
    exit;
}
require_once "posts/insertPost.view.php";
