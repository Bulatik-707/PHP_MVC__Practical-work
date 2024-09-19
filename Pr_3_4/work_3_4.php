<!doctype html>
<head>
<title>Практика 3-4 | Задача 4</title>
<meta charset="utf-8">
</head>
<body>
<?php 
echo "<a href='../index.php'> К содержанию </a> <br>"; 

echo "<p> <b> Задача 4 Арифметическая последовательность </b> <br> Выполнить нахождение значений арифметической последовательности, где n от 1 до 10, а x – константа из диапазона от 23 до 24. Результат вывести в таблицу. </p>"; //Арифметическая последовательность
    
echo  "<table border='1'; style='text-align: center;'>"; //Текст по центру
// Находим Х
define("X", rand(23.0*10, 24.0*10)/10);
echo "x = " .X;
// Строки
for ($tr=0; $tr<=10; $tr++)
{ 
    echo "<tr>";
    // Столбцы
    for ($td = 1; $td <= 1; $td++)//? этот цикл можно удалить!
    { 
        // 1я строка
        if ($tr === 0)
        { 
            //заголовoк
            echo"<th> a n </th>", "<th>an = 5x + 2n</th>"; 
        }
        else
        {
            // все ячейки, кроме первой строки. tr = 1-10 / var_dump($tr);
            $res = 5*X + 2*$tr; 
            echo "<td>a". $tr ."</td><td>". $res."</td>" ;
            /*for($n=1; $n<=10; $n++){
               $table .= "</tr>". $An = 5*X + 2*$n ."<br>";
              */            
        }  
    }
    echo "</tr>";
}

echo "</table> <br>";
//Исп. "$table .=" --> echo пишем 1 раз
echo $table; // "</table> <br>" 

?>

</body>
</html>