<?php 
// Создаем файл «config.php», определяющий параметры подключения
return [
    "host" => "localhost",
    "db" => "practice_posts",
    "login" => "root",
    "password" => "root",
    "opt" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]
];
?>