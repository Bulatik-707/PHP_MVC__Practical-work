<?php 
// Создаем класс «PostData.php», содержащий методы для работы с таблицей «posts»
class PostData{
   
    protected $pdo;

    public function __construct(PDO $pdo)

    {
        $this->pdo = $pdo;
    }

    public function getAllPosts(){
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
    public function insertPost($data){
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

    public function deletePost($id){
        $stmt=$this->pdo->prepare("DELETE FROM posts WHERE id = :id");
        if($stmt->execute(["id"=>$id])){
            return 1;
        };
        return -1;
    }

    public function getOnePost($id){
        $stmt=$this->pdo->prepare("SELECT * FROM posts WHERE id = :id");
        if($stmt->execute(["id"=>$id])){
            return $stmt->fetch();
        };
        return null;
    }

    public function updatePost($data){
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


    public function insertUser($data){
        $stmt=$this->pdo->prepare("INSERT INTO users (name_user, login, password)
                VALUES (:name_user, :login, :password)");
        if($stmt->execute([
            "name_user"=>$data["name_user"],
            "login"=>$data["login"],
            "password"=>$data["password"]
            
        ])){
            return $this->pdo->lastInsertId();
        };
        return -1;
    }

}

?>