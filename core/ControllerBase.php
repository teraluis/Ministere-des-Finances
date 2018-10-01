<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerBase
 *
 * @author ClaraLuis
 */
class ControllerBase {
     public function __construct() {
         require_once 'EntitesBase.php';
         require_once 'ModelBase.php';
         foreach (glob("model/*.php") as $file) {
             require_once $file;
         }
     }
     public function view($vue,$data){
         foreach ($data as $id_assoc => $valeur) {
             ${$id_assoc} = $valeur;
         }
         require_once 'core/HelperView.php';
         $helper = new HelperView();
         require_once 'view/'.$vue.'View.php';
     }
     public function redirect($controlleur=CONTROLLER_DEFAULT,$action=ACTION_DEFAUT){
         header("Location:index.php?controller=".$controlleur."&action=".$action); 
     }
}
