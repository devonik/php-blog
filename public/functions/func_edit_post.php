<?php

require_once '../../app/Controller/BlogController.php';

$id = isset($_REQUEST['id']) ? htmlspecialchars($_REQUEST['id']) : null;
$title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : null;
$text = isset($_POST['text']) ? htmlspecialchars($_POST['text']) : null;

$blogController = new \App\Controller\BlogController();

$response = $blogController->updatePost(new \App\Models\BlogEntry($id, $title, $text));
if($response){
    header('Location: ../');
}else{
    echo $response;
    echo '<ul>
        <li>
            <a href="../">List of blog entries</a>
        </li>
    </ul>';
}
