<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CalculCAController
 *
 * @author ClaraLuis
 */
class CalculCAController extends ControllerBase {
    
    public function index(){
        $calculCADAO = new CalculCADAO();
        $getAll= $calculCADAO->jointureEntreprisesCA();
        $entDAO = new EntreprisesDAO();
        $getAllEnt = $entDAO->getAll();
        $this->view("CalculCA", array(
            "all" =>json_encode($getAll),
            "allEntreprises"=>$getAllEnt
        ));
    }
    public function calculTaxe(){ 
            
        if(isset($_POST['siret']) && isset($_POST['montant']) && isset($_POST['annee'])){
            $id_entreprise = $_POST['siret'];
            $montant=$_POST['montant'];
            $annee = $_POST['annee'];
            $ca= new Ca();
            $ca->setId_entreprise($id_entreprise);
            $ca->setMontant($montant);
            $ca->setAnnee($annee);
            $CalculDAO = new CalculCADAO();
            $CalculDAO->calculCADAO($ca);
        }
        $this->redirect("CalculCA","index");
    }
}
