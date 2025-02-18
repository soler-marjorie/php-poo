<?php
class ProjectileMagique implements InterfaceArme{
    private ?string $type = "Projectile Magique";

    //GETTER ET SETTER
    public function getType(): ?string { return $this->type; }
    public function setType(?string $type): ProjectileMagique { $this->type = $type; return $this; }

    //METHOD
    public function afficher():void{
        echo "<p>Un projectile de lumière dorée fonçant vers sa cible à toute allure !</p>";
    }
    public function attaquer():?int{
        $this->afficher();
        return 10;
    }
}