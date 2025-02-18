<?php
abstract class AbstractPersonnage{
    //ATTRIBUTS
    private ?string $nom;
    private ?string $type;
    private ?InterfaceArme $arme;

    //CONSTRUCTEUR
    public function __construct(?string $nom, ?InterfaceArme $arme, ?string $type){
        $this->nom = $nom;
        $this->arme = $arme;
        $this->type = $type;
    }

    //GETTER ET SETTER
    public function getNom(): ?string { return $this->nom; }
    public function setNom(?string $nom): AbstractPersonnage { $this->nom = $nom; return $this; }

    public function getType(): ?string { return $this->type; }
    public function setType(?string $type): AbstractPersonnage { $this->type = $type; return $this; }

    public function getArme(): ?InterfaceArme { return $this->arme; }
    public function setArme(?InterfaceArme $arme): AbstractPersonnage { $this->arme = $arme; return $this; }

    //METHOD
    public abstract function afficher():void;

    public function attaquer():void{
        $arme = $this->getArme();
        if($arme->getType() == "Projectile Magique" && $this->getType()!="Magicien"){
            echo "<p>{$this->getNom()} ne peut pas attaquer avec le Projectile Magique</p>";
        }else{
            $arme->attaquer();
        }
    }
}