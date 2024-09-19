<!doctype html>
<head>
<title>
Практика 5 Задача 10
</title>
<meta charset="utf-8">
</head>
<body>
<p> <a href='/new/index.php'> К содержанию</a></p> <br>

<?php 
/*
Напишите функцию quotient, которая принимает два параметра (делимое и делитель) 
и возвращает частное (результат деления). Если делитель равен нулю, то функция должна вернуть сообщение:
 “Делитель не может быть нулем”.

quotient(50, 2) -> 25
quotient(0, 2) -> 0
quotient(2, 0) -> Делитель не может быть нулем

*/


function quotient($A, $B){
    if($B == 0) die('Делитель не может быть нулем!');
    else return  $A/$B;
}
echo ' -> ' .quotient(50, 2). '<br>';
echo ' -> ' .quotient(0, 3). '<br>';
echo ' -> ' .quotient(5, 0). '<br>';
?>


</body>
</html>