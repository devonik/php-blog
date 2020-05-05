<?php

require_once '../../app/Controller/BlogController.php';

$id = isset($_REQUEST['id']) ? htmlspecialchars($_REQUEST['id']) : null;

$blogController = new \App\Controller\BlogController();

$response = $blogController->deletePost($id);
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
