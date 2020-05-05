<?php
include ('../app/Controller/BlogController.php');
$blogController = new \App\Controller\BlogController();
?>
<html>
    <head></head>
    <body>
        <form action="functions/func_add_post.php" method="post">
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title"><br>

            <label for="text">Text</label><br>
            <textarea name="text" id="text"></textarea><br><br>

            <button type="submit">Add Post</button>
        </form>
    </body>
</html>