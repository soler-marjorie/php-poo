<?php
include './model/guerrier.php';
require_once './model/voleur.php';
require_once './model/magicien.php';
require_once './model/epee.php';
require_once './model/arc.php';
require_once './model/projectileMagique.php';

$epee = new Epee(5, "Épée en fer");
$arc = new Arc(3, "Arc en bois");
$sort = new ProjectileMagique("Boule de feu");

$guerrier = new Guerrier();
$guerrier->afficher();
$voleur = new Voleur();
// $voleur->setNom()->setComportementArme()->setType();
// $magicien = new Magicien();
// $magicien->setNom()->setComportementArme()->setType();

$guerrier->getComportementArme()->attaquer();
$voleur->getComportementArme()->attaquer();
$magicien->getComportementArme()->attaquer();