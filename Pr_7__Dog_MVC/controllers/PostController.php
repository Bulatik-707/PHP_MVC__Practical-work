<?php
require $_SERVER['DOCUMENT_ROOT'] . '/Pr_7__Dog_MVC/models/Post.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Pr_7__Dog_MVC/views/View.php';


class PostController{

    private $view; 

    public function __construct()
    {
        $this->view = new View();
    }

    public function index(){

        //Для поста
       $post = new Post();
        $posts = $post->getPosts(); 
        $this->view->render('posts/index.view', ['posts_0'=>$posts]);

        //Собак
        require $_SERVER['DOCUMENT_ROOT'] . '/Pr_7__Dog_MVC/controllers/bootstrap.php';

        $posts = $data->getAllDogs();
        $this->view->render('posts/index.view', ['All_Dogs'=>$posts]);
        
    }
}