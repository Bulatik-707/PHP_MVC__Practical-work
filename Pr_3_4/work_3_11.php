﻿<!doctype html>
<head>
<title>Практика 3-4 | Задача 11</title>
<meta charset="utf-8">
</head>
<body>
<p> <a href='../index.php'> К содержанию</a></p>

<?php 
echo "<p> <b> Задача 11. </b> В туристической фирме клиенту на выбор были предложены 
три путевки (про каждую известны стоимость N1, N2 и N3 
и продолжительность тура Dl, D2 и D3 дней).
Какую из трех путевок может выбрать турист, если в его распоряжении 
    X денег и У дней отпуска? </p>";

    // 1 => Х.  Индекс начать с 1  ! ! ! 
$N = array(1 => rand(10, 40), rand(10, 73), rand(10, 99)); //Стоимость
$D = array(1 => rand(7, 30), rand(14, 30), rand(21, 30)); //Прод. тура

// У туриста
$X = rand(10, 100); // Денег
$Y = rand(7, 30); // Дней
echo "У туриста: Денег = $X , Дней - $Y <br><br>";

$a = 0; // Путевка
for($i = 1; $i <= 3; $i++)
{
    echo "Стоимость путевки №$i = " .$N[$i]. " $. <br>";
    echo "Продолжительность тура " .$D[$i]. " дней. <br><br>";
}
    for($i = 0; $i <= 2; $i++)
    {
        if($Y > $D[$i] && $X > $N[$i]) $a++;
    }
echo "<b> Турист может выбрать ";

if($a == 1) echo "1ю путёвку! </b> <br>";
if($a == 2) echo "2ю путёвку! </b> <br>";
if($a == 3) echo "3ю путёвку! </b> <br>"; 
?>

</body>
</html>