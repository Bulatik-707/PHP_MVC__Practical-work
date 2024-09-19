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
/*Напишите функцию search, которая принимает массив и искомый элемент, 
верните true если исходный элемент найден в массиве,
и false если такого элемента в массиве нет.
 
search([1, 7, 8], 8) -> true 
search([1, 7, 8], 9) -> false
search(['alex', 'andrey', 'carla'], 'victor') -> false
search(['alex', 'andrey', 'carla'], 'carla') -> true
*/

//Ф. принимает масив, и то что ищем
function f_search($Array = array(), $val){
    //Усли есть (= 1)
    if(in_array($val, $Array) == 1) echo $val.' -> true <br>'; 
    else echo $val. ' -> false <br>';
}

// Что передаем [Масив] , ЧТО ИЩЕМ
f_search( [2, 4, 6], 3);
f_search( [1, 5, 7], 5);
f_search( ['Барсик', 'Тигр', 'Мурзик'], 'Том');
f_search( ['Барсик', 'Тигр', 'Мурзик'], 'Мурзик');
?>


</body>
</html>