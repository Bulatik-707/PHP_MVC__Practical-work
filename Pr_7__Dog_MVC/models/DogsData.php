<?php 
// Создаем класс  содержащий методы для работы с таблицей «dog_2020»
class DogsData{
   
    protected $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }
// return $stmt->fetch();  ---fetch() - Получить 1 запись (строку)
//fetchAll(); - получить все записи 
// COUNT(name) AS Kol   - AS  переименовать табл(псевдоним)

    //4) Выведите на страничку первую запись. 
    public function getFirstEntry(){
    $stmt=$this->pdo->prepare("SELECT * FROM dog_2020  Limit 1");
        if($stmt->execute()){
            return $stmt->fetch();
        };
        return null;
    }

    //5) Выведите информацию о собаках, возраст которых 1 год 
    public function getDogsAge__1(){
    $stmt=$this->pdo->prepare("SELECT * FROM dog_2020  Where age = 1");
        if($stmt->execute()){
            return $stmt->fetchAll();
        };
        return null;
    }

    //6) Выведите на страничку информацию о собаках породы Мопс. 
    public function getDogs_Breed__Mops(){
    $stmt=$this->pdo->prepare("SELECT * FROM dog_2020 WHERE breed = 'Мопс' ORDER BY id_dog");
        if($stmt->execute()){
            return $stmt->fetchAll();
        };
        return null;
    }

    //7) Выведите на страничку все записи. 
    public function getAllDogs(){
    $stmt=$this->pdo->prepare("SELECT * FROM dog_2020  ORDER BY id_dog");
        if($stmt->execute()){
            return $stmt->fetchAll();
        };
        return null;
    }

    // 8) Выведите на страничку количество ротвейлеров. 
    public function getDogs_Kol_Breed__Rotveler(){
    $stmt=$this->pdo->prepare("SELECT * FROM dog_2020 WHERE breed = 'Ротвейлер'");
        if($stmt->execute()){
            return $stmt->fetchAll();
        };
        return null;
    }

    // 9) Выведите на страничку породу собаки по имени Чижик 
    public function getDogs_Breed_Name__Shizik(){
    $stmt=$this->pdo->prepare("SELECT breed FROM dog_2020 WHERE name = 'Чижик'");
        if($stmt->execute()){
            return $stmt->fetch();
        };
        return null;
    }

    // 10) Выведите на страничку собак старше двух лет. 
    public function getAllDogs_Age__2(){
    $stmt=$this->pdo->prepare("SELECT * FROM dog_2020 WHERE age > 2");
        if($stmt->execute()){
            return $stmt->fetchAll();
        };
        return null;
    }

    // 11) Выведите возраст Бобика. 
    public function getDogs_Age_Name__Bobik(){
    $stmt=$this->pdo->prepare("SELECT age FROM dog_2020 WHERE name = 'Бобик'");
        if($stmt->execute()){
            return $stmt->fetch();
        };
        return null;
    }

    // 12) Выведите на страничку кличку Американского кокер спаниеля. 
    public function getDogs_Name__breed_AKS(){
    $stmt=$this->pdo->prepare("SELECT name FROM dog_2020 WHERE breed = 'Американский кокер спаниель'");
        if($stmt->execute()){
            return $stmt->fetch();
        };
        return null;
    }

    // 13) Выведите на страничку количество Биглей и их клички. 
    public function getDogs_Koll__Breed_Bigli_Name(){
    $stmt=$this->pdo->prepare("SELECT name FROM dog_2020 WHERE breed = 'Бигль'");
        if($stmt->execute()){
            return $stmt->fetchAll();
        };
        return null;
    }

    // 16. Выведите породу собаки, возраст которой 3 года, и она принадлежит Смирнову Е.Т.
    public function getDogs_Breed__Age_Owner(){
    $stmt=$this->pdo->prepare("SELECT breed FROM dog_2020 WHERE age = 3 and owner = 'Смирнов Е.Т.'");
        if($stmt->execute()){
            return $stmt->fetch();
        };
        return null;
    }

    // 17.	Выведите кличку собаки, возраст которой 2 года, и она принадлежит Иванвой М.И.
    public function getDogs_Name__Age_Owner(){
    $stmt=$this->pdo->prepare("SELECT name FROM dog_2020 WHERE age = 2 and owner = 'Иванова И.Ю.'");
        if($stmt->execute()){
            return $stmt->fetch();
        };
        return null;
    }

    // 19.	Выведите информацию в виде таблицы о владельцах и количестве собак у них (сортировка по фамилиям владельцев собак):
    public function getDogs_Count_Dods__Owner(){
    $stmt=$this->pdo->prepare("SELECT owner, COUNT(name) AS Kol FROM dog_2020 GROUP BY owner");
        if($stmt->execute()){
            return $stmt->fetchAll();
        };
        return null;
    }

    // 20.	Выведите информацию в виде таблицы о породах собак и количестве (сорт. по убыванию):
    public function getDogs_Count_Dods__Breed(){
    $stmt=$this->pdo->prepare("SELECT breed, COUNT(name) AS Kol FROM dog_2020 GROUP BY breed ORDER BY Kol DESC");
        if($stmt->execute()){
            return $stmt->fetchAll();
        };
        return null;
    }

    // 21.	Выведите владельца, у которого самая старая собака.
    public function getDogs_Owner__Old_Age(){
    $stmt=$this->pdo->prepare("SELECT owner FROM dog_2020 WHERE age = (select MAX(age) from dog_2020)");
        if($stmt->execute()){
            return $stmt->fetch();
        };
        return null;
    }

    //Получить одну запись (по коду)
    public function getOneDogs($id_dog){
    $stmt=$this->pdo->prepare("SELECT * FROM dog_2020 WHERE id_dog = :id_dog");
        if($stmt->execute(["id_dog"=>$id_dog])){
            return $stmt->fetch();
        };
        return null;
    }

    //Добавление записи (принимаем даные (поля табл. и формы))
    public function insertDog($data){
    $stmt = $this->pdo->prepare("INSERT INTO dog_2020 (name, breed, age, owner) VALUES (:name, :breed, :age, :owner)");
        if($stmt->execute([
            "name" => $data["name"],
            "breed" => $data["breed"],
            "age" => $data["age"],
            "owner" => $data["owner"]
        ])){
            return $this->pdo ->lastInsertId();
        };
        return -1;
    }
    //Обновление записи (принимаем даные (поля  табл и формы) кнопка "Изменить" принимает код записи)
    public function updateDog($data){
    $stmt=$this->pdo->prepare("UPDATE dog_2020 SET name=:name, breed=:breed, age=:age, owner=:owner WHERE id_dog = :id_dog");
        if($stmt->execute([
            "id_dog"=>$data["id_dog"],
            "name" => $data["name"],
            "breed" => $data["breed"],
            "age" => $data["age"],
            "owner" => $data["owner"]
        ])){
        return 1;
    };
    return -1;
    }

    //Удалить запись при наж. на "Удалить" (получаем код записи)
    public function deleteDog($id_dog){
    $stmt=$this->pdo->prepare("DELETE FROM dog_2020 WHERE id_dog = :id_dog");
        if($stmt->execute(["id_dog"=>$id_dog])){
            return 1;
        };
    return -1;
    }
    
}

?>