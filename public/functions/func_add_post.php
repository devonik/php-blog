<?php
require_once '../../app/Controller/BlogController.php';

$title = isset($_POST['title']) ? $_POST['title'] :null;
$text = isset($_POST['text']) ? $_POST['text'] : null;

$blogController = new \App\Controller\BlogController();
echo $blogController->addPost($title, $text);