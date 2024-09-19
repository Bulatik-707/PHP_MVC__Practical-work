<?php 
// Настраиваем отображение первой страницы index.php
require_once "bootstrap.php";

$post = $data->getAllPosts();

require_once "posts/index.view.php";
?>