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
/*Написать функцию getAdults, которая принимает массив пользователей, 
по каждому из которых известен возраст и имя.
Результатом работы функции должен стать массив, содержащий сведения о 
пользователях, старше 18 лет.
*/

$M = array(

    array("Name" => 'Лейла', "Age" => '1'),
    array("Name" => 'Петя', "Age" => '9'),
    array("Name" => 'Миша', "Age" => '13'),
    array("Name" => 'Паша', "Age" => '17'),
    array("Name" => 'Юля', "Age" => '21'),
    array("Name" => 'Коля', "Age" => '27'),
    array("Name" => 'Иешуа', "Age" => '33'),
    array("Name" => 'Моше', "Age" => '40'),
    array("Name" => 'Маша', "Age" => '15'),
    array("Name" => 'Вася', "Age" => '73'),
    );

    function f_getAdults($Array){
        foreach($Array as $Val){
             echo $Val;
        }
    }

f_getAdults($M);
?>


</body>
</html>