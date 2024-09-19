<!doctype html>
<head>
<title>Практика 3-4 | Задача 5</title>
<meta charset="utf-8">
</head>
<body>
<? echo "<a href= '../index.php'> К содержанию </a> <br>"?>

<style>
table {padding: 6px; width: 100%;   color:white; background-color:black; border: 2px solid green; text-align: center;}
table  th {color: white; font-weight: bold; border: 2px solid green;}
table  td {border: 1px solid green;  background: black;}
</style>

<?php
echo "<p> <b> Задача 5 Накладная </b> <br> Создать таблицу Ведомость товара, с полями: Наименование товара, кол-во, цена, стоимость и Всего. Данные (Цена и кол-во) берите случайными.</p>";

echo "<h3>Ведомость товара</h3>";
echo "<table>";

echo "<tr> 
    <th>Товар</th>  
    <th>Цена</th>
    <th>Кол-во</th>
    <th>Стоимость</th>
</tr>

<tr>
    <td>CPU AMD Ryzen 7 5800 X3D</td>  
    <td>".$Cost = rand(100.10*10, 3999.99*10)/10,"</td> 
    <td>".$Kol = rand(7, 200),"</td>
    <td>".$Sum = $Kol * $Cost,"</td>
</tr>

<tr>
    <td>GPU Radeon R 7900XT</td>
    <td>",$Cost_1 = rand(20.10*10, 4999.99*10)/10,"</td> 
    <td>".$Kol_1 = rand(5, 199),"</td>
    <td>".$Sum_1 = $Kol_1 * $Cost_1,"</td>
</tr>

<tr>
    <td>RAM DDR4 8 Gb 3200 Mhg</td>
    <td>",$Cost_2 = rand(20.10*10, 99.99*10)/10,"</td> 
    <td>".$Kol_2 = rand(2, 140),"</td>
    <td>".$Sum_2 = $Kol_2 * $Cost_2,"</td>
</tr>

<tr>
    <td>HDD 1 Tb 7200</td>
    <td>",$Cost_3 = rand(20.10*10, 999.99*10)/10,"</td> 
    <td>".$Kol_3 = rand(1, 150),"</td>
    <td>".$Sum_3 = $Kol_3 * $Cost_3,"</td>
</tr>";

echo "</table>";

$Cost_Vsego = array($Sum, $Sum_1, $Sum_2, $Sum_3);
//Вывод суммы с форматом -  number_format(13 707 707.99   2, '.',' ');
echo '<h2 style="text-align: center;">Всего: '.number_format(array_sum($Cost_Vsego), 2, '.', ' ') .' руб.</h2>';

?>

</body>
</html>