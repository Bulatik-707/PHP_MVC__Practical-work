<?php include $_SERVER['DOCUMENT_ROOT'] . '/Pr_7__Dog_MVC/views/templates/header.view.php'; ?>

<!-- posts ИЗ PostController  (  ['posts_0'=>$posts]);  ) -->
    <?php foreach($posts_0 as $post): ?>
    <h1> <?= $post['title'] ?> </h1>
    <p>  <?= $post['body'] ?> </p>

    <hr>
    <?php endforeach ?>

   <!-- *   *   *   *    * -->
   
<table class="table table-striped table-bordered table-hover col-12">
        <tr class="d-flex">
            <td class="col-1 text-center"> № </td>
            <td class="col-2 text-center"> Кличка </td>
            <td class="col-4 text-center"> Порода </td>
            <td class="col-1 text-center"> Возраст </td>
        </tr>
<!-- Данные -->
        <?php 
        $id_Zap = 1; //Код записи в табл
        foreach ($All_Dogs as $row) : ?>

        <tr class="d-flex">
            <td class="col-1 text-center"> <?= $id_Zap++; ?> </td>
            <td class="col-md-2 text-center"> <?= $row->name; ?> </td>
            <td class="col-md-4 text-center"> <?= $row->breed; ?> </td>
            <td class="col-md-1 text-center"> <?= $row->age; ?> </td>
        </tr>
    <?php endforeach; ?>
    </table>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/Pr_7__Dog_MVC/views/templates/footer.view.php'; ?>