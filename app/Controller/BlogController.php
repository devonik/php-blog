<?php
namespace App\Controller;
require_once dirname(__FILE__) . '/../../vendor/autoload.php';

use App\Helper\Database;

class BlogController
{
    private $database;

    /**
     * BlogController constructor.
     */
    public function __construct()
    {
        $this->database = Database::getConnection();
    }

    public function get(int $id = null){
        $sql = 'SELECT * FROM blog';
        if($id !== null){
            $sql = 'SELECT * FROM blog where id='.$id;
        }

        $statement = $this->database->query($sql);
        return $statement->fetchAll();
    }

    public function addPost(string $title, string $text){
        try {
            if (!empty($title) && !empty($text)) {
                $sql = "INSERT INTO blog (title, text) " . "VALUES (:title, :text);";
                $statement = $this->database->prepare($sql);
                $data = array(
                    'title'         => $title,
                    'text'          => $text,
                );
                $statement->execute($data);

                return 'Saved post';

            }else{
                return 'Title or text were empty';
            }
        }catch (\Exception $e){
            return "Could not save post. Error: ".$e;
        }
    }
}