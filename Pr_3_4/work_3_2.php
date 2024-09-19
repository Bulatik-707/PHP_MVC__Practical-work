<!doctype html>
<head>
<title>Пр. 3-4 | Задача 2</title>
<meta charset="utf-8">
</head>
<body>

<?php 
echo "<p> <a href='../index.php'> К содержанию</a> <br> <br>"; 

echo "<p><b>Задача 2 Нахождение значения выражения</b> <br> Найти значение функции при случайном аргументе из диапазона (-25, 25)</p>";

echo'<img src="../Pr_3_4/img/2_1.jpg" /> <br>';
$x = rand(-25, 25); 
if ($x == 0) die("<b> x = 0 </b>"); //die - остановит выполнение кода
elseif(pow( cos($x), 7) == 0) die("<b> cos^7  x = 0 </b>");

else $y =  abs( sin( pow($x, 4)) ) / pow( cos($x), 7) * log10( abs($x));
echo '<b> При х = '. $x. '; y = '. round($y, 2) .'</b>'; // 2 знака после ,

?>

</body>
</html>