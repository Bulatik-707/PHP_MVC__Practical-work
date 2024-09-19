<?php
$title = "Добавление поста";
require_once __DIR__ . "/../parts/header.php";
?>

<h2>Добавляем пост...</h2>

 <?php 
$btnText = "Добавить";
require_once __DIR__."/../parts/form.php";
require_once __DIR__."/../parts/footer.php";
?>

<!-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
<h2>Добавляем пост...</h2>

<form action="" method="POST">
    <div class="form-group mt-5">
        <label for="post_date">Дата публикации:
            <= date("d : m : Y") ?>
        </label>
    </div>

    <div class="form-group mt-5">
        <label for="title" class="mb-3">Название:</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="form-group">
        <label for="description" class="mb-3">Введи текст:</label>
        <textarea class="form-control" id="description" name="description" rows="10" cols="50" required></textarea>
    </div>

    <button type="submit" name="btnPost" class="btn btn-primary">Добавить пост</button>

</form>


</div>

</body>
</html> -->