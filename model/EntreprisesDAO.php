<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EntreprisesDAO
 *
 * @author ClaraLuis
 */
class EntreprisesDAO extends EntitesBase {
    private $code="00000";
    function __construct() {
        $table="entreprises";
        parent::__construct($table);
    }

    public function create(Entreprises $entreprises) {
        $sql="INSERT INTO entreprises (siret,nom,id_denomination,adresse) VALUES(?,?,?,?)";
        $bdd = Connexion::getInstance();
        $create = $bdd->prepare($sql);
        $create->bindValue(1,$entreprises->getSiret());
        $create->bindValue(2,$entreprises->getNom());
        $create->bindValue(3,$entreprises->getId_denomination());
        $create->bindValue(4,$entreprises->getAdresse());
        $create->execute();
        if($create->errorCode()== $this->code){
            return $bdd->lastInsertId();
        }else{
            $messageErreur="erreur lors de la creation de l entreprise ".implode(";", $create->errorInfo());
            echo $messageErreur;
            exit(-1);
        }
    }
}
