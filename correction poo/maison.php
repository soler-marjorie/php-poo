<?php
class Maison{
    //ATTRIBUTS
    private ?string $nom;
    private ?float $longueur;
    private ?float $largeur;
    private ?int $nbrEtage;

    //Constructeur
    public function __construct(?string $nom, ?float $longueur, ?float $largeur, ?int $nbrEtage){
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->nbrEtage = $nbrEtage;
    }

    //GETTER ET SETTER
    public function getNom():?string{
        return $this->nom;
    }
    public function setNom(?string $newNom):Maison{
        $this->nom = $newNom;
        return $this;
    }
    public function getLongueur():?float{
        return $this->longueur;
    }
    public function setLongueur(?float $newLongueur):Maison{
        $this->longueur = $newLongueur;
        return $this;
    }
    public function getLargeur():?float{
        return $this->largeur;
    }
    public function setLargeur(?float $newLargeur):Maison{
        $this->largeur = $newLargeur;
        return $this;
    }
    public function getNbrEtage():?int{
        return $this->nbrEtage;
    }
    public function setNbrEtage(?int $newNbrEtage):Maison{
        $this->nbrEtage = $newNbrEtage;
        return $this;
    }

    //METHODE
    public function surface():void{
        $surface = $this->getLongueur() * $this->getLargeur() * ($this->getNbrEtage() + 1);
        echo "<p>La surface de ".$this->getNom()." est de $surface m².</p>";
    }
}