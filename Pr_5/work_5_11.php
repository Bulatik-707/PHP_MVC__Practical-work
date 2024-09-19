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
Вам необходимо запрограммировать работу кнопки переключения некоторого устройства. 
Известно, что в вашей системе могут быть устройства со следующими типами:
	Окно (close и open)
	Дверь (close и open)
	Светильник (off и on)
	Холодильник (off и on)
	Кофеварка (off и on)
Ваша задача написать функцию toggleDevice, которая принимает тип устройства и его текущее значение 
и возвращает новое состояние.
toggleDevice(‘door’, ‘close’) -> ‘open’
toggleDevice(‘light’, ‘off’) -> ‘on’

//checked  - По умолчанию
*/
?>
<form action="work_5_11.php" method="POST">

<h3>тип устройства:</h3>

<!-- <p>Окно</p>
<input type="checkbox" name="NAME[]" value="close">close
<input type="checkbox" name="NAME[]" value="open" checked>open

<p>Дверь</p>
<input type="checkbox" name="NAME[]" value="close" checked>close
<input type="checkbox" name="NAME[]" value="open">open

<p>Светильник</p>
<input type="checkbox" name="NAME[]" value="off" checked>off
<input type="checkbox" name="NAME[]" value="on">on

<p>Холодильник</p>
<input type="checkbox" name="NAME[]" value="off">off
<input type="checkbox" name="NAME[]" value="on" checked>on

<p>Кофеварка</p>
<input type="checkbox" name="NAME[]" value="off" checked>off
<input type="checkbox" name="NAME[]" value="on">on -->

********************
<p>Окно</p>
<input type="radio" name="Окно" value="close">close
<input type="radio" name="Окно" value="open" checked>open

<p>Дверь</p>
<input type="radio" name="Дверь" value="close" checked>close
<input type="radio" name="Дверь" value="open">open

<p>Светильник</p>
<input type="radio" name="Светильник" value="off" checked>off
<input type="radio" name="Светильник" value="on">on

<p>Холодильник</p>
<input type="radio" name="Холодильник" value="off">off
<input type="radio" name="Холодильник" value="on" checked>on

<p>Кофеварка</p>
<input type="radio" name="Кофеварка" value="off" checked>off
<input type="radio" name="Кофеварка" value="on">on


<br><br> <input type="submit" value="Отправить"> <br><br>

</form>

<?php 

/*
$NAMEs = $_POST["NAME"];
//Если тип не выбран
if(!isset($NAMEs)){
    $event = "<br> Выбери тип";
    $str .= "$event  <br>";
} 
//Если вабран тип
else{
    $event = "<ul>";
        for($i = 0; $i < count($NAMEs); $i ++){
            $k = $NAMEs[$i]; 
            $Val = $Val."<li> $k";
        }
    $event = $event. $Val. "</ul>";
    $str .= "$event";
}
echo $str;
*/

if (isset($_POST['Окно']) || isset($_POST['Дверь'])){
//(ЕСЛИ) ? ДА : НеТ;
echo ($_POST['Окно'] === "close") ?   "Окно -> Open <br>" : "Окно -> Close <br>";
echo ($_POST['Дверь'] === "close") ?  "Дверь -> Open <br>" : "Дверь -> Close <br>";
}
else echo '<p>Ни один из  переключателей не был выбран</p>';

if (isset($_POST['Светильник']) || isset($_POST['Холодильник']) || isset($_POST['Кофеварка'])){
    //(ЕСЛИ) ? ДА : НеТ;
    echo ($_POST['Светильник'] === "off") ?   "Светильник -> on <br>" : "Светильник -> off <br>";
    echo ($_POST['Холодильник'] === "off") ?  "Холодильник -> on <br>" : "Холодильник -> off <br>";
    echo ($_POST['Кофеварка'] === "off") ?  "Кофеварка -> on <br>" : "Кофеварка -> off <br>";
    }
else echo '<p>Ни один из  переключателей не был выбран</p>';



function toggleDevice(){

}

?>

</body>
</html>