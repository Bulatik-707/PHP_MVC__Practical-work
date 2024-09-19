<?php
//Именованое пространство (путь к файлу)
namespace MyProject\Models\Users;
//Класс Юзер. Имя
class User{

    private $name;

    public function __construct(string $name){

        $this->name = $name;
    }
//Получить Имя
    public function getName(): string{

        return $this->name;
    }
}

?>