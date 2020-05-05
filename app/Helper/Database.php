<?php
namespace App\Helper;

use Dotenv\Dotenv;
use PDO;

class Database
{
    static function getConnection(){
        //$dotenv = Dotenv::createImmutable(__DIR__);
        //$dotenv->load();
        $connection = 'mysql:host=localhost;dbname=php_blog';

        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );

        try{
            //TODO put the variables into .env
            return new PDO($connection, 'root', 'Start123', $options);
        }catch(\PDOException $ex){
            echo 'Cannot connect to database: '.$ex->getMessage();
            die();
        }
    }
}