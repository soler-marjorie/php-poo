<?php
class Vehicule{
    //ATTRIBUTS
    private ?string $nom;
    private ?int $nbrRoue;
    private ?int $vitesse;

    //Constructeur
    public function __construct(?string $nom,?int $nbrRoue,?int $vitesse){
        $this->nom = $nom;
        $this->nbrRoue = $nbrRoue;
        $this->vitesse = $vitesse;
    }

    //GETTER ET SETTER
    public function getNom():?string{
        return $this->nom;
    }
    public function setNom(?string $newNom):Vehicule{
        $this->nom = $newNom;
        return $this;
    }
    public function getNbrRoue():?int{
        return $this->nbrRoue;
    }
    public function setNbrRoue(?int $newNbrRoue):Vehicule{
        $this->nbrRoue = $newNbrRoue;
        return $this;
    }
    public function getVitesse():?int{
        return $this->vitesse;
    }
    public function setVitesse(?int $newVitesse):Vehicule{
        $this->vitesse = $newVitesse;
        return $this;
    }

    //METHODE
    public function detect():void{
        switch($this->getNbrRoue()){
            case 2 :
                echo "<p>Moto</p>";
                break;
            case 4 :
                echo "<p>Voiture</p>";
                break;
            default :
                echo "<p>Ni Moto, ni Voiture !</p>";
        }
    }

    public function boost(?int $boost):void{
        $this->setVitesse($this->getVitesse() + $boost);
    }

    public function plusRapide(Vehicule $vehicule):Vehicule | string{
        if($this->getVitesse() > $vehicule->getVitesse()){
            return $this;
        }else if($this->getVitesse() < $vehicule->getVitesse()){
            return $vehicule;
        }else{
            return "Les 2 véhicules sont de vitesse égale !";
        }
    }
}