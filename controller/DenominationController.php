<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DenominationController
 *
 * @author ClaraLuis
 */
class DenominationController extends ControllerBase {
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $denominationsDAO = new DenominationDAO();
        $allDenominations = $denominationsDAO->getAll();
        $this->view("Denomination", array(
            "allDenominations" =>$allDenominations
        ));
    }
    public function create(){
        /*
         * Cette function come toutes les autres sont incompletes il manque le traitement de cas en erreur de formualire et la verfication 
         * des champs bien entendu
         */
        if(isset($_POST['nom']) && isset($_POST['user']) && isset($_POST['pourcent'])){
            $nom=$_POST['nom'];
            $user=$_POST['user'];
            $pourcent=$_POST['pourcent'];
            $denomination = new Denominations();
            $denomination->setNom($nom);
            $denomination->setUser($user);
            $denomination->setPourcent($pourcent);
            $denoDAO = new DenominationDAO();
            $denoDAO->createDenomination($denomination);
        }
        $this->redirect("Denomination","index");

    }
}
