<?php 
// Создаем файл «bootstrap.php», обеспечивающий начальную загрузку
$config = require_once "config.php";
//"Подкл" классов
require_once "database/Connection.php";
require_once "database/DogsData.php";
//Созд. V класса и записали  в data 
$data = new DogsData(Connection::make($config));