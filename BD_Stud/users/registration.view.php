<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>

<div class="container">
<h2>Регистрация</h2>

<form action="" method="POST">



    <label for="name_user" class="mb-3">Пользователь:</label>
    <input type="text" class="form-control" id="name_user" name="name_user" required>

    <label for="login" class="mb-3">Логин:</label>
    <input type="text" class="form-control" id="login" name="login" required>

    <label for="password" class="mb-3">Пароль:</label>
    <input type="text" class="form-control" id="password" name="password" required>

    <div class="row mt-3">
    <button type="submit" name="btnReg" class="btn btn-primary">Зарегестрироваться</button>
    </div>

</form>

</body>
</html>
