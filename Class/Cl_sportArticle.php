<?php
require_once "Cl_Article.php";

// sportArticle СЫН (наследник) Article
class sportArticle extends Article{
    private $img;
//Вывод итекста + рисунк
    public function __construct($title_Text, $body_Text, $img, $color = "", $font_color = "",
    $font_Size_Title = "24",  $font_Size_Body = "16")
    {
        parent::__construct($title_Text, $body_Text, $color, $font_color, $font_Size_Title, $font_Size_Body);
        $this -> img = $img;
        $this -> color = $color;
        $this -> font_color = $font_color;

    }
    //Вывод инфы*
    public function outArticle()
    {
        echo "
        <div style = 'text-align: center; background-color: {$this -> font_color}; padding: 5px; margin-top:14px;'>
            <h3 style = 'font-size: {$this -> font_Size_Title}px;'>
            {$this -> title_Text} </h3>
            <img src = 'img/{$this -> img}' style = 'width:33%;'
                alt='Рисунок'>
            <p style = 'font-size: {$this -> font_Size_Body}px; color: {$this -> color};'> {$this -> body_Text} </p>
        </div>";
    }

}

class hrefArticle extends Article{
    private $href;

    public function __construct($href){
        $this -> href = $href; 
    }
    public function hrefArticle(){
        
    }
}

?>