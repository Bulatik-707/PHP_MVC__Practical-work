<!doctype html>
<head>
<title>Прайс</title>
<meta charset="utf-8">
</head>
<body>

<!-- Стр -->
<div> 
  
<!--  -->
  <div> 
  <nav class="nav_menu">
  <ul>
    <li><a href="/new/Pr_6/Главная.php">Главная</a></li>
    <li><a href="/new/Pr_6/Прайс.php">Прайс</a></li>
    <li><a href="/new/Pr_6/Галерея.php">Галерея</a></li>
    <li><a href="/new/Pr_6/Заказ.php">Заказ</a></li>
    <li><a href="/new/Pr_6/Контакты.php">Контакты</a></li>
  </ul>
</nav>

  </div>
  <!-- / -->

<!-- Content -->
<div class = "Content"> 

<?php 
//C:/OpenServer/domains/localhost/new/Pr_6/Doc/HELLO.txt'

$filename = 'Doc/Price_1.txt';
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
// Закрытие файла
fclose($handle);
echo $contents;

// Функция открывает файл, отображает его содержимое в окне браузера,
//  а затем закрывает файл:
echo "<br><br>";
echo readfile("Doc/Price_2.txt");

?>

<p> <?= $HELLO ?> </p>
  </div>
  <!-- / Content -->


  <div class="footer"> 

  </div>
  <!-- / Footer  -->
</div>
  <!-- / Стр  -->


<style>

body {margin:0;}
ul {
  list-style: none; 
  margin: 0 auto;
}
a {
  text-decoration: none;
  font-family: 'Lora', serif;
  transition: .5s linear;
}
nav {
  display: block;
  margin: 0 auto 3px;
  padding-right: 200px;

}

.nav_menu ul {
  background: pink;
  overflow: hidden;
  padding: 0;

}
.nav_menu li {
  float: left;

}
.nav_menu a {
  display: block;
  padding: 1em;
  /* Цвет границ */
  border-right: 1px solid gray;
  /* Цвет  текста*/
  color:  black;

}
/* Цвет при наведении */
.nav_menu a:hover {background: crimson} 

.Content{
/* Вн. отступ */
  margin: 0;
  background-color: gray; 
  max-width: 600px;
  min-height: 200px;
}
.footer{
  margin: 0;
  background-color: pink;
  max-width: 600px;
  min-height: 50px;
}
</style>

</body>
</html>