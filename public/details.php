<?php
include ('../app/Controller/BlogController.php');
$blogController = new \App\Controller\BlogController();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
$data = $blogController->get($id);
?>
<html>
    <head>
        <title>Details</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <h1>Edit blog entry - #<?php echo $id ?></h1>
        <hr>
        <ul>
            <li>
                <a href="./">List of blog entries</a>
            </li>
        </ul>
        <form action="functions/func_edit_post.php?id=<?php echo $id ?>" method="post">
            <label for="title">Title</label><br>
            <input type="text" name='title' id='title' value="<?php echo $data['title']; ?>">
            <br><br>

            <label for="text">Text</label><br>
            <textarea name="text" id="text"><?php echo $data['text']; ?></textarea>
            <br><br>

            <button type="submit">Update Post</button>
        </form>
    </body>
</html>