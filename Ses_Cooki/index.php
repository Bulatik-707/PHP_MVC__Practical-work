<?php 
session_start();

$_SESSION['msg']=$_SESSION['msg']??"Заполни все поля !!!" ;
$_SESSION['alert']=$_SESSION['alert']??"alert-warning" ;

require_once "page1.php";
?>
 <!-- <!DOCTYPE html>
 <html lang="ru">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP</title>
 </head>
 <body>
 
 <form action="/Ysh_Pr_20/Ses_Cooki/action.php" method="post">

Имя
 <input type="text" name="name"><br><br>
 Email
 <input type="email" name="email"><br>
<button type="submit">Отправить</button>
 </form>

 </body>
 </html>
-->
<?php
// if($_SESSION['name'] != "" || $_SESSION['email'] != ""){

// echo 'Имя ' . $_SESSION['name'] . '<br>';   
// echo 'Email ' . $_SESSION['email'] . '<br><br>';

// if($_COOKIE['name'] != "" || $_COOKIE['email'] != "" ){
// echo 'COOKIE Имя ' . $_COOKIE['name'] . '<br>';
// echo 'COOKIE  Почта ' . $_COOKIE['email'] . '<br>';
// }

// if(!isset($_SESSION['A'])){
//     $_SESSION['A'] = 0;
// }
// echo "<br>" . $_SESSION['A']++ . " раз";
// echo "<br> <a href=" .$_SESSION['PHP_SELF'] . ">Обновить</a>";
// } 

?>