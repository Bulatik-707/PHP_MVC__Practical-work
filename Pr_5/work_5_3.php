<!doctype html>
<head>
<title>
Практика 5 Задача 3
</title>
<meta charset="utf-8">
</head>
<body>
<p> <a href='/new/index.php'> К содержанию</a></p> <br>

<div class = "kart">
    <h1>Галерея</h1>
    <hr>

<?php 

$gal = array(
    array("nameKart" => 'Рисунок_№1', "Name_img" => '\new\Pr_5\img\Zen3_1.jpg'),
    array("nameKart" => 'Рисунок_№2', "Name_img" => '\new\Pr_5\img\0.jpg'),
    array("nameKart" => 'Рисунок_№3', "Name_img" => '\new\Pr_5\img\2.jpg'),
    array("nameKart" => 'Рисунок_№4', "Name_img" => '\new\Pr_5\img\1.jpg'),
    array("nameKart" => 'Рисунок_№5', "Name_img" => '\new\Pr_5\img\4.jpg'),
    array("nameKart" => 'Рисунок_№6', "Name_img" => '\new\Pr_5\img\5.jpg'),
    array("nameKart" => 'Рисунок_№7', "Name_img" => '\new\Pr_5\img\6.jpg'), 
    array("nameKart" => 'Рисунок_№8', "Name_img" => '\new\Pr_5\img\AMD_1.jpg'),
    array("nameKart" => 'Рисунок_№9', "Name_img" => '\new\Pr_5\img\ААААА_КОТ.jpg' .'')

);

foreach($gal as $item){
    echo "<img src={$item['Name_img']} title={$item['nameKart']}>";
}
?>
</div>

<style> 
.kart{
    margin: 0 auto;
    width: 1000px;
    overflow: hidden;
    background: rgb(27, 11, 43);
}
.kart img{
    width: 233px;
    height: 273px;
    -webkit-transform: scale(0.7);
    -moz-transform: scale(0.7);
    -o-transform: scale(0.7);
    -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
    opacity: 0.7;
    margin: 10px;
}
.kart img:hover{
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
    opacity: 1;
    box-shadow: 0px 0px 25px #fff;
    -webkit-box-shadow: 0px 0px 30px #fff;
    -moz-box-shadow: 0px 0px 30px #fff;
}
</style>

</body>
</html>