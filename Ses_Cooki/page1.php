<?php 
session_start();

if(isset($_POST['goNext'])){
    header("Location: page2.php");
}
?>

<!DOCTYPE html>
<html lang="ru">
<head> 
  <?php $title = "Шаг № 1"; 
  require_once "header.php"; 
  ?>
</head>
<body>

<div class="container col-md-5 col-offset-3">
<hr>
<div class="alert <?= $_SESSION['alert'] ?>" role="alert">
<?= nl2br($_SESSION['msg']) ?>
</div>

<hr>
<form action="action.php" method="POST">
<div class="form-group">
    <label for="name">Имя</label>
    <input type="text" class="form-control"
      id="name" name="name" autofocus
        value="<?= $_SESSION['name'] ?>"
    >

</div>

<div class="form-group">
    <label for="phone">Телефон (+7 ХХХ ХХХ ХХ ХХ)</label>
    <input type="tel" class="form-control"
      id="phone" name="phone"
        pattern="+7[0-9]{10}" 
           value="<?= $_SESSION['phone'] ?>"
    >
</div>

<button class="btn btn-primary mt-3" name="goNext" value="goNext">Дальше</button>

</form>

</div>

</body>
</html>