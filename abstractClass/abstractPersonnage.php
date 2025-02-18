<?php
//Abstract class

abstract class AbstractPersonnage{
    //Attribut
    private ?string $nom;
    private ?InterfaceArme $comportementArme;
    private ?string $type;

    //Constructor
    public function construct(?string $nom, ?InterfaceArme $comportementArme, ?string $type){
        $this->nom = $nom;
        $this->comportementArme = $comportementArme;
        $this->type = $type;
    }

    //Getters and setters
    /**
     * Get the value of nom
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom(?string $newNom): AbstractPersonnage
    {
        $this->nom = $newNom;
        return $this;
    }

    /**
     * Get the value of comportementArme
     */
    public function getComportementArme(): ?InterfaceArme
    {
        return $this->comportementArme;
    }

    /**
     * Set the value of comportementArme
     */
    public function setComportementArme(?InterfaceArme $newComportementArme): AbstractPersonnage
    {
        $this->comportementArme = $newComportementArme;
        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType(?string $newType): AbstractPersonnage
    {
        $this->type = $newType;
        return $this;
    }

    //Method
    public abstract function afficher():void;

    public function attaquer(): void {
        if ($this->getComportementArme() instanceof ProjectileMagique && $this->type !== "Magicien") {
            echo "<p>{$this->nom} ne peut pas utiliser le Projectile Magique !</p>";
            return;
        }
        echo "<p>{$this->nom} attaque et inflige " . $this->getComportementArme()->attaquer() . " points de dégâts !</p>";
    }
}