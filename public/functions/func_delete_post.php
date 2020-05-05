<?php

require_once '../../app/Controller/BlogController.php';

$id = isset($_REQUEST['id']) ? htmlspecialchars($_REQUEST['id']) : null;

$blogController = new \App\Controller\BlogController();
echo $blogController->deletePost($id);
echo '<ul>
        <li>
            <a href="../index.php">List of blog entries</a>
        </li>
    </ul>';