<?php

class Maison2 extends Maison {
    private ?string $nom = "Chez nous";
    private ?int $longueur = 6;
    private ?int $largeur = 5;

    public function __construct(?string $nom, ?string $longueur, ?string $largeur){
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

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
    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of longueur
     */
    public function getLongueur(): ?int
    {
        return $this->longueur;
    }

    /**
     * Set the value of longueur
     */
    public function setLongueur(?int $longueur): self
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get the value of largeur
     */
    public function getLargeur(): ?int
    {
        return $this->largeur;
    }

    /**
     * Set the value of largeur
     */
    public function setLargeur(?int $largeur): self
    {
        $this->largeur = $largeur;

        return $this;
    }
}