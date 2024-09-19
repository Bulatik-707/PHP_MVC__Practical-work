<?php 
session_start();

// if(!$_SESSION['auth']){
//     header("Location: index.php");
//     die();
// }

// Вернуться в Ф. заполнения
if(isset($_POST['goStart'])){
    session_destroy();
    header("Location: index.php");
}

if(isset($_POST['goNext'])){
    header("Location: page3.php");
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
   <?php
    $title = "Шаг № 2";
    require_once "header.php";
   ?>
</head>
<body>

<?php
if($_SESSION['name'] != "" || $_SESSION['phone'] != ""){

echo 'Имя ' . $_SESSION['name'] . '<br>';   
echo 'Тел. ' . $_SESSION['phone'] . '<br><br>';

// if($_COOKIE['name'] != "" || $_COOKIE['email'] != "" ){
// echo 'COOKIE Имя ' . $_COOKIE['name'] . '<br>';
// echo 'COOKIE  Почта ' . $_COOKIE['email'] . '<br>';
}
?>


<div class="container col-md-5 col-offset-3">
<hr>
<img src="img/AMD_1.jpg" alt="" class="rounded" width="200px">

<hr>
<form class="d-flex justify-content-end mt-5" method="post">
    <button class="btn bnt-info mr-2" name="goStart" value="goStart">Назад</button>
    <button class="btn bnt-primary mt-3" name="goNext" value="goNext">Вперед</button>

</form>
</div>
    
</body>
</html>