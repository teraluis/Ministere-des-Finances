<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DenominationDAO
 *
 * @author ClaraLuis
 */
class DenominationDAO extends EntitesBase{
    const code = "00000";

    function __construct() {
        $table="denominations";
        parent::__construct($table);
    }
    public function createDenomination(Denominations $denomination){
        $sql="INSERT INTO denominations (nom,creation,user,pourcent) VALUES(?,CURDATE(),?,?)";
        $bdd = Connexion::getInstance();
        $create = $bdd->prepare($sql);
        $create->bindValue(1,$denomination->getNom());
        $create->bindValue(2,$denomination->getUser());
        $create->bindValue(3,$denomination->getPourcent());
        $create->execute();
        if($create->errorCode()== self::code){
            return $bdd->lastInsertId();
        }else{
            $messageErreur="erreur lors de la creation de l entreprise ".implode(";", $create->errorInfo());
            echo $messageErreur;
            exit(-1);
        }
    }
}
