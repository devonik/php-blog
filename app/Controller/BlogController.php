<?php
namespace App\Controller;
require_once dirname(__FILE__) . '/../../vendor/autoload.php';

use App\Helper\Database;
use App\Models\BlogEntry;

/**
 * Class BlogController
 * @package App\Controller
 */
class BlogController
{
    /**
     * @var Database
     */
    private $database;

    /**
     * BlogController constructor.
     */
    public function __construct()
    {
        $this->database = Database::getConnection();
    }

    /**
     * @param int|null $id
     * @return array|mixed
     */
    public function get(int $id = null){
        if($id !== null){
            $sql = 'SELECT * FROM blog where id='.$id;
            $statement = $this->database->query($sql);
            return $statement->fetch();
        }
        $sql = 'SELECT * FROM blog';
        $statement = $this->database->query($sql);
        return $statement->fetchAll();
    }

    /**
     * @param BlogEntry $blogEntry
     * @return string
     */
    public function addPost(BlogEntry $blogEntry){
        try {
            $title = $blogEntry->getTitle();
            $text = $blogEntry->getText();

            //TODO Global validation here would be nice if I had more time
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

    /**
     * @param BlogEntry $blogEntry
     * @return string
     */
    public function updatePost(BlogEntry $blogEntry){
        try {
            $id = $blogEntry->getId();
            $title = $blogEntry->getTitle();
            $text = $blogEntry->getText();

            //TODO Global validation here would be nice if I had more time
            if (!empty($id) && !empty($title) && !empty($text)) {
                $sql = "UPDATE blog SET title = :title, text = :text WHERE id = :id";
                $statement = $this->database->prepare($sql);
                $data = array(
                    'id'            => $id,
                    'title'         => $title,
                    'text'          => $text,
                );
                $statement->execute($data);

                return 'Updated post';

            }else{
                return 'Id, title or text were empty';
            }
        }catch (\Exception $e){
            return "Could not update post. Error: ".$e;
        }
    }

    /**
     * @param int $id
     * @return string
     */
    public function deletePost(int $id){

        try {
            //TODO Global validation here would be nice if I had more time
            if (!empty($id)) {
                $sql = "DELETE FROM blog WHERE id = :id";
                $statement = $this->database->prepare($sql);
                $data = array(
                    'id'            => $id
                );
                $statement->execute($data);

                return 'Deleted post';

            }else{
                return 'Id were empty';
            }
        }catch (\Exception $e){
            return "Could not delete post. Error: ".$e;
        }
    }
}