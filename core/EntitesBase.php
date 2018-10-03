<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EntitesBase
 *
 * @author ClaraLuis
 */
class EntitesBase {
    private $table;
    private $db;
    private $connexion;
    const ERROR_CODE="00000";
    public function __construct($table) {
        $this->table = (string) $table;
        require_once 'Connexion.php'; 
        $this->db= Connexion::getInstance();
    }
    public function getConnexion(){
        return $this->connexion;
    }
    
    public function bd(){
        return $this->db;
    }
    public function getAll(){
        $query = "SELECT * FROM $this->table ORDER BY id DESC";
        $stmt=$this->bd()->prepare($query);
        $stmt->execute();
        if($stmt->errorCode()==self::ERROR_CODE){
            $reponse = array();
            while($row = $stmt->fetchObject()){
                $reponse[]=$row;
            }
            return $reponse;
        }else {
            return "code d'erreur getAll :".$stmt->errorCode();
        }
        
    }
    
    public function getById($id){
        $query = "SELECT * FROM $this->table WHERE id=$id";
        $stmt=$this->bd()->prepare($query);
        $stmt->execute();
        if($stmt->errorCode()==self::ERROR_CODE){
            $reponse = array();
            while($row = $stmt->fetchObject()){
                $reponse[]=$row;
            }
            return $reponse;
        }else {
            return "code d'erreur getById :".$stmt->errorCode();
        }
    }
    public function getBy($column,$value){
        $query = "SELECT * FROM $this->table WHERE $column='$value'";
        $stmt=$this->bd()->prepare($query);
        $stmt->execute();
        if($stmt->errorCode()==self::ERROR_CODE){
            $reponse = array();
            while($row = $stmt->fetchObject()){
                $reponse[]=$row;
            }
            return $reponse;
        }else {
            return "code d'erreur getById :".$stmt->errorCode();
        }
    }
    public function deleteById($id){
        $query = "DELETE  FROM $this->table WHERE id=$id";
        $stmt=$this->bd()->prepare($query);
        $stmt->execute();
        if($stmt->errorCode()==self::ERROR_CODE){
            return "ok";
        }else {
            return "ko";
        }
    }
    public function deleteBy($column,$value){
        $query = "DELETE  FROM $this->table WHERE $column='$value'";
        $stmt=$this->bd()->prepare($query);
        $stmt->execute();
        if($stmt->errorCode()==self::ERROR_CODE){
            return "ok";
        }else {
            return "ko";
        }
    }
    public function truncateAll(){
        require_once 'config/database.php';
        $query = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA LIKE '".DB_BASE."'";
        $stmt=$this->bd()->prepare($query);
        $stmt->execute();
        if($stmt->errorCode()==self::ERROR_CODE){
            $tables = array();
            $tables = $stmt->fetchAll();
            foreach($tables as $table)
            {
                $sql = "TRUNCATE TABLE `".$table['TABLE_NAME']."`";
                $result = $this->bd()->query($sql);
            }
            return "ok";
        }else {
            return "ko".$stmt->errorCode();
        }
    }
}
