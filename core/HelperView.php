<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HelperView
 *
 * @author ClaraLuis
 */
class HelperView {
    public function url($controlleur=CONTROLLER_DEFAULT,$action=ACTION_DEFAUT){
        $urlString ="index.php?controller=".$controlleur."&action=".$action;
        return $urlString;
    }
}
