<?php
class Voiture
{
    public $couleur;
    public $masse;
    public $marque;
    public $puissance;

    public function __construct($couleur)
    {
        $this -> couleur = $couleur;
    }

    public function demarrer()
    {
        $message ="La voiture démarre";
            return$message;
    }

}