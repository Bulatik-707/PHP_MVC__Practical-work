<!doctype html>
<head>
<title>
Практика  Задача 
</title>
<meta charset="utf-8">
</head>
<body>
<p> <a href='/new/index.php'> К содержанию</a></p> <br>

<?php 
/*
Создайте ассоциативный массив, содержащий имена и 
информацию личного характера (телефон, город проживания и аватар)
 7 семи человек. Выведите информацию в таблицу.
*/

$M = array(

array("fam" => 'Иванов', "name" => 'Петр', "tel" => '545', "city" => 'Москва', "img" => '<img src=\new\Pr_5\img\0.jpg />'),
array("fam" => 'Петров',"name" => 'Иван', "tel" => '123', "city" => 'Казань', "img" => '<img src=\new\Pr_5\img\1.jpg />'),
array("fam" => 'Сидоров',"name" => 'Рома', "tel" => '875', "city" => 'Уфа', "img" => '<img src=\new\Pr_5\img\2.jpg />'),
array("fam" => 'Григорович',"name" => 'Сергей', "tel" => '236', "city" => 'Киев', "img" => '<img src=\new\Pr_5\img\3.jpg />'),
array("fam" => 'Линус',"name" => 'Тод', "tel" => '357', "city" => 'Лондон', "img" => '<img src=\new\Pr_5\img\4.jpg />'),
array("fam" => 'Гейтс',"name" => 'Билл', "tel" => '128', "city" => 'Нью-Йорк', "img" => '<img src=\new\Pr_5\img\5.jpg />'),
array("fam" => 'Маск',"name" => 'Илон', "tel" => '137', "city" => 'Париж', "img" => '<img src=\new\Pr_5\img\6.jpg />')

);
echo "<table>";
echo '<tr><th> Фамилия </th><th> Имя </th><th> Тел. </th><th> Город </th><th> Аватарка </th> </tr>';

for($i = 0; $i <  count($M); $i++){
    echo '<tr>';
    foreach($M[$i] as $value){
        echo '<td>' .$value. '</td>';
    }
    echo '</tr>';
}
echo "</table>";


?>

<style>
table {
padding: 6px;
width: 100%;   
color:white; 
background-color:black; 
border: 2px solid green; 
text-align: center;
}
table  th {
color: white; 
font-weight: bold; 
border: 2px solid green;
}
table  td {
border: 1px solid green;  
background: black;
}
img{ 
width: 40px; 
height: 40px;
}
</style>

</body>
</html>