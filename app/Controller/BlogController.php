<?php


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
        $name = htmlspecialchars(trim(addslashes($_POST['name'])));
        $passwort = htmlspecialchars(trim(addslashes($_POST['passwort'])));
    }
}