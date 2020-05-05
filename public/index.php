<?php
    include ('../app/Controller/BlogController.php');
    $blogController = new \App\Controller\BlogController();
    $blogEntries = $blogController->get();
?><html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body class="blog">
        <h1>Blog</h1>
        <hr>

        <a href="add.php">Add post</a>

        <?php foreach($blogEntries as $entry){ ?>
            <div class="blog-entry">
                <div class="blog-entry-header">
                    #<?php echo $entry['id'] .' - '. $entry['title'] ?>
                </div>
                <div class="blog-entry-body">
                    <?php echo $entry['text'] ?>
                </div>
                <div class="blog-entry-actions">
                    <a href="details.php?id=<?php echo $entry['id']; ?>">
                        <button>Edit</button>
                    </a>
                    <a href="delete.php?id=<?php echo $entry['id']; ?>">
                        <button>Delete</button>
                    </a>
                </div>
            </div>
        <?php } ?>
    </body>
</html>