<?php 
// Настраиваем отображение первой страницы index.php
require_once "bootstrap.php";

//Какой запрос из  bootstrap-data  -Вызвать
//Записали в dog_2020

// 4) Выведите на страничку первую запись. 
$getFirstEntry = $data->getFirstEntry();

// 5) Выведите информацию о собаках, возраст которых 1 год 
$getDogsAge__1 = $data->getDogsAge__1();

// 6) Выведите на страничку информацию о собаках породы Мопс. 
$getDogs_Breed__Mops = $data->getDogs_Breed__Mops();

// 7) Выведите на страничку все записи. 
$getAllDogs = $data->getAllDogs();

// 8) Выведите на страничку количество ротвейлеров. 
$getDogs_Kol_Breed__Rotveler = $data->getDogs_Kol_Breed__Rotveler();

// 9) Выведите на страничку породу собаки по имени Чижик 
$getDogs_Breed_Name__Shizik = $data->getDogs_Breed_Name__Shizik();

// 10) Выведите на страничку собак старше двух лет. 
$getAllDogs_Age__2 = $data->getAllDogs_Age__2();

// 11) Выведите возраст Бобика. 
$getDogs_Age_Name__Bobik = $data->getDogs_Age_Name__Bobik();

// 12) Выведите на страничку кличку Американского кокер спаниеля. 
$getDogs_Name__breed_AKS = $data->getDogs_Name__breed_AKS();

// 13) Выведите на страничку количество Биглей и их клички. 
$getDogs_Koll__Breed_Bigli_Name = $data->getDogs_Koll__Breed_Bigli_Name();

// 16. Выведите породу собаки, возраст которой 3 года, и она принадлежит Смирнову Е.Т.
$getDogs_Breed__Age_Owner = $data->getDogs_Breed__Age_Owner();

// 17.	Выведите кличку собаки, возраст которой 2 года, и она принадлежит Иванвой М.И.
$getDogs_Name__Age_Owner = $data->getDogs_Name__Age_Owner();

// 19.	Выведите информацию в виде таблицы о владельцах и количестве собак у них (сортировка по фамилиям владельцев собак):
$getDogs_Count_Dods__Owner = $data->getDogs_Count_Dods__Owner();

// 20.	Выведите информацию в виде таблицы о породах собак и количестве (с сортировкой по количеству):
$getDogs_Count_Dods__Breed = $data->getDogs_Count_Dods__Breed();

// 21.	Выведите владельца, у которого самая старая собака.
$getDogs_Owner__Old_Age = $data->getDogs_Owner__Old_Age();


//Отправить даные index.view
require_once "dogs/index.view.php";
?>