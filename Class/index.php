<?php
require_once "Cl_sportArticle.php";

//Заполняем данными, (создаем V) класса
$F = new Article("Заголовок", "много текста много текста много текста много текста");
$f1 = new Article("Титле", "Боди Боди Боди Боди", "33", "22", "red", "pink", "5");
$f2 = new Article("Титле", "Боди Боди Боди Боди", "13", "33", "blue");
//Заполняем данными, (создаем V) класса
$a = new sportArticle("TITLE", "BODY BODY BODY BODY BODY", "AMD_1.jpg");
$a1 = new sportArticle("News", "Text... text...text...text...text...text...text...", "", "", "pink", "40", "27");

// * * * * * * 

// $extensions = ["jpg", "jpeg", "png"];
// //Получаем имя выбраного файла
// $fileName = $_FILES["file"] ? $_FILES["file"]["name"] : "";
// //Опред. расширение фыйла (Ф)
// $fileExtension = strtolower(end( explode( ".", $fileName)));
// //Опред. куда будет сохранен Ф
// $fileName = 'files/' .$fileName;
// //Проверяем расширение Ф на допустимость
// if(in_array($fileExtension, $extensions)){
//     //Проверяем размер Ф
//     if($_FILES["file"]["size"] < 5000000){
//         //Загружаем временый Ф
//         move_uploaded_file($_FILES["file"]["tmp_name"], $fileName);
//     }
//     else{
//         echo 'Ф слишком БОЛЬШОЙ...';
//     }
// }
// else{
//     echo '! верный тип Ф...';
// }
// if(isset($_POST["go"])){
//     //Создаем объект
//     $article10 = new sportArticle($_POST["title_Text"], $body, $fileName);
// }


// ФОРМА заполнения
if(isset($_POST["GO"])){
    $F_Article = new Article($_POST["title_Text"], $_POST["body_Text"], 
    $_POST["font_Size_Title"], $_POST["font_Size_Body"], 
    $_POST["color"], $_POST["font_color"], $_POST["border_Size"]);

    $F_sportArticle = new sportArticle($_POST["title_Text"], $_POST["body_Text"], $_POST["img"]);
}


require_once "index.view.php";
?>

