<?php
class Arc implements InterfaceArme{
    //ATTRIBUT
    private ?string $type = "Arc";
    private ?int $munition;

    //CONSTRUCTEUR
    public function __construct(?int $munition){
        $this->munition = $munition;
    }

    public function getType(): ?string { return $this->type; }
    public function setType(?string $type): Arc { $this->type = $type; return $this; }

    public function getMunition(): ?int { return $this->munition; }
    public function setMunition(?int $munition): Arc { $this->munition = $munition; return $this; }

    //METHOD
    public function afficher():void{
        echo "<p>L'arc de frêne projette un trait d'une rare précision !</p>";
    }
    public function attaquer():?int{
        if($this->getMunition() <= 0){
            echo "<p>On n'a plus de flèche ! Misère !</p>";
            return 0;
        }
        $this->afficher();
        $this->setMunition($this->getMunition() - 1);
        return 15;
    }
}