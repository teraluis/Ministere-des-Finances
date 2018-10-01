<?php
require_once 'config/database.php';
class Connexion
{
    static $instance;
    public static function getInstance() {
        if(is_null(self::$instance)){
            self::$instance = self::connecter();
        }
        return self::$instance;
    }
    
    private static function connecter() {
        try{
            $bdd =  new PDO('mysql:host='.DB_HOST.';dbname='.DB_BASE.';charset=UTF8', DB_USER, DB_PASS);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $bdd;
        }catch (Exception $exception){
            echo $exception->getMessage();
            exit(-1);
        }
    }
}