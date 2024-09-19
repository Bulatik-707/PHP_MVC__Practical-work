<?php 
// Настраиваем добавление новой записи 

// require_once "bootstrap.php";

// if(isset($_POST['btnPost'])){
//     $_POST['datePublication'] = date("Y-m-d");

//     $fileName = $_FILES['photo']['name'];
//     $fileTmpName = $_FILES['photo']['tmp_name'];
//     $fileType = $_FILES['photo']['type'];
//     $fileError = $_FILES['photo']['error'];
//     $fileSize = $_FILES['photo']['size'];

//     $fileExtension = strtolower(end(explode('.', $fileName)));
//     $fileName = explode('.', $fileName)[0];

//     $extensions = ['jpg', 'jpeg', 'png'];
//     if(in_array($fileExtension, $extensions)){
//         if($fileSize < 5000000){
//             if($fileError === 0){
//                 $_POST['photo'] = implode('.', [$fileName, $fileExtension]);

//             }
//         }
//     }
//     else {
//         $_POST['photo'] = "default.jpg";
//     }

//     $id = $data->insertPost($_POST);
//     if($id != null){
//         $fileDestination = "uploads/".$_POST['photo'];
//         move_uploaded_file($fileTmpName, $fileDestination);
//     }
//     header("Location: /");
//     exit;
// }
// require_once "posts/insertPost.view.php";

// = = = = == = = = == = = =

require_once "bootstrap.php";

if(isset($_POST['btnPost'])){
    $_POST['datePublication'] = date("Y-m-d");
    $id = $data->insertPost($_POST);
    header("Location: /Ysh_Pr_20/BD_Stud/");
    exit;
}
require_once "posts/insertPost.view.php";




// // https://habr.com/ru/sandbox/109698/

// // filter_var — Фильтрует переменную с помощью определенного фильтра
// $myregex = '~^\d{2}/\d{2}/\d{4}$~';
// print filter_var("bad 01/02/2012 bad",FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=> $myregex)));

// FILTER_VALIDATE_REGEXP	"validate_regexp"	default, regexp	 	Проверяет значение на соответствие regexp, Perl-совместимому регулярному выражению.

// $myregex = "~^(19|20)\d\d[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])$~";

// print filter_var("bad 01/02/2012 bad",FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=> $myregex)));
// // --------
// // strlen(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING)) > 3

// // $str = 'abcdef';
// // echo strlen($str); // 6

// // iconv_strlen — Возвращает количество символов в строке
// 



?>