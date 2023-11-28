<?php

require('Moteur.php');
class Voiture
{
    private string $modele;
    private string $marque;
    private int $poids;
    private Moteur $moteur;

    public function __construct(string $nouveauModele = "pizza", string $nouvelleMarque = "Findus", int $nouveauPoids = 15000, Moteur $moteur)
    {
        $this->modele = $nouveauModele;
        $this->marque = $nouvelleMarque;
        $this->poids = $nouveauPoids;
        $this->moteur = new Moteur();

    }

  


}

$maVoiture = new Voiture();
var_export($maVoiture);
