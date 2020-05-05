<?php


class Database
{
    static function getConnection(){
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        die(getenv('DB_USERNAME'));
        /*$optionen = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );

        try{
            return new PDO(getenv(), $benutzer, $passwort, $optionen);
        }catch(PDOException $ex){
            echo 'Fehler: '.$ex->getMessage();
            die();
        }*/
    }
}