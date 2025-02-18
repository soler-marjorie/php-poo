<?php
include './maison.php';
include './vehicule.php';

$maison = new Maison("La Pension des Mimosas",15,10,1);

echo $maison->getNom();
echo "<br>";
echo $maison->getLongueur();
echo "<br>";
echo $maison->getLargeur();
echo "<br>";
$maison->setNom("Konoha")->setLongueur(100)->setLargeur(70);
echo $maison->getNom();
echo "<br>";
echo $maison->getLongueur();
echo "<br>";
echo $maison->getLargeur();
echo "<br>";
echo "<br>";
$maison->surface();
echo "<br>";

echo "<div style='border-bottom : 3px solid black'></div>";

$mercedes = new Vehicule("Mercedes CLK",4,250);
$honda = new Vehicule("Honda CBR", 2, 200);

$mercedes->detect();
$honda->detect();

$mercedes->boost(50);
$honda->boost(50);
echo "<p>".$mercedes->getVitesse()."</p>";
echo "<p>".$honda->getVitesse()."</p>";


$plusRapide = $mercedes->plusRapide($honda);
if(gettype($plusRapide) == "string"){
    echo $plusRapide;
}else{
    echo $plusRapide->getNom()." est le véhicule le plus rapide !";
}
