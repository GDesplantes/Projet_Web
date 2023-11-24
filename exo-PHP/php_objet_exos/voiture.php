<?php




class Voiture
{
    private $modele;
    private $marque;
    private $poids;

    public function __construct(string $modele, string $marque,int $poids)
    {
        $this->modele = $modele;
        $this->marque = $marque;
        $this->poids = $poids;
    }

    // public function __constructeur()
    // {
    //     $this->modele = "2" ;
    //     $this->marque = "Schoumi" ;
    //     $this->poids = 100;
    // }



}

var_export($voiture = new Voiture("tutut","test",100));

// var_export($voiture = new Voiture());