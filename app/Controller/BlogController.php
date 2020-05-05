<?php
namespace App\Controller;

use App\Helper\Database;


class BlogController
{
    private $database;

    /**
     * BlogController constructor.
     */
    public function __construct()
    {
        $database = Database::getConnection();
    }


    public function addPost(string $title, string $text){
        $title = htmlspecialchars(trim(addslashes($_POST['title'])));
        $text = htmlspecialchars(trim(addslashes($_POST['text'])));
    }
}