<?php
class Arc implements InterfaceArme{
    private ?int $munition;
    private ?string $type;

    public function __construct(?int $munition, ?string $type){
        $this->munition = $munition;
        $this->type = $type;
    }

    /**
     * Get the value of munition
     */
    public function getMunition(): ?int
    {
        return $this->munition;
    }

    /**
     * Set the value of munition
     */
    public function setMunition(?int $munition): self
    {
        $this->munition = $munition;

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
        echo "<p>Arc de type {$this->type}, munitions: {$this->munition}</p>";
    }

    public function attaquer(): int {
        if ($this->munition > 0) {
            $this->munition--;
            return 12; 
        }
        echo "<p>Plus de flèches ! Votre stock est à 0</p>";
        return 0;
    }
}