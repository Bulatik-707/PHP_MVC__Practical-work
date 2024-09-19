<?php 
return [
    "host" => "localhost",
    "db" => "dogs",
    "login" => "root",
    "password" => "root",
    "opt" => [
        //Показать ошибки
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]
];