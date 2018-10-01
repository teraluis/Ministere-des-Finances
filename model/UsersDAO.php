<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersDAO
 *
 * @author ClaraLuis
 */
class UsersDAO extends EntitesBase {
    function __construct() {
        $table="users";
        parent::__construct($table);
    }

    public function create(User $user) {
        $sql="INSERT INTO users (nom,mail,password) VALUES(?,?,?)";
        $bdd = Connexion::getInstance();
        $create = $bdd->prepare($sql);
        $create->bindValue(1, $user->getNom());
        $create->bindValue(2,$user->getMail());
        $create->bindValue(3,$user->getPassword());
        $create->execute();
        if($create->errorCode()=="00000"){
            return $bdd->lastInsertId();
        }else{
            $messageErreur="erreur lors de la creation de l utilisateur ".implode(";", $create->errorInfo());
            echo $messageErreur;
            exit(-1);
        }
    }
}
