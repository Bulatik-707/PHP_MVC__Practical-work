<?php 
//Именованое пространство (путь к файлу)
namespace MyProject\Models\Articles;

// если в файле с классом указан namespace, то все классы, 
// которые указываются в данном файле будут искаться в том же namespace. 
// Так как у нас класс User находится в другом namespace, 
// то мы должны явно это указать. Делается это с помощью слова use 
// после указания текущего namespace, но перед описанием класса.
use MyProject\Models\Users\User;

//Класс статья. заголовок, текст, автор.
class Article{

    private $title;
    private $text;
    private $author;

//Можно писать типы данных
    public function __construct(string $title, string $text, User $author){
        
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }
//Получить заголовок
    public function getTitle(): string{

        return $this->title;
    }
//Получить текст
    public function getText(): string{

        return $this->text;
    }
//Получить автора. User - класс к которому указывают
    public function getAuthor(): User{

        return $this->author;
    }
}

?>