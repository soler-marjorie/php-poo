<?php
//FICHIER D'EXECUTION QUI POSSEDERA TOUS LES INCLUDES
include './Interface/interfaceArme.php';
include './Arme/epee.php';
include './Arme/arc.php';
include './Arme/projectileMagique.php';
include './Abstract/abstractPersonnage.php';
include './Personnage/guerrier.php';
include './Personnage/voleur.php';
include './Personnage/magicien.php';

$guerrier = new Guerrier("Aragorn",null,"Guerrier");
$voleur = new Voleur("Bilbon",null,"Voleur");
$magicien = new Magicien("Gandalf",null,1);

$guerrier->afficher();
$voleur->afficher();
$magicien->afficher();

$epee = new Epee(1);
$arc = new Arc(0);
$projectile = new ProjectileMagique();

echo $epee->attaquer();
echo $arc->attaquer();
echo $projectile->attaquer();

echo "<div style='border-bottom : 3px solid black'></div>";
$guerrier->setArme($epee)->attaquer();
$voleur->setArme($arc)->attaquer();
$magicien->setArme($projectile)->attaquer();