<?php

class ProjectileMagique implements InterfaceArme{
    private ?string $type;

    public function __construct(?string $type){
        $this->type = $type;
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
        echo "<p>Projectile magique de type {$this->type}</p>";
    }

    public function attaquer(): void{
        echo "<p>Je t'inflige 20 point de dégats</p>";
    }
}