<!doctype html>
<head>
<title>
Практика 5 Задача 5
</title>
<meta charset="utf-8">
</head>
<body>
<p> <a href='/new/index.php'> К содержанию</a></p> <br>

<?php 
//массивы, индексами которых являются строки, называются ассоциативными массивами.
//$names["Иванов"]="Иван"; - одномерный
//$A = array("name"=>"Иванов И.И.", "age"=>"25", "email"=>"ivanov@mail.ru"); - МНОГОМЕРНЫЙ

//Заголовки в табл.
$M["Name"]="Товар";
$M["Kol"]="Кол-во";
$M["Cost"]="Цена";
$M["Count"]="Стоимость";

//Кол-во
$a1 = rand(1, 13); $a2 = rand(1, 33); $a3 = rand(1, 27);
//Стоимость
$b1 = rand(49, 799); $b2 = rand(50, 899);  $b3 = rand(51, 999); 
//Сумма
$c1 = $a1 * $b1; $c2 = $a2 * $b2; $c3 = $a3 * $b3;

//Значения в табл. 
//_1_Можно сделать так
$M1["Name"]="Мягкая игрушка «Белочка»";
$M1["Kol"]="$a1";
$M1["Cost"]="$b1";
$M1["Count"]= $c1;

//_1_Или так
$M2 = array( "Name" => "Мягкая игрушка «Заяц»",
"Kol"=>"$a2",
"Cost"=>"$b2",
"Count"=>"$c2" );

$M3 = array("Name" => "Мягкая игрушка «Котэ»",
"Kol"=>"$a3",
"Cost"=>"$b3",
"Count"=>"$c3");


echo '<table>';

echo '<tr>';
foreach($M as  $value){
   //Заголовок табл.
   echo "<th> $value </th>";
}
echo '</tr>';

//for($i=1; $i<3; $i++){
echo '<tr>';
foreach($M1 as  $value){
   //Столбики
   echo "<td> $value </td>"; 
}
echo '</tr>';

echo '<tr>';
foreach($M2 as  $value){
   echo "<td> $value </td>"; 
}
echo '</tr>'; 

echo '<tr>';
foreach($M3 as  $value){
   echo "<td> $value </td>"; 
}
echo '</tr>';
//}
echo '</table>';

//Сумма
$M_Vsego = array($c1,  $c2, $c3);
//Вывод суммы с форматом -  number_format(13 707.33 - [Число]  
// 2 - [знаков после .], '.' - [разделитель],' ' - [пробел между тысячными]);
echo '<h2 style="text-align: center;">Всего: '.number_format(array_sum($M_Vsego), 2, '.', ' ') .' руб.</h2>';

//Определите суммарную и среднюю стоимость всех товаров. Выведите самые дорогие товары (самые дешевые).
echo '<h2 style="text-align: center;">Ср. стоимость всех товаров: '.number_format(array_sum($M_Vsego)/count($M_Vsego), 2, '.', ' ') .' руб.</h2>';
echo '<h2 style="text-align: center;">Дорогие: '.number_format(max($M_Vsego), 2, '.', ' ') .' руб.</h2>';
echo '<h2 style="text-align: center;">Дешевые: '.number_format(min($M_Vsego), 2, '.', ' ') .' руб.</h2>';
?>


<style>

table{
padding: 6px; 
width: 100%;
color:white; 
background-color:black;
border: 2px solid green; 
text-align: center;
}
table  th{
color: white;
font-weight: bold; 
border: 2px solid green;
}
table  td{
border: 1px solid green; 
background: black;}

</style>

</body>
</html>