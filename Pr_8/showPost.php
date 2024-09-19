<?php 
// Настраиваем отображение второй страницы – с добавлением новой записи showPost.php
require_once "bootstrap.php";
$title = "Просмотр информации";

$post = $data->getOnePost($_GET['id']);

$comm = $data->ShowCommPost($_GET['id']);



if(!$post){
    header("Location: /Pr_8/");
    exit;
}
require_once "posts/showPost.view.php";
