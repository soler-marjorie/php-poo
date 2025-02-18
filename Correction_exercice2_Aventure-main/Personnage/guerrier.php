<?php
class Guerrier extends AbstractPersonnage{
    //CONSTRUCTEUR
    public function __construct(?string $nom, ?InterfaceArme $arme){
        $this->setType("Guerrier");
        $this->setNom($nom);
        $this->setArme($arme);
    }
    
    //METHOD
    public function afficher():void{
        echo "<p>Je suis une personne Puissante avec une Grosse Armure !</p>";
    }
}