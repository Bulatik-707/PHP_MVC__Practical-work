<?php 
// Создаем файл «bootstrap.php», обеспечивающий начальную загрузку
$config = require_once "config.php";
require_once "database/Connection.php";
require_once "database/PostData.php";
$data = new PostData(Connection::make($config));