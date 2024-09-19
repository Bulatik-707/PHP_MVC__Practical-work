<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-4.5.3/css/bootstrap.min.css">
<!-- Подкл. стили бутстрап с фыйла. и инета (ниже) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Добавление записи</title>
</head>
<body>

<div class="container">
<h2>Добавляем кабеля...</h2>

<form action="" method="POST">
    <div class="form-group mt-5"> 
    </div>

    <div class="form-group mt-3">
        <label for="title" class="mb-3">Кличка:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group mt-3">
        <label for="title" class="mb-3">Порода:</label>
        <input type="text" class="form-control" id="breed" name="breed" required>
    </div>

    <div class="form-group mt-1">
        <label for="title" class="mb-3">Возраст:</label>
        <input type="text" class="form-control" id="age" name="age" required>
    </div>

    <div class="form-group mt-3">
        <label for="title" class="mb-3">Хозяин:</label>
        <input type="text" class="form-control" id="owner" name="owner" required>
    </div>


    <button type="submit" name="btnDog" class="btn btn-primary">Добавить кабелька</button>

</form>


</div>

</body>
</html>