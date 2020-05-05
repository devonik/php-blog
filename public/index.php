<?php
    include ('../app/Controller/BlogController.php');
    $blogController = new \App\Controller\BlogController();
    $blogEntries = $blogController->get();
?><html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <h1>Blog</h1>
        <hr>
        <ul>
            <li>
                <a href="add.php">Add post</a>
            </li>
        </ul>
        <table class="blog-table">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>text</th>
            </tr>
            <?php foreach($blogEntries as $entry){ ?>
                <tr>
                    <td><?php echo $entry['id'] ?></td>
                    <td><?php echo $entry['title'] ?></td>
                    <td><?php echo $entry['text'] ?></td>
                    <td><a href="details.php?id=<?php echo $entry['id']; ?>">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $entry['id']; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>