<!doctype html>
<head>
<title>Практика 3-4 | Задача 6-14</title>
<meta charset="utf-8">
</head>
<body>
<p> <a href='../index.php'> К содержанию</a></p>

<?php 
echo "<p> <b> Задача 6. Вариант - 14 </b> <br> Написать программу вычисления выражения. Исходные данные рассматривать как случайными числами.</p>";
echo'<img src="../Pr_3_4/img/6_14.jpg" /> <br>';
$x = rand(1, 73);
echo "При x = ".$x. "<br> Ответ: ";
printf('%.2F', (14 - ($x + pow($x, 2)) ) / 5);
?>

</body>
</html>