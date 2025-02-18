<?php
class Maison{
    private ?string $nom;
    private ?int $longueur;
    private ?int $largeur;
    private ?int $surface;
    private ?int $etage;

    public function __construct(?string $nom, ?string $longueur, ?string $largeur, ?int $etage){
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->etage = $etage;
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

    /**
     * Get the value of surface
     */
    public function getSurface(): ?int
    {
        return $this->surface;
    }

    /**
     * Set the value of surface
     */
    public function setSurface(?int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function surface(): float {
        $superficie = $this->longueur * $this->largeur * $this->etage;
        echo "<p>La surface de {$this->nom} est égale à : {$superficie} m²</p>";
        return $superficie;
    }
}