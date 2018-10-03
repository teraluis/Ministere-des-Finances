<?php
use PHPUnit\Framework\TestCase;

final class Test extends TestCase {
    
    public function testCreationEntreprise(){
        $entrepriseDAO = new EntreprisesDAO();
        $entreprise = new Entreprises();
        $entreprise->setNom("Mark Spencer");
        $entreprise->setRepresentant("Michael Marks");
        $entreprise->setAdresse("Londres Royaume Uni");
        $entreprise->setSiret("1234567891011");
        $entrepriseDAO->create($entreprise);
    }
    public function testCreationDenomination() {
        
    }
    public function testCalculTaxe() {
        
    }

}
