<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelBase
 *
 * @author ClaraLuis
 */
class ModelBase extends EntitesBase {
    private $table;
    
    public function __construct() {
        $this->table = (string) $table;
        parent::__construct($table);
        
    }
    public function executerSQL(){
        $stmt=$this->bd()->prepare($query);
        $stmt->execute();
        if($query===true){
            if($query->rowCount()>1){
                while($row = $query->fetchObject()){
                   $resultSet[] = $row; 
                }
            }else if($query->rowCount()==1){
                if($row=$query->fetchObjct()){
                    $resultSet = $row;
                }
            }else {
                $resultSet = false;
            }
        }
        else {
            $resultSet=false;
        }
        return $resultSet;
    }
}
