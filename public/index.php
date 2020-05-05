<?php
    include ('../app/Controller/BlogController.php');
    $blogController = new \App\Controller\BlogController();
    $blogController->addPost('test', 'test');
?><html>
    <head></head>
    <body>
    DIES IST EIN BLOG
    </body>
</html>