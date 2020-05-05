<?php

require_once '../../app/Controller/BlogController.php';

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
$title = isset($_POST['title']) ? $_POST['title'] : null;
$text = isset($_POST['text']) ? $_POST['text'] : null;

$blogController = new \App\Controller\BlogController();
echo $blogController->updatePost($id, $title, $text);
echo '<ul>
        <li>
            <a href="../index.php">List of blog entries</a>
        </li>
    </ul>';