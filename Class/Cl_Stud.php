<?php
Class Student {
   //Св-ва Имя, Фам, Возраст, Группа
   public $First_Name;
   public $Sur_Name;
   private  $Age;
   public  $Group_Stud;

//_1_ Способ
   //После присвоения ЗНАЧЕНИЕ по умолчанию надо ПРИСВОИТЬ и след. св-ву
   public function __construct ($F_Name, $S_Name, $Gr_Stud = "IS-406", $age = 19){
   // $this -> ПИСАТЬ ОБЯЗАТЕЛЬНО
      $this -> First_Name = $F_Name;
      $this -> Sur_Name = $S_Name;
      $this -> Age = $age;
      $this -> Group_Stud = $Gr_Stud;
   }

//Читать возраст
   public function getAge(){
      return $this -> Age;
   }
//Менять возраст
   public function setAge($value){
      if($value < 0) $this -> Age = -$value;
      else $this -> Age = $value;
   }
//Вывод инфы Имя, Фам, Група
   public function show(){
      return ("Студент: <br>"  
      ."Имя: " .$this -> First_Name.
      "<br> Фамилия: " .$this -> Sur_Name.
      "<br> Группа: " .$this -> Group_Stud);
   }

}

class Stud_Ticket  extends Student{
   public $Photo;
   public $number_ticket;

//_2_ Способ 
   public function __construct($F_Name, $S_Name, $Gr_Stud, $age, $photo = "img.jpg", $number_ticket = "707")
   {
      parent:: __construct($F_Name, $S_Name, $Gr_Stud, $age);

      $this -> Photo = $photo;
      $this -> number_ticket = $number_ticket;
   }

//Выводим изображение
   public function showImg(){
      echo "<img src='{$this -> img}'>";
   }
}

//Создаем студента
$St1 = new Student("Имя", "Фам", "Группа", 30);
$St2 = new Student("Имя1", "Фам1", "Група1");
$St3 = new Student("Имя2", "Фам2");

//Вывод инфы 
echo "<p>" .$St1 -> show(). "</p>";
echo "<p>" .$St2 -> getAge(). "</p>";
echo "<p>" .$St3 -> setAge(40). "</p>";

?>