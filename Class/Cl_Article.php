<?php
Class Article{
    protected $title_Text; //Заголовок
    protected $body_Text; //Текст
    protected $font_Size_Title; //Размеры
    protected $font_Size_Body;
    protected $color; //Цвет текста.; и фона
    protected $font_color;
    protected $border_Size; //размер рамки

public function __construct($title_Text, $body_Text, $font_Size_Title = "24", $font_Size_Body = "12", $color = "white", $font_color = "black", $border_Size = "0")
{
    $this -> title_Text = $title_Text;
    $this -> body_Text = $body_Text;
    $this -> color = $color;
    $this -> font_color = $font_color;
    $this -> font_Size_Title = $font_Size_Title;
    $this -> font_Size_Body = $font_Size_Body;
    $this -> border_Size = $border_Size; 
}
//Вывод инфы*
public function outArticle(){
    echo "
    <div style = 'width: 500px; padding: 5px; margin-top:14px; background-color: {$this -> font_color}; border: solid blue {$this -> border_Size}px;'>
        <h3 style = 'font-size: {$this -> font_Size_Title}px; color: {$this -> color};'>
        {$this -> title_Text} </h3>
        <p style = 'font-size: {$this -> font_Size_Body}px; color: {$this -> color};'> {$this -> body_Text} </p>
    </div>";
}

}
?>