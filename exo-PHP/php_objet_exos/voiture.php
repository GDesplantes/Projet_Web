<?php

interface Caracteristique
{
    public function info();
}

class Voiture
{
    public $modele="";
    public $marque="";
    public $poids=0;

    public function __construct($modele,$marque,$poids)
    {
        $this->modele = $modele;
        $this->marque = $marque;
        $this->poids = $poids;
    }

    public function info()
    {
        return 
    }
}

$voiture = new Voiture("tutut","test",100);

$voiture
