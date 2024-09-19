<?php 
// Создаем класс «PostData.php», содержащий методы для работы с таблицей «posts»
class PostData{
   
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllPosts(){ //Показать все посты
        $stmt=$this->pdo->prepare("SELECT * FROM posts ORDER BY datePublication");
        if($stmt->execute()){
            return $stmt->fetchAll();
        };
        return null;
    }

    // public function insertPost($data){
    //     $stmt = $this->pdo->prepare("INSERT INTO posts (title, description, datePublication, photo, id_user)
    //             VALUES (:title, :description, :datePublication, :photo, :id_user)");
    //     if($stmt->execute([
    //         "title" => $data["title"],
    //         "description" => $data["description"],
    //         "datePublication" => $data["datePublication"],
    //         "photo" => $data["photo"],
    //         "id_user" => 1
            
    //     ])){
    //         return $this->pdo ->lastInsertId();
    //     };
    //     return -1;
    // }
    public function insertPost($data){ //Добавить пост
        $stmt=$this->pdo->prepare("INSERT INTO posts (title, description, datePublication)
                VALUES (:title, :description, :datePublication)");
        if($stmt->execute([
            "title"=>$data["title"],
            "description"=>$data["description"],
            "datePublication"=>$data["datePublication"]
            
        ])){
            return $this->pdo->lastInsertId();
        };
        return -1;
    }

    public function deletePost($id){ //Удалить пост 
        $stmt=$this->pdo->prepare("DELETE FROM posts WHERE id = :id");
        if($stmt->execute(["id"=>$id])){
            return 1;
        };
        return -1;
    }

    public function getOnePost($id){ //Получить/показать 1 пост
        $stmt=$this->pdo->prepare("SELECT * FROM posts WHERE id = :id");
        if($stmt->execute(["id"=>$id])){
            return $stmt->fetch();
        };
        return null;
    }

    public function updatePost($data){ //Обновить пост
        $stmt=$this->pdo->prepare("UPDATE posts SET title=:title, description=:description WHERE id = :id");
    if($stmt->execute([
        "id"=>$data["id"],
        "title"=>$data["title"],
        "description"=>$data["description"]
    
        ])){
    return 1;
    };
    return -1;
    }


    public function ShowCommPost($id){ //Вывод коментов по КОДУ (конкретного) поста 
        $stmt=$this->pdo->prepare("SELECT author_comm, Text_comm, date FROM  comments WHERE id_post = :id");
        if($stmt->execute(["id"=>$id ])){
            return $stmt->fetchAll();
        };
        return null;

    }

    public function InsertCommPost($data){ //Добавить комент
        $stmt=$this->pdo->prepare("INSERT INTO comments (id_post, author_comm, Text_comm, date)
            VALUES (:id_post, :author_comm, :Text_comm, :date)");
        
        if($stmt->execute([
            "id_post"=>$data["id_post"],
            "author_comm"=>$data["author_comm"],
            "Text_comm"=>$data["Text_comm"],
            "date"=>$data["date"]
            
        ])){
            return $this->pdo->lastInsertId();
        };
        return -1;
    }

    

    public function getImgArt_Sum(){ //Вывести 1 рис. СЛУЧАЙНО
        $stmt=$this->pdo->prepare("SELECT img, sum FROM img_art ORDER BY RAND() LIMIT 1");
        if($stmt->execute()){
            return $stmt->fetch();
        };
        return null;
    }

}
