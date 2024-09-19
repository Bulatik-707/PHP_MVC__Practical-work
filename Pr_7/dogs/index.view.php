<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="/bootstrap-4.5.3/css/bootstrap.min.css">
</head>
<body> 

<!-- // 7) Выведите на страничку все записи.  -->

<div class="row">
    <a class="btn btn-primary  mb-3 p-2" href="insertDog.php">Добавить новую запись</a>
</div>

<p>7) Все записи.</p>
<p style="text-align: center;">Сисок кабелей клуба "Наши Frends".</p>
<!-- Вывод даных из dog_2020 в табл. Заголовок -->
 <table class="table table-striped table-bordered table-hover col-12">
        <tr class="d-flex">
            <td class="col-1 text-center"> № </td>
            <td class="col-2 text-center"> Кличка </td> 
            <td class="col-3 text-center"> Порода </td> 
            <td class="col-1 text-center"> Возраст </td> 
            <td class="col-2 text-center"> Владелец </td> 
            <td class="col-2 text-center"> Фото </td> 
        </tr>
<!-- Данные -->
        <?php 
        $id_Zap = 1; //Код записи в табл
        foreach($getAllDogs as $row) : ?>
        <tr class="d-flex">
            <td class="col-1 text-center"> <?= $id_Zap++; ?> </td>
            <td class="col-md-2 text-center"> <?= $row->name; ?> </td>
            <td class="col-md-3 text-center"> <?= $row->breed; ?> </td>
            <td class="col-md-1 text-center"> <?= $row->age; ?> </td>
            <td class="col-md-2 text-center"> <?= $row->owner; ?> </td>
            <td class="col-md-2 text-center"> <img src="img\<?= $row->photo; ?>.jpg" style="width: 150px;"> </td>
            <td class="col-4 p-2 text-center"> 
                <a class="btn btn-danger" href="deleteDog.php?id_dog=<?= $row->id_dog; ?>">Удалить...</a>
                <a class="btn btn-info" href="updateDog.php?id_dog=<?= $row->id_dog; ?>">Изменить</a> 
            </td>
        </tr>
    <?php endforeach; ?>
   
    </table>

    <!-- // 4) Выведите на страничку первую запись.   -->
    <p>4) Первая запись. <br> Кличка: "<?= $getFirstEntry->name; ?>";
     Порода: "<?= $getFirstEntry->breed; ?>"; 
     Возраст = <?= $getFirstEntry->age; ?>. </p>

<!-- // 5) Выведите информацию о собаках, возраст которых 1 год  -->
<p>5) Информация о собаках, возраст которых 1 год</p>

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
        foreach($getDogsAge__1 as $row) : ?>
        <tr class="d-flex">
            <td class="col-1 text-center"> <?= $id_Zap++; ?> </td>
            <td class="col-md-2 text-center"> <?= $row->name; ?> </td>
            <td class="col-md-4 text-center"> <?= $row->breed; ?> </td>
            <td class="col-md-1 text-center"> <?= $row->age; ?> </td>
        </tr>
    <?php endforeach; ?>
    </table>


<!-- // 6) Выведите на страничку информацию о собаках породы Мопс.  -->

<p>6) Информацию о собаках породы Мопс.</p>

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
        foreach($getDogs_Breed__Mops as $row) : ?>
        <tr class="d-flex">
            <td class="col-1 text-center"> <?= $id_Zap++; ?> </td>
            <td class="col-md-2 text-center"> <?= $row->name; ?> </td>
            <td class="col-md-4 text-center"> <?= $row->breed; ?> </td>
            <td class="col-md-1 text-center"> <?= $row->age; ?> </td>
        </tr>
    <?php endforeach; ?>
    </table>

<!-- // 8) Выведите на страничку количество ротвейлеров.  -->
<p>8) Выведите на страничку количество ротвейлеров.</p>

<table class="table table-striped table-bordered table-hover col-12">
        <tr class="d-flex">
            <td class="col-1 text-center"> № </td>
            <td class="col-2 text-center"> Кличка </td>
        </tr>
<!-- Данные -->
        <?php 
        $id_Zap = 1; //Код записи в табл
        foreach ($getDogs_Kol_Breed__Rotveler as $row) : ?>

        <tr class="d-flex">
            <td class="col-1 text-center"> <?= $id_Zap++; ?> </td>
            <td class="col-md-2 text-center"> <?= $row->name; ?> </td>
        </tr>
    <?php endforeach;  echo 'Ротвейлеров '. ($id_Zap - 1) ?>
    </table>

<!-- // 9) Выведите на страничку породу собаки по имени Чижик  -->
<p>9) Порода собаки по имени Чижик - "<?= $getDogs_Breed_Name__Shizik->breed; ?>". </p>

<!-- // 10) Выведите на страничку собак старше двух лет.  -->
<p>10) Выведите на страничку собак старше двух лет.</p>

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
        foreach ($getAllDogs_Age__2 as $row) : ?>

        <tr class="d-flex">
            <td class="col-1 text-center"> <?= $id_Zap++; ?> </td>
            <td class="col-md-2 text-center"> <?= $row->name; ?> </td>
            <td class="col-md-4 text-center"> <?= $row->breed; ?> </td>
            <td class="col-md-1 text-center"> <?= $row->age; ?> </td>
        </tr>
    <?php endforeach; ?>
    </table>

<!-- // 11) Выведите возраст Бобика.  -->
<p>11) Возраст Бобика = <?= $getDogs_Age_Name__Bobik->age; ?>. </p>

<!-- // 12) Выведите на страничку кличку Американского кокер спаниеля.  -->
<p>12) Кличку Американского кокер спаниеля - "<?= $getDogs_Name__breed_AKS->name; ?>". </p>

<!-- // 13) Выведите на страничку количество Биглей и их клички.  -->
<p>13) Выведите на страничку количество Биглей и их клички.</p>

<table class="table table-striped table-bordered table-hover col-12">
        <tr class="d-flex">
            <td class="col-1 text-center"> № </td>
            <td class="col-2 text-center"> Кличка </td>
        </tr>
<!-- Данные -->
        <?php 
        $id_Zap = 1; //Код записи в табл
        foreach ($getDogs_Koll__Breed_Bigli_Name as $row) : ?>

        <tr class="d-flex">
            <td class="col-1 text-center"> <?= $id_Zap++; ?> </td>
            <td class="col-md-2 text-center"> <?= $row->name; ?> </td>
        </tr>
       
    <?php endforeach;  echo 'Биглей '. ($id_Zap - 1); ?>
    </table>

<!-- // 16. Выведите породу собаки, возраст которой 3 года, и она принадлежит Смирнову Е.Т. -->
<p>16) Породу собаки Смирнова Е.Т., возраст которой 3 года: "<?= $getDogs_Breed__Age_Owner->breed; ?>". </p>

<!-- // 17.	Выведите кличку собаки, возраст которой 2 года, и она принадлежит Иванвой М.И. -->
<p>17) Кличку собаки Иванвой М.И., возраст которой 2 года: "<?= $getDogs_Name__Age_Owner->name; ?>". </p>

<!-- // 19.	Выведите информацию в виде таблицы о владельцах и количестве собак у них (сортировка по фамилиям владельцев собак): -->
<p>19. Выведите информацию в виде о владельцах и количестве их собак.</p>

<table class="table table-striped table-bordered table-hover col-12">
        <tr class="d-flex">
            <td class="col-1 text-center"> № </td>
            <td class="col-2 text-center"> Хозяин </td>
            <td class="col-1 text-center"> Кол-во </td>
        </tr>
<!-- Данные -->
        <?php 
        $id_Zap = 1; //Код записи в табл
        foreach ($getDogs_Count_Dods__Owner as $row) : ?>
        <tr class="d-flex">
            <td class="col-1 text-center"> <?= $id_Zap++; ?> </td>
            <td class="col-md-2 text-center"> <?= $row->owner; ?> </td>
            <td class="col-md-1 text-center"> <?= $row->Kol; ?> </td>
        </tr>
    <?php endforeach; ?>
    </table>

<!-- // 20.	Выведите информацию в виде таблицы о породах собак и количестве (с сортировкой по количеству): -->
<p>20. Выведите информацию в виде таблицы о породах собак и количестве (с сортировкой по количеству)</p>

<table class="table table-striped table-bordered table-hover col-12">
        <tr class="d-flex">
            <td class="col-1 text-center"> № </td>
            <td class="col-2 text-center"> Хозяин </td>
            <td class="col-1 text-center"> Кол-во </td>
        </tr>
<!-- Данные -->
        <?php 
        $id_Zap = 1; //Код записи в табл
        foreach ($getDogs_Count_Dods__Breed as $row) : ?>
        <tr class="d-flex">
            <td class="col-1 text-center"> <?= $id_Zap++; ?> </td>
            <td class="col-md-2 text-center"> <?= $row->breed; ?> </td>
            <td class="col-md-1 text-center"> <?= $row->Kol; ?> </td>
        </tr>
    <?php endforeach; ?>
    </table>

<!-- // 21.	Выведите владельца, у которого самая старая собака. -->
<p>21. Владельц, у которого самая старая собака: "<?= $getDogs_Owner__Old_Age->owner; ?>". </p>
</body>
</html>