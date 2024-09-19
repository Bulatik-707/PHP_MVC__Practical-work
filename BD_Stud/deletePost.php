<?php 
// Настраиваем удаление 
require_once "bootstrap.php";
if(!isset($_GET['id']) || empty($_GET['id'])){
    exit;
}
if($data->deletePost($_GET['id'])){
    header("Location: /Ysh_Pr_20/BD_Stud/");
    exit;
}
else{
    echo "--------";
}
?>