<?php 

require_once "bootstrap.php";

if(isset($_POST['btnPost'])){
    $id = $data -> insertUser($_POST);
    header("Location: /");
    exit;
}
require_once "users/registration.view.php";

?>