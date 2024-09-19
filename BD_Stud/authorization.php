<?php 

session_start();
require_once "bootstrap.php";

$msg = "";
$_SESSION['alert'] = "alert-warning";
$_SESSION['msg'] = "Заполни все поля !!!";

if($_SESSION['auth']){
    session_destroy();
    header("Location: index.php");
}

if(isset($_POST['btnGo'])){
    $_SESSION['auth'] = false;

    if(strlen($_POST['login'] == 0)){
        $msg .= "Надо ввести логин! \n";
    }
    if(strlen($_POST['password'] == 0)){
        $msg .= "Введи пароль!";
    }
    if(strlen($msg) != 0){
        $_SESSION['msg'] = nl2br($msg);
        $_SESSION['alert'] = 'alert-danger';
    }
    else{
        $user = $dataUser -> getOneUser($_POST['login'], $_POST['password']);
        if($user != null){
            $_SESSION['msg'] = "Вы зарегестрированы в системе!";
            $_SESSION['alert'] = 'alert-danger';
            $_SESSION['msg'] = true;

            $_SESSION['id_user'] = $user -> id;

            header("Location: showAllPosts.php");
        }
        else{
            $_SESSION['msg'] = "Неверный логин / пароль";
            $_SESSION['alert'] = 'alert-danger';
        }
    }
}

require_once "users/authorization.view.php";
?>

