<?php

class Guerrier extends AbstractPersonnage {

    public function afficher():void{
        echo "<p>Guerrier {$this->getNom()} avec une {$this->getComportementArme()->afficher()}</p>";
    }
}