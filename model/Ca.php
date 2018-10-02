<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ca
 *
 * @author ClaraLuis
 */
class Ca {
    private $id;
    private $id_entreprise;
    private $montant;
    private $impots;
    private $annee;
    private $modification;
    function __construct() {
        
    }
    function getId() {
        return $this->id;
    }
    function getImpots() {
        return $this->impots;
    }

    function setImpots($impots) {
        $this->impots = $impots;
    }

    function getAnnee() {
        return $this->annee;
    }

    function getModification() {
        return $this->modification;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getId_entreprise() {
        return $this->id_entreprise;
    }

    function setId_entreprise($id_entreprise) {
        $this->id_entreprise = $id_entreprise;
    }

    
    function setAnnee($annee) {
        $this->annee = $annee;
    }

    function setModification($modification) {
        $this->modification = $modification;
    }
    function getMontant() {
        return $this->montant;
    }

    function setMontant($montant) {
        $this->montant = $montant;
    }



}
