<!doctype html>
<head>
<title></title>
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
    <a href="images/gallery/big_2/1.jpg"> <img src="images/gallery/min_2/01.jpg"> </a>
    <a href="images/gallery/big_2/2.jpg"> <img src="images/gallery/min_2/02.jpg"> </a>
    <a href="images/gallery/big_2/3.jpg"> <img src="images/gallery/min_2/03.jpg"> </a>
    <a href="images/gallery/big_2/4.jpg"> <img src="images/gallery/min_2/04.jpg"> </a>
    <a href="images/gallery/big_2/5.jpg"> <img src="images/gallery/min_2/05.jpg"> </a>
    <a href="images/gallery/big_2/6.jpg"> <img src="images/gallery/min_2/06.jpg"> </a>
    <a href="images/gallery/big_2/7.jpg"> <img src="images/gallery/min_2/07.jpg"> </a>
    <a href="images/gallery/big_2/8.jpg"> <img src="images/gallery/min_2/08.jpg"> </a>
    <a href="images/gallery/big_2/9.jpg"> <img src="images/gallery/min_2/09.jpg"> </a>
    <a href="images/gallery/big_2/10.jpg"> <img src="images/gallery/min_2/10.jpg"> </a>
    <a href="images/gallery/big_2/11.jpg"> <img src="images/gallery/min_2/11.jpg"> </a>
    <a href="images/gallery/big_2/12.jpg"> <img src="images/gallery/min_2/12.jpg"> </a>
  </div>


<h1> <?= $HELLO ?> </h1>
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
  text-align: center;
  background-color: gray; 
  max-width: 600px;
  min-height: 200px;
}
.Content img{
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