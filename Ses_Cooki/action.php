<?php
// session_start();
// $_SESSION['name'] = $_POST['name'];
// $_SESSION['email'] = $_POST['email'];

// setcookie("name", $_POST['name'], time() + 3600);
// setcookie("email", $_POST['email'], time() + 3600);

// header('Location: /Ysh_Pr_20/Ses_Cooki/index.php')

// * * * * * *

session_start();
$_SESSION['name'] = $_POST['name']??"";
$_SESSION['phone'] = $_POST['phone']??"";
$_SESSION['auth'] = false;

if(isset($_POST['goNext'])){
    if(strlen($_SESSION['name']) < 2){
        $_SESSION['msg'] = "Имя слишком короткое \n";
        $_SESSION['alert'] = "alert-danger";
        $_SESSION['auth'] = true;
    }
    if(strlen($_SESSION['phone']) <= 11){
        $_SESSION['msg'] = "Телефон слишком короткий \n";
        $_SESSION['alert'] = "alert-danger";
        $_SESSION['auth'] = true;
    }
    else{
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['phone'] = $_POST['phone'];
    }
    if(!$_SESSION['auth']){
        header("Location: index.php");
    }
    else{
        header('Location: page2.php');
    }
}


?>