<?php 
session_start();


// Вернуться в Ф. заполнения
if(isset($_POST['goStart'])){
    session_destroy();
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
   <?php
    $title = "Шаг № 3";
    require_once "header.php";
   ?>
</head>
<body>

<div class="container col-md-5 col-offset-3">
<hr>
<img src="img/AMD_1.jpg" alt="" class="rounded" width="300px">

<hr>
<form class="d-flex justify-content-end mt-5" method="post">
    <button class="btn bnt-info mr-2" name="goStart" value="goStart">Назад</button>

</form>
</div>
    
</body>
</html>