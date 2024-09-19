<?php 
// Настраиваем отображение второй страницы – с добавлением новой записи showPost.php
require_once "bootstrap.php";
$title = "Просмотр информации";

$post = $data->getOnePost($_GET['id']);
if(!$post){
    header("Location: /Ysh_Pr_20/BD_Stud/");
    exit;
}

require_once "posts/showPost.view.php";
?>