<?php
// Настраиваем обновление 

// session_start();
// if(!$_SESSION['auth']){
//     header('Location: index.php');
// }

// require_once "bootstrap.php";

// if(!isset($_GET['id']) || empty($_GET['id'])){
// header('Location: showAllPosts.php');
// }

// $post = $dataPost->getOnePost($_GET['id']);

// $_POST['id'] = $_GET['id'];

// $_SESSION['alert'] = "alert-success";
// $_SESSION['msg'] = "Внеси нужные изменения";

// if(isset($_POST['btnPost'])){

//     if(count($_FILES) > 0){
//         $fileName = $_FILES['photo']['name'];
//         $fileTmpName = $_FILES['photo']['tmp_name'];
//         $fileType = $_FILES['photo']['type'];
//         $fileError = $_FILES['photo']['error'];
//         $fileSize = $_FILES['photo']['size'];

//         $fileExtension = strtolower(end(explode('.', $fileName)));
//         $fileName = explode('.', $fileName)[0];
    
//         $extensions = ['jpg', 'jpeg', 'png'];
//         if(in_array($fileExtension, $extensions)){
//             if($fileSize < 5000000){
//                 if($fileError === 0){
//                     $_POST['photo'] = implode('.', [$fileName, $fileExtension]);
    
//                 }
//             }
//         }
//     }

//     if(!empty($_POST['photo'])){
//         $_POST['photo'] = $post->photo;
//     }

//     if($dataPost->updatePost($_POST) > 0){
//         if($_POST['photo'] != $post->photo){

//             $fileDestination = "uploads/".$_POST['photo'];
//             move_uploaded_file($fileName, $fileDestination);

//             if(file_exists('uploads/'.$post->photo) && $_POST['photo'] != "default.jpg"){
//                 unlink('uploads/'.$post->photo);
//             }
//         }
//         $_SESSION['msg'] = "Запись обновлена...";
//         $_SESSION['alert'] = 'alert-success';

//         $post = $dataPost->getOnePost($_GET['id']);
//     }
//     else{
//         $_SESSION['msg'] = "Возникли баги при обновлении!!!";
//         $_SESSION['alert'] = 'alert-danger';
//     }
    
// }

// require_once "posts/updatePost.view.php";
?>


<!-- ========== -->


<?php
// Настраиваем обновление 
require_once "bootstrap.php";

if(!isset($_GET['id']) || empty($_GET['id'])){
    exit;
}

$post = $data->getOnePost($_GET['id']);
if(!$post){
    header("Location: /Ysh_Pr_20/BD_Stud/");
    exit;
}

if(isset($_POST['btnPost'])){
    $_POST['id'] = $_GET['id'];
    $data->updatePost($_POST);
    header("Location: /Ysh_Pr_20/BD_Stud/");
    exit;
}

require_once "posts/updatePost.view.php";
?>