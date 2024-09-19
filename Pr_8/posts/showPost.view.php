<?php 
$title = "Добавление поста";

session_start();//
if(isset($_POST['btnComm'])){
    //Если рез. = добавить комент
    if($_POST['res_1'] == $_SESSION['res_0']){/// КАПЧА

        $_POST['date'] = date("Y-m-d");
        $_POST['id_post'] = $post->id;
        $id = $data->InsertCommPost($_POST);
        //После доб. комента остаемся в тек. ($post->id) посте
        $_SESSION['mes'] = '<p style = "color:green";> Комментарий добавлен! </p>';
        header("Location: /Pr_8/showPost.php?id=$post->id");
        exit;
    }
    else{
        $_SESSION['mes'] = '<p style = "color:red";> Дан неверный ответ!!! </p>';
        header("Location: /Pr_8/showPost.php?id=$post->id");
        exit;
    }///
}

///КАПЧА Выражение
//$a = rand(0,5);
//$b = rand(1,11);
//$_SESSION['res_0'] = $a + $b;///

//КАПЧА Рисунок
$IMG = $data->getImgArt_Sum();
$_SESSION['res_0'] = $IMG->sum;



require_once __DIR__."/../parts/header.php";
?>

<h2 class="offset-3">Пост</h2>

<div class="card mt-3 col-8 offset-2">

    <div class="card-body">
        <h5 class="card-title"> <?=$post->title?> </h5>
        <p class="card-text"> <?=date_format(new DateTime($post->datePublication), 'd.m.Y')?> </p>
        
        <a class="btn btn-outline-danger" style="width: 100%;" href="/Pr_8/deletePost.php?id=<?=$post->id;?>">Удалить</a>
        <a class="btn btn-outline-primary" href="/Pr_8/updatePost.php?id=<?=$post->id;?>">Изменить</a>
        <a class="btn btn-outline-info" href="/Pr_8/index.php">Назад</a> 
    </div>
</div>


<div>
    <h2 class="card-body offset-2">Комментарии:</h2>
    <?php foreach ($comm as $row): ?>
    <div class="card-body offset-2" style="border: solid 2px; margin-top: 5px">
    <p> <b> Добавил: </b> <?= $row->author_comm ?> </p>
    <p> <b> Дата: </b> <?= date_format(new DateTime($row->date), 'd.m.Y') ?></p>
    <p> <?= $row->Text_comm ?> </p>
    </div>


    <?php endforeach; ?>
</div>


<form action="" method="POST" class="card-body offset-2">

    <div class="form-group mt-5">
        <label for="author_comm" class="mb-3">Имя:</label>
        <input type="text" class="form-control" id="author_comm" name="author_comm" 
        required value="<?= $comm->author_comm ?? '' ?>">
    </div>

    <div class="form-group">
        <label for="Text_comm" class="mb-3">Комментарий:</label>
        <textarea class="form-control" id="Text_comm" name="Text_comm" rows="5" cols="30" 
        required value="<?= $comm->Text_comm ?? '' ?>"></textarea>
    </div>

    <div> <!-- //КАПЧА Выражение-->
        <p><b>Анти-БОТ. Выполни задачу!!!</p><br>
        <?php echo $_SESSION['mes']; unset($_SESSION['mes']);?>
        <!-- <p><b>Выражение: <php echo $a. ' + ' .$b. ' = ';?></b> <input type="text" name="res_1" required/> </p> -->
        
        <!-- //КАПЧА Рисунок-->
        <?php echo '<img src="data:image/png;base64,'.base64_encode($IMG->img) .'">' ?> 
        <input type="text" name="res_1" required/>
   
   
    </div>


    <br><button type="submit" name="btnComm" class="btn btn-primary">Добавить комментарий</button>

</form>


<?php require_once __DIR__."/../parts/footer.php"; ?>
