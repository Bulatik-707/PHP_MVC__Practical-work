<!doctype html>
<head>
<title>

</title>
<meta charset="utf-8">
</head>
<body>

<?php

require_once "index.php";
//Вывод инфы (Article)
echo $F -> outArticle();
echo $f1 -> outArticle();
echo $f2 -> outArticle();

//Вывод инфы (sportArticle)
echo $a -> outArticle();
echo $a1 -> outArticle();

// * * * * * * 
?>

<!-- <br>* * * * * * <br><br>

<form action="#" method="post" enctype="multipart/form-data"> -->
<!-- required - ОБЯЗАТЕЛЬНО ЗАПОЛНИТЬ -->
<!-- <input type="text" required name="title_Text">
<input type="file" name="file" accept="img/*,img/jpeg">
<button name="go">Go....</button>
</form> -->
<?php
  //   if(isset($_POST["go"])){
  //     echo  $article10 -> outArticle();
  //   }
  // echo  $articleSport1 -> outArticle();
?>

<!-- * * * * * -->
<br>ФОРМА заполнения <br><br>

<form method="POST" action="index.php">

<label>Заголовок: <br> <input style="width: 300px;" type="text" required name="title_Text" value="Заголовок"> </label> <br><br>
<label>Текст: <br> <textarea style="min-width: 300px; min-height: 73px" required name="body_Text" value="">Text... text...text...text...text...text...text...</textarea> </label> <br><br> 

<label>Размер Заголовка: (px) <br> <input type="text" name="font_Size_Title" value="" placeholder="25"></label> <br><br>
<label>Размер Текста: (px) <br> <input type="text" name="font_Size_Body" value="" placeholder="17"></label> <br><br>
<label>Размер Рамки: (px) <br> <input type="text" name="border_Size" value="" placeholder="3"></label> <br><br>

<label>Цвет Текста: <br> <input type="text" name="color" value="" placeholder="red"></label> <br><br>
<label>Цвет Фона: <br> <input type="text" name="font_color" value="" placeholder="pink"></label> <br><br>

<label>Изобрадение: <br> <input type="file" name="img" accept="img/*,img/jpeg" ></label> <br><br>

<button name="GO">Показать</button>
</form>



<?php
// if(isset($_POST["GO"])){
//   $F_Article -> outArticle();
// }
// $F_sportArticle -> outArticle();

if (isset($_POST["GO"])) {

  //Вывод инфы (Article)
  echo $F_Article -> outArticle();

  //Вывод инфы (sportArticle)
  echo $F_sportArticle -> outArticle();
}
?>


</body>
</html>