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
    <a href="images/gallery/big_4/1.jpg"> <img src="images/gallery/min_4/01.jpg"> </a>
    <a href="images/gallery/big_4/2.jpg"> <img src="images/gallery/min_4/02.jpg"> </a>
    <a href="images/gallery/big_4/3.jpg"> <img src="images/gallery/min_4/03.jpg"> </a>
    <a href="images/gallery/big_1/4.jpg"> <img src="images/gallery/min_4/04.jpg"> </a>
    <a href="images/gallery/big_4/5.jpg"> <img src="images/gallery/min_4/05.jpg"> </a>
    <a href="images/gallery/big_4/6.jpg"> <img src="images/gallery/min_4/06.jpg"> </a>
    <a href="images/gallery/big_4/7.jpg"> <img src="images/gallery/min_4/07.jpg"> </a>
    <a href="images/gallery/big_4/8.jpg"> <img src="images/gallery/min_4/08.jpg"> </a>
    <a href="images/gallery/big_4/9.jpg"> <img src="images/gallery/min_4/09.jpg"> </a>
    <a href="images/gallery/big_1/10.jpg"> <img src="images/gallery/min_4/10.jpg"> </a>
    <a href="images/gallery/big_1/11.jpg"> <img src="images/gallery/min_4/11.jpg"> </a>
    <a href="images/gallery/big_4/12.jpg"> <img src="images/gallery/min_4/12.jpg"> </a>
  </div>4

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