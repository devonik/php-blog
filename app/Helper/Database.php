<?php
namespace App\Helper;

use Dotenv\Dotenv;
use PDO;

/**
 * Class Database
 * @package App\Helper
 */
class Database
{
    /**
     * @return PDO
     */
    static function getConnection(){
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        try{
            return new PDO(getenv('DB_MYSQL_PDO_CONNECTION'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'));
        }catch(\PDOException $ex){
            echo 'Cannot connect to database: '.$ex->getMessage();
            die();
        }
    }
}