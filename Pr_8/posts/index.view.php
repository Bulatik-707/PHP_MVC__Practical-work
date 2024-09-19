<?php 
$title = "Главная страница";
require_once __DIR__."/../parts/header.php";
?>

<h2>Посты</h2>

<a class="btn btn-primary  mb-3 p-2" href="/Pr_8/insertPost.php">Добавить новую запись</a>

<div class="row">
    <?php
    $i = 1;
    foreach ($post as $row): ?>
    <div class="card mt-3 p-2 col-md-4 col-sm-6">
         <!-- <img src="<= $row->photo ? 'uploads/' . $row->photo : '' ?>"
             class="card-img-top img-small" alt="Фото"> -->

        <div class="card-body">
        <h5 class="card-title"> <?= $row->title ?> </h5>
        <p class="card-text"> <?= date_format(new DateTime($row->datePublication), 'd.m.Y') ?> </p>
        
        <a class="btn btn-info p-2" style="width: 100%;" href="showPost.php?id=<?= $row->id; ?>">Подробно</a>
    </div>
</div>
    <?php endforeach; ?>

</div>
    
<?php require_once __DIR__."/../parts/footer.php"; ?>
