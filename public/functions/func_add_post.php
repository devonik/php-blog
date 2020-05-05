<?php
require_once '../../app/Controller/BlogController.php';

$title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) :null;
$text = isset($_POST['text']) ? htmlspecialchars($_POST['text']) : null;

$blogController = new \App\Controller\BlogController();
echo $blogController->addPost(new \App\Models\BlogEntry(null, $title, $text));
echo '<ul>
        <li>
            <a href="../index.php">List of blog entries</a>
        </li>
    </ul>';