<?php

class Moteur
{
    private string $marque;
    private float $vitesseMax;

    public function __construct(string $nouvelleMarque, float $nouvelleVitesseMax)
    {
        // HYDRATATION
        $this->marque = $nouvelleMarque;
        $this->vitesseMax = $nouvelleVitesseMax;
    }
}