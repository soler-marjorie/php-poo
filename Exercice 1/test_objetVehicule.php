<?php 

include 'vehicule.php';

class Voiture extends Vehicule{
    private ?string $nom;
    private ?int $nbrRoue;
    private ?int $vitesseMax;

    //Constructeur
    //De base, PHP possède déjà une méthode magique qui s'appelle __construc(), et servant à instancier des objets sans donner de valeur à leur attribut
    //Je peux cependant redéfinir le comportement du constructeur au sein d'un classe
    public function __construct(?string $nom, ?int $nbrRoue, ?int $vitesseMax){
        $this->nom = $nom;
        $this->nbrRoue = $nbrRoue;
        $this->vitesseMax = $vitesseMax;
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
     * Get the value of nbrRoue
     */
    public function getNbrRoue(): ?int
    {
        return $this->nbrRoue;
    }

    /**
     * Set the value of nbrRoue
     */
    public function setNbrRoue(?int $nbrRoue): self
    {
        $this->nbrRoue = $nbrRoue;

        return $this;
    }

    /**
     * Get the value of vitesseMax
     */
    public function getVitesseMax(): ?int
    {
        return $this->vitesseMax;
    }

    /**
     * Set the value of vitesseMax
     */
    public function setVitesseMax(?int $vitesseMax): self
    {
        $this->vitesseMax = $vitesseMax;

        return $this;
    }
}

class Moto extends Vehicule{
    private ?string $nom;
    private ?int $nbrRoue;
    private ?int $vitesseMax;

    //Constructeur
    //De base, PHP possède déjà une méthode magique qui s'appelle __construc(), et servant à instancier des objets sans donner de valeur à leur attribut
    //Je peux cependant redéfinir le comportement du constructeur au sein d'un classe
    public function __construct(?string $nom, ?int $nbrRoue, ?int $vitesseMax){
        $this->nom = $nom;
        $this->nbrRoue = $nbrRoue;
        $this->vitesseMax = $vitesseMax;
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
     * Get the value of nbrRoue
     */
    public function getNbrRoue(): ?int
    {
        return $this->nbrRoue;
    }

    /**
     * Set the value of nbrRoue
     */
    public function setNbrRoue(?int $nbrRoue): self
    {
        $this->nbrRoue = $nbrRoue;

        return $this;
    }

    /**
     * Get the value of vitesseMax
     */
    public function getVitesseMax(): ?int
    {
        return $this->vitesseMax;
    }

    /**
     * Set the value of vitesseMax
     */
    public function setVitesseMax(?int $vitesseMax): self
    {
        $this->vitesseMax = $vitesseMax;

        return $this;
    }

}