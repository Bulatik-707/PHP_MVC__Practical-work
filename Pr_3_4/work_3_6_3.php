<!doctype html>
<head>
<title>Практика 3-4 | Задача 6_3 </title>
<meta charset="utf-8">
</head>
<body>
<p> <a href='../index.php'> К содержанию</a></p>

<?php 
echo "<p> <b> Задача 6. Вариант - 3 </b> <br> Написать программу вычисления выражения. Исходные данные рассматривать как случайными числами. </p>";

$a = rand(1, 40);
$b = rand(3, 33);
echo'<img src="../Pr_3_4/img/6_3.jpg" /> <br>';
echo "a= ".$a. " b= ".$b ."<br><br> Ответ: ";
printf('%.2f', (2 / (pow($a, 2) + 25)) + $b);
?>


</body>
</html>