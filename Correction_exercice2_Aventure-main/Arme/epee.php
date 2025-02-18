<?php
class Epee implements InterfaceArme{
    //ATTRIBUT
    private ?string $type = "Epee";
    private ?int $durabilite;

    //CONSTRUCTEUR
    public function __construct(?int $durabilite){
        $this->durabilite = $durabilite;
    }

    public function getType(): ?string { return $this->type; }
    public function setType(?string $type): Epee { $this->type = $type; return $this; }

    public function getDurabilite(): ?int { return $this->durabilite; }
    public function setDurabilite(?int $durabilite): Epee { $this->durabilite = $durabilite; return $this; }

    //METHOD
    public function afficher():void{
        echo "<p>L'arme de corne et d'acier s'abat sur l'adversaire !</p>";
    }
    public function attaquer():?int{
        $this->afficher();
        $random = rand(1,100);
        if($random <=10){
            $this->setDurabilite($this->getDurabilite() - 1);
        }
        if($this->getDurabilite() <= 0){
            echo "<p>L'arme se brise !</p>";
            return 0;
        }
        return 20;
    }
}