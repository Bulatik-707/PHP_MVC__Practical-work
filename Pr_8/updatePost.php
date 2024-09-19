<?php
// Настраиваем обновление 
require_once "bootstrap.php";

if(!isset($_GET['id']) || empty($_GET['id'])){
    exit;
}

$post = $data->getOnePost($_GET['id']);
if(!$post){
    header("Location: /Pr_8/");
    exit;
}

if(isset($_POST['btnPost'])){
    $_POST['id'] = $_GET['id'];
    $data->updatePost($_POST);
    header("Location: /Pr_8/");
    exit;
}

require_once "posts/updatePost.view.php";
?>