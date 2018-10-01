<?php
require_once 'config/global.php';
require_once 'core/ControllerBase.php';
require_once 'core/ControlleurFrontal.php';
$GLOBALS['base'] = "";
if(isset($_GET["controller"])){
    $controllerObj = ControlleurFrontal::chargerControlleur($_GET["controller"]);
 
}else {
    $controllerObj = ControlleurFrontal::chargerControlleur(CONTROLLER_DEFAULT);
}

ControlleurFrontal::lancerAction($controllerObj);