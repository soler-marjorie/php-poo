<?php

class Maison2 extends Maison {
    private ?string $nom = "Chez nous";
    private ?int $longueur = 6;
    private ?int $largeur = 5;

    public function __construct(?string $nom, ?string $longueur, ?string $largeur){
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

}