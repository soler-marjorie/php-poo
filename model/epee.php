<?php

class Epee implements InterfaceArme{
    private ?int $durabilite;
    private ?string $type;

    public function __construct(?int $durabilite, ?string $type){
        $this->durabilite = $durabilite;
        $this->type = $type;
    }

    /**
     * Get the value of durabilite
     */
    public function getDurabilite(): ?int
    {
        return $this->durabilite;
    }

    /**
     * Set the value of durabilite
     */
    public function setDurabilite(?int $durabilite): self
    {
        $this->durabilite = $durabilite;

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
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function afficher(): void {
        echo "<p>Épée de type {$this->type}, durabilité: {$this->durabilite}</p>";
    }

        public function attaquer(): void {
        if ($this->durabilite > 0) {
            $this->durabilite -= (rand(1, 10) <= 10) ? 1 : 0;
            if ($this->durabilite <= 0) {
                echo "<p>L'épée est cassée !</p>";
            }
            echo "je te frappe 15 points de dégats"; 
        }
        echo "<p>L'épée est cassée ! Votre durabilité = 0</p>";
        
    }
}