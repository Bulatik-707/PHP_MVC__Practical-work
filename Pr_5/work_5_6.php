﻿<!doctype html>
<head>
<title>
Практика  Задача 
</title>
<meta charset="utf-8">
</head>
<body>
<p> <a href='/new/index.php'> К содержанию</a></p> <br>

<?php 
/*Создайте ассоциативный массив, содержащий список студентов по группам
 (ГРУППА => СТУДЕНТЫ) Просмотрите созданный массив на странице,
  выводя название групп и связанных с ними студентов. 
  Определите количество студентов в каждой группе*/

  $M = array(
    //1 => - Ключ нач. с 1
"ИС-106" => array( 1 => "Иванов" ,"Сидоров", "Волков", "Кардан"),
"ТО-666" => array( 1 => "Петров", "Мурзик", "Сидорович", "Сюзи"),
"ИС-206" => array( 1 => "Дегтерев","Меченый"), 
"ИС-306" => array( 1 => "Шапард","Сидорович"),
"ИС-406" => array( 1 => "Барсик")
  );

foreach($M as $key => $value){
  //Группа
  echo "<b> $key: </b> <br>";
  foreach($value as $inner_key => $val ){
    //Студенты
    echo "  $val  , ";
  }
echo '<br><br> Студентов в группе ' .$key. ' : ' .$inner_key. '<br><br>';
}
?>



</body>
</html>