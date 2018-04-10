<?php
class Voiture
{
    public $couleur;
    public $masse;
    public $marque;
    public $puissance;
    public $vitesse;

    public function __construct($couleur, $masse, $marque, $puissance)
    {
        $this -> couleur = $couleur;
        $this -> masse = $masse;
        $this -> marque = $marque;
        $this -> puissance = $puissance;
    }

    public function demarrer()
    {
        $message = "La voiture démarre";
        return $message;
    }

    public function calculerEnergieCinetique()
    {

        return ($this -> masse / 2) * $this -> vitesse ** 2;
    }
}
