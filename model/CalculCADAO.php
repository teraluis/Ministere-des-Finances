<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CalculCADAO
 *
 * @author ClaraLuis
 */
class CalculCADAO extends EntitesBase {
    const ERROR_CODE="00000";
    function __construct() {
        $table="chiffreaffaires";
        parent::__construct($table);
    }
    
    public function calculCADAO(Ca $ca) {
        //debut du calcul
        $denominationDAO= new DenominationDAO();
        $entrepriseDAO = new EntreprisesDAO();
        //on optien l'id d'entrperise
        $id_entreprise = $ca->getId_entreprise();
        //on obeint des infos sur l'entreprise en question
        $entreprise = $entrepriseDAO->getById($id_entreprise);
        //on recupere l'id denomination    
        $entreprisezero = $entreprise[0];
        $entreprise_id = $entreprisezero->id_denomination;
        $denomination_id= $entreprise_id;
        //on recupere la denomination
        $denomination= $denominationDAO->getById($denomination_id);
        $denominationzero = $denomination[0];
        $pourcent = floatval($denominationzero->pourcent);
        //cacul des impots
        $impots_denomination =$pourcent;
        $impots = $ca->getMontant()*$impots_denomination;
        $ca->setId_entreprise($id_entreprise);
        $ca->setImpots($impots);
        //fin du Calcul
        $query = "INSERT INTO chiffreaffaires (id_entreprise,montant,impots,annee,modification)"
                . " VALUES(?,?,?,?,NOW())";
        $bdd = Connexion::getInstance();
        $create = $bdd->prepare($query);
        $create->bindValue(1,$ca->getId_entreprise());
        $create->bindValue(2,$ca->getMontant());
        $create->bindValue(3,$ca->getImpots());
        $create->bindValue(4,$ca->getAnnee());

        $create->execute();
        if($create->errorCode()==self::ERROR_CODE){
            $reponse = array();
            while($row = $create->fetchObject()){
                $reponse[]=$row;
            }
            return $reponse;
        }else {
            return "code d'erreur getById :".$create->errorCode();
        }
    }
    public function jointureEntreprisesCA(){
        $query = "SELECT entreprises.siret, entreprises.nom , chiffreaffaires.montant, chiffreaffaires.impots,chiffreaffaires.annee
        FROM entreprises
        LEFT JOIN chiffreaffaires ON chiffreaffaires.id_entreprise = entreprises.id";
        $bdd = Connexion::getInstance();
        $afficher=$bdd->prepare($query);
        $afficher->execute();
        if($afficher->errorCode()==self::ERROR_CODE){
            $reponse = array();
            while($row = $afficher->fetchObject()){
                $reponse[]=$row;
            }
            return $reponse;
        }else {
            return "code d'erreur getAll :".$afficher->errorCode();
        }
    }
}
