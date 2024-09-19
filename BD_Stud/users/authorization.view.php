<?php 
$title = "Авторизация";

require_once  __DIR__ . "/../parts/header.php";
?>

<div class="col-6 offset-3">
    <h3 class="mt-5">Авторизация</h3>

    <div class="alert <?= $_SESSION['alert'] ?>" role="alert">
        <?= $_SESSION["msg"] ?>
    </div>

    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">  </label>
            <input type="text" class="form-control" id="login" name="login" value="<?= $_POST['login'] ?? '' ?>">
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">  </label>
            <input type="password" class="form-control" id="password" name="password" value="<?= $_POST['password'] ?? '' ?>">
        </div>

        <button type="submit" class="btn btn-primary" name="btnGo"> Войти </button>

    </form>
</div>

<?php require_once __DIR__ . "/../parts/footer.php" ?>