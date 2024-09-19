<?php
class View{

    public function render($template, $values=[]){
        extract($values, 0);
        require $_SERVER['DOCUMENT_ROOT'] . '/Pr_7__Dog_MVC/views/' . $template . '.php';
    }
}