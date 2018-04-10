<?php
include "./functions/debug.php";
include "./classes/Voiture.php";


$voiture1 = new Voiture("Jaune", 900, "Washwuntai", 150000);

$voiture1 -> vitesse = 50;

echo "L'Energie cinétique de la voiture est " . $voiture1 -> calculerEnergieCinetique();
