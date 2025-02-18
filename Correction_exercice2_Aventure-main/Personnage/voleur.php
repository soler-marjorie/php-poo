<?php
class Voleur extends AbstractPersonnage{
    //CONSTRUCTEUR
    public function __construct(?string $nom, ?InterfaceArme $arme){
        $this->setType("Voleur");
        $this->setNom($nom);
        $this->setArme($arme);
    }

    //METHOD
    public function afficher():void{
        echo "<p>Je suis une personne Agile toute vêtue d'Ombre !</p>";
    }
}