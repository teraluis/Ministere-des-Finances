<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Entreprises
 *
 * @author ClaraLuis
 */
class Entreprises  {
    private $id;
    private $siret;
    private $nom;
    private $id_denomination;
    private $adresse;
    private $representant;
    
    public function __construct() {
        
    }
    function getRepresentant() {
        return $this->representant;
    }

    function setRepresentant($representant) {
        $this->representant = $representant;
    }

        function getNom() {
        return $this->nom;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

        function getId() {
        return $this->id;
    }

    function getSiret() {
        return $this->siret;
    }

    function getId_denomination() {
        return $this->id_denomination;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setSiret($siret) {
        $this->siret = $siret;
    }

    function setId_denomination($id_denomination) {
        $this->id_denomination = $id_denomination;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }


    
}
