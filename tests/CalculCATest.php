<?php

require './vendor/autoload.php';
/*
 * pour faire les test utiliser TRUNCATE table chiffreaffaires; TRUNCATE table denominations ; TRUNCATE table entreprises ; TRUNCATE table users;
 */

final class CalculCATest extends PHPUnit_Framework_TestCase  {

    public function testCreateReferent(){
        $user = new User();
        $user->setNom("Michael Marks");
        $user->setTelephone("01-12-34-56-98");
        $user->setMail("michael.marks@spencer.com");
        $userDAO = new UsersDAO();
        $userDAO->create($user);
    }

    public function testCreationDenomination() {
        $denom = new Denominations();
        $denom->setNom("auto-entreprise");
        $denom->setPourcent(0.25);
        $denom->setUser("Agent Dupont");
        $demDAO= new DenominationDAO();
        $demDAO->createDenomination($denom);
    }
    public function testCreationEntreprise(){
        $entrepriseDAO = new EntreprisesDAO();
        $entreprise = new Entreprises();
        $entreprise->setNom("Mark Spencer");
        $entreprise->setRepresentant("Michael Marks");
        $entreprise->setAdresse("Londres Royaume Uni");
        $entreprise->setSiret("1234567891011");
        $entreprise->setId_denomination(1);
        $entrepriseDAO->create($entreprise);
    }

    public function testCalculTaxe() {
            $ca= new Ca();
            $ca->setId_entreprise(1);
            $ca->setMontant(800000.45);
            $ca->setAnnee("2018");
            $CalculDAO = new CalculCADAO();
            $CalculDAO->calculCADAO($ca);
    }

}
