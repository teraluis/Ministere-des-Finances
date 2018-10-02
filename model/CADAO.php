<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CADAO
 *
 * @author ClaraLuis
 */
class CADAO extends EntitesBase {
    function __construct() {
        $table="chiffreaffaires";
        parent::__construct($table);
    }
}
