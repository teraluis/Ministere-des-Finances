<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Denominations
 *
 * @author ClaraLuis
 */
class Denominations {
    private $id;
    private $nom;
    private $creation;
    private $user;
    private $pourcent;
    
    function __construct() {
        
    }
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getCreation() {
        return $this->creation;
    }

    function getUser() {
        return $this->user;
    }

    function getPourcent() {
        return $this->pourcent;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setCreation($creation) {
        $this->creation = $creation;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPourcent($pourcent) {
        $this->pourcent = $pourcent;
    }



}
