<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlleurFrontal
 *
 * @author ClaraLuis
 */
class ControlleurFrontal extends ControllerBase {
    
    function __construct() {
        parent::__construct();
    }

    
    public static function chargerControlleur($controlleur){
        $controlleur = ucwords($controlleur).'Controller';
        
        $strFileController='controller/'.$controlleur.'.php';
        if(!is_file($strFileController)){
            header("Location:index.php"); 
        }
        require_once $strFileController;

        $controllerObj = new $controlleur();
        return $controllerObj;
    }
    public static function chargerAction($controllerObj,$action){
        $a = $action;
        $controllerObj->$a();
    }
    public static function lancerAction($controllerObj) {
        if(isset($_GET['action']) && method_exists($controllerObj, $_GET['action'])){
            $action = $_GET['action'];
            self::chargerAction($controllerObj, $action);
        }else {
            self::chargerAction($controllerObj, ACTION_DEFAUT);
        }
    }
}
