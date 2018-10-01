<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author ClaraLuis
 */
class User {
    //put your code here
    private $id,$nom,$mail,$telephone;
    
    function __construct(array $donnees) {
        foreach ($donnees as $key=>$value){
            $method="set".ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getMail() {
        return $this->mail;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    
    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }




}
