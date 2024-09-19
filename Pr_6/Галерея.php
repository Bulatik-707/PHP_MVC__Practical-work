<!doctype html>
<head>
<title>Галерея</title>
<meta charset="utf-8">
</head>
<body>

<!-- Стр -->
<div> 
  
<!--  -->
  <div> 
  <nav class="nav_menu">
  <ul>
    <li><a href="/new/Pr_6/Главная.php">Главная</a></li>
    <li><a href="/new/Pr_6/Прайс.php">Прайс</a></li>
    <li><a href="/new/Pr_6/Галерея.php">Галерея</a></li>
    <li><a href="/new/Pr_6/Заказ.php">Заказ</a></li>
    <li><a href="/new/Pr_6/Контакты.php">Контакты</a></li>
  </ul>
</nav>

  </div>
  <!-- / -->

<!-- Content -->
  <div class = "Content"> 

    <div> 
      <a href="Альбом_1.php"> <img src="images/gallery/kids.png"> fff </a>
      <a href="Альбом_2.php"> <img src="images/gallery/foto.png"> fff </a>
      <a href="Альбом_3.php"> <img src="images/gallery/kap.png"> fff </a>
      <a href="Альбом_4.php"> <img src="images/gallery/orig.png"> fff </a>
      <a href="Альбом_5.php"> <img src="images/gallery/sv.png"> fff </a>
      <a href="Альбом_6.php"> <img src="images/gallery/ub.png"> fff </a>
    </div>

  </div>
  <!-- / Content -->


  <div class="footer"> 

  </div>
  <!-- / Footer  -->
</div>
  <!-- / Стр  -->


<style>

body {margin:0;}
ul {
  list-style: none; 
  margin: 0 auto;
}
a {
  text-decoration: none;
  font-family: 'Lora', serif;
  transition: .5s linear;
}
nav {
  display: block;
  margin: 0 auto 3px;
  padding-right: 200px;

}

.nav_menu ul {
  background: pink;
  overflow: hidden;
  padding: 0;

}
.nav_menu li {
  float: left;

}
.nav_menu a {
  display: block;
  padding: 1em;
  /* Цвет границ */
  border-right: 1px solid gray;
  /* Цвет  текста*/
  color:  black;

}
/* Цвет при наведении */
.nav_menu a:hover {background: crimson} 

.Content{
/* Вн. отступ */
  margin: 0;
/* Внутр. отступ */
  padding: 9px;
  background-color: gray; 
  max-width: 600px;
  min-height: 200px;
}
.Content img{
  width: 100px;
  margin-right: 7px;
  margin-bottom: 7px;
}
.footer{
  margin: 0;
  background-color: pink;
  max-width: 600px;
  min-height: 50px;
}
</style>

</body>
</html>