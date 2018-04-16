<?php
include "./classes/Voiture.php";
include "./functions/debug.php";

$voiture1 = new Voiture("Jaune");


$voiture1 -> marque = "Datsun";
$voiture1 -> masse = 900;
$voiture1 -> puissance = 150000;

echo $voiture1 -> demarrer();


debug($voiture1);



