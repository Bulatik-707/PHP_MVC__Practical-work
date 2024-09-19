<?php
$config = require  $_SERVER['DOCUMENT_ROOT'] . '/Pr_7__Dog_MVC/Configs/Config.php';

require $_SERVER['DOCUMENT_ROOT'] . '/Pr_7__Dog_MVC/Configs/Connection.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Pr_7__Dog_MVC/models/DogsData.php';


$data = new DogsData(Connection::make($config));