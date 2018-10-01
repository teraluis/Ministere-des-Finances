<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EntrepriseController
 *
 * @author ClaraLuis
 */

class EntrepriseController extends ControllerBase {
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $denominationsDAO = new DenominationDAO();
        $entreprisesDAO = new EntreprisesDAO();
        $allDenominations = $denominationsDAO->getAll();
        $allEntreprises = $entreprisesDAO->getAll();
        $this->view("entreprise", array(
            "allDenominations" =>$allDenominations,
            "allEntreprises" => $allEntreprises
        ));
    }
    public function create(){
        if(isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['siret']) && !empty($_POST['siret']) && isset($_POST['denomination']) && !empty($_POST['denomination']) && isset($_POST['adresse'])){
            $nom = $_POST['nom'];
            $siret = $_POST['siret'];
            $denomination = $_POST['denomination'];
            $adresse = $_POST['adresse'];
            $entrepriseDAO = new EntreprisesDAO();
            $entreprise = new Entreprises(array());
            $entreprise->setNom($nom);
            $entreprise->setSiret($siret);
            $entreprise->setId_denomination($denomination);
            $entreprise->setAdresse($adresse);
            $entrepriseDAO->create($entreprise);
        }
        $this->redirect("entreprise","index");
    }
}
