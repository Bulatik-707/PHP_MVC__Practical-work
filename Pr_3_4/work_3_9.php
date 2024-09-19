<!doctype html>
<head>
<title>Практика 3-4 | Задача 9</title>
<meta charset="utf-8">
</head>
<body>
<p> <a href='../index.php'> К содержанию</a></p>

<?php 
echo "<p> <b> Задача 9. </b> Войдет ли в конверт размерами X см и Y см 
прямоугольная открытка размерами A см и B см? </p>";

// Размер конверта
$X = array(10, 20, 30, 50);
$Y = array(10, 20, 30, 50);

// Размер открытки
$A = array(10, 20, 30, 50);
$B = array(10, 20, 30, 50);

// $X[array_rand($X)] - Выб. значения из Масива случайно.
$Lep = $X[array_rand($X)];

echo "Размер конверта: ". $Lep. " см и ". $Y[array_rand($Y)] ." см <br>";
echo "Размер открытки: ". $A[array_rand($A)]. " см и ". $B[array_rand($B)]. " см <br>";

// (Если так...) ? ТО... : ИНАЧЕ... 
echo ($Lep %2 != 0) ? "$Lep  Yes <br> " : "$Lep No <br>"; 

    
?>

</body>
</html>