<?php
require_once 'AbstractPersonnage.php';

class Voleur extends AbstractPersonnage {
    public function afficher():void{
        echo "<p>Voleur {$this->getNom()} avec une {$this->getComportementArme()->afficher()}</p>";
    }
}