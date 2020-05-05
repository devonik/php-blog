<?php
include ('../app/Controller/BlogController.php');
$blogController = new \App\Controller\BlogController();
$blogController->addPost('test', 'test');
?>
<html>
    <head></head>
    <body>
        <form action="functions/func_add_post.php" method="post">
            <label for="title">Titel</label><br>
            <input type="text" name="title" id="title"><br>

            <label for="text">Name</label><br>
            <textarea name="text" id="text"></textarea><br><br>

            <button type="submit">Add Post</button>
        </form>
    </body>
</html>