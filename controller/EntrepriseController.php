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
        $utilisateurDAO = new UsersDAO();
        $allusers = $utilisateurDAO->getAll();
        $allDenominations = $denominationsDAO->getAll();
        $allEntreprises = $entreprisesDAO->getAll();
        $this->view("entreprise", array(
            "allDenominations" =>$allDenominations,
            "allEntreprises" => $allEntreprises,
            "allUsers"      =>$allusers
        ));
    }
    public function create(){
        if(isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['siret']) && !empty($_POST['siret']) && isset($_POST['denomination']) && !empty($_POST['denomination'])){
            $nom = $_POST['nom'];
            $siret = $_POST['siret'];
            $denomination = $_POST['denomination'];
            $adresse = $_POST['adresse'];
            $representant = $_POST['representant'];
            $entrepriseDAO = new EntreprisesDAO();
            $entreprise = new Entreprises(array());
            $entreprise->setNom($nom);
            $entreprise->setRepresentant($representant);
            $entreprise->setSiret($siret);
            if($denomination==1){
                $adresse="";
            }
            $entreprise->setId_denomination($denomination);
            $entreprise->setAdresse($adresse);
            $entrepriseDAO->create($entreprise);
        }
        $this->redirect("entreprise","index");
    }
}
