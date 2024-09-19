<?php 
// $title = "Главная страница";
// require_once __DIR__."/../parts/header.php";
?>

<!-- <h2>Посты</h2>

<a class="btn btn-primary  mb-3 p-2" href="/Ysh_Pr_20/BD_Stud/insertPost.php">Добавить новую запись</a>

<div class="row">
    <?php
   // $i = 1;
   // foreach ($post as $row): ?>
    <div class="card mt-3 p-2 col-md-4 col-sm-6">
         <img src="<= $row->photo ? 'uploads/' . $row->photo : '' ?>"
             class="card-img-top img-small" alt="Фото">

        <div class="card-body">
        <h5 class="card-title"> <= $row->title ?> </h5>
        <p class="card-text"> <= date_format(new DateTime($row->datePublication), 'd.m.Y') ?> </p>
        
        <a class="btn btn-info p-2" style="width: 100%;" href="showPost.php?id=<= $row->id; ?>">Подробно</a>
    </div>
</div>
    <?php// endforeach; ?>

</div> -->
    
<?php// require_once __DIR__."/../parts/footer.php"; ?>



<!-- --------------- -->

<?php 
$title = "Главная страница";
require_once __DIR__ . "/../parts/header.php";
?>

<h2>Посты</h2>

<div class="row">
    <a class="btn btn-primary  mb-3 p-2" href="insertPost.php">Добавить новую запись</a>
</div>

    <table class="table table-striped table-bordered table-hover col-12">
        <tr class="d-flex">
            <td class="col-1 text-center"> # </td>
            <td class="col-2 text-center"> Название </td>
            <td class="col-3 text-center"> Описание </td>
            <td class="col-2 text-center"> Дата публикации </td>
            <td class="col-4 text-center"></td>
       
        </tr>

        <?php 
        $i = 1;
        foreach ($post as $row) : ?>
        <tr class="d-flex">
            <td class="col-1 text-center"> <?= $i++ ?> </td>
            <td class="col-2"> <?= $row->title ?> </td>
            <td class="col-3"> <?= nl2br($row->description) ?> </td>
            <td class="col-2 text-center"> <?= date_format(new DateTime($row->datePublication), 'd.m.Y') ?> </td>
            <td class="col-4 p-2 text-center"> 
                <a class="btn btn-danger" href="deletePost.php?id=<?= $row->id; ?>">Удалить...</a>
                <a class="btn btn-info" href="updatePost.php?id=<?= $row->id; ?>">Изменить</a> 
            </td>
        </tr>
    <?php endforeach; ?>

        </table>
    
        <?php require_once __DIR__ . "/../parts/footer.php"; ?>

<!-- ============================ -->

<!-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
</head>
<body> 

<div class="container">
    <a class="col-md-4 btn btn-primary mt-5 mb-3 p-3" href="../insertPost.php">Add new </a>
    <table class="table table-striped table-bordered table-hover col-md-12">
    <php foreach ($posts as $row): ?>
        <tr class="d-flex">
            <td class="col-md-1"> <= $row -> id ?> </td>
            <td class="col-md-2"> <= $row -> title ?> </td>
            <td class="col-md-3"> <= nl2br($row->description) ?> </td>
            <td class="col-md-2"> <= date_format(new DateTime($row->datePublication), 'd : m : Y') ?> </td>
            <td class="col-md-2 p-4"> <a class="btn btn-info p-2" href="../deletePost.php?id=<= $row->id; ?>">Delete...</a> </td>
        </tr>
    <php endforeach; ?>
        </table>
    
 </div>

</body>
</html> -->