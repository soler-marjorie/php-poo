<?php
class Magicien extends AbstractPersonnage{
    //ATTRIBUT
    private ?int $mana;

    //CONSTRUCTEUR
    public function __construct(?string $nom, ?InterfaceArme $arme, ?int $mana){
        $this->setType("Magicien");
        $this->setNom($nom);
        $this->setArme($arme);
        $this->mana = $mana;
    }

    //GETTER ET SETTER
    public function getMana(): ?int { return $this->mana; }
    public function setMana(?int $mana): Magicien { $this->mana = $mana; return $this; }

    //METHOD
    public function afficher():void{
        echo "<p>Je suis une personne Vive d'Esprit avec beaucoup de Mana !</p>";
    }

    public function attaquer():void{
        $this->setMana($this->getMana() - 1);
        $this->getArme()->attaquer();
        if($this->getMana() <= 0){
            echo "<p>L'effort était trop intense. {$this->getNom()} tombe inconscient.</p>";
        }
    }
}