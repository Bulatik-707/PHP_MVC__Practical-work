<!doctype html>
<head>
<title>
Практика 5 Задача 4
</title>
<meta charset="utf-8">
</head>
<body>
<p> <a href='/new/index.php'> К содержанию</a></p> <br>

<?php 

$menu = array(
    'Главная' => 'index.php',
    'О нас' => 'about.php',
    'Контакты' => 'contact.html'
    //index.php, about.php, contact.html
);

foreach($menu as $key => $value){
echo "<a href=" .$value. ">" .$key. "</a> ";


}
?>


</body>
</html>