<?php
/**
 * Created by PhpStorm.
 * User: pierrethiollent
 * Date: 10/04/2018
 * Time: 12:11
 */

class Vehicule
{
    public $masse;
    public $vitesse;

    public function calculerEnergieCinetique()
    {

        return ($this -> masse / 2) * $this -> vitesse ** 2;
    }


}