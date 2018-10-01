<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UtilisateursControlleur
 *
 * @author ClaraLuis
 */
class UsersController extends ControllerBase {
    
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $utilisateurDAO = new UsersDAO();
        $allusers = $utilisateurDAO->getAll();
        $this->view("index", array(
            "allusers" =>$allusers
        ));
    }
    public function create(){
        if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['tel'])){
            $nom = $_POST['nom'];
            $mail = $_POST['mail'];
            $tel = $_POST['tel'];
            $utilisateurDAO = new UsersDAO();
            $utilisateur = new User(array());
            $utilisateur->setNom($nom);
            $utilisateur->setMail($mail);
            $utilisateur->setTelephone($tel);
            $utilisateurDAO->create($utilisateur);
        }
        $this->redirect("Users","index");
    }
    public function delete(){
        if(isset($_GET['id'])){
            $id = (int) $_GET["id"];
            $usuarioDAO= new UsersDAO();
            $usuarioDAO->deleteById($id);
            $this->redirect();
        }
    }
}
