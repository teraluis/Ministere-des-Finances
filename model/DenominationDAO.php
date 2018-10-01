<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DenominationDAO
 *
 * @author ClaraLuis
 */
class DenominationDAO extends EntitesBase{
    function __construct() {
        $table="denominations";
        parent::__construct($table);
    }
}
