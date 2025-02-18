<?php

require_once 'AbstractPersonnage.php';

class magicien extends AbstractPersonnage {

    private ?int $mana;

    public function __construct(?string $mana){
        $this->mana = $mana;
    }
    
    /**
     * Get the value of mana
     */
    public function getMana(): ?int
    {
        return $this->mana;
    }

    /**
     * Set the value of mana
     */
    public function setMana(?int $mana): Magicien
    {
        $this->mana = $mana;

        return $this;
    }

    public function afficher():void{
        echo "<p>Je suis un magicien.</p>";
    }

    public function attaquer(): void {
        if ($this->getComportementArme() == "ProjectileMagique") {
            if ($this->mana > 0) {
                $this->mana--;
                echo "<p>{$this->getNom()} lance un projectile magique et inflige " . $this->getComportementArme()->attaquer() . " points de dégâts !</p>";
                if ($this->mana <= 0) {
                    echo "<p>{$this->getNom()} est à court de mana et tombe inconscient !</p>";
                }
            } else {
                echo "<p>{$this->getNom()} n'a plus de mana pour utiliser le projectile magique !</p>";
            }
        } else {
            parent::attaquer();
        }
    }

}