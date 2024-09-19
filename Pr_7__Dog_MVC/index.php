<?php

require $_SERVER['DOCUMENT_ROOT'] . '/Pr_7__Dog_MVC/controllers/PostController.php';

$postContr = new PostController();
$postContr->index();
