<?php
Class Pret{

    //attributs
    public float $capital;
    private float $tauxMensuel;
    private int $nbMois;

    //Constructeur 
    public function __construct(float $_capital, float $_tauxAnnuel, $_nbannees)
    {
        $this->capital=$_capital;
        $this->tauxMensuel=$_tauxAnnuel/12/100;
        $this->nbMois=$_nbannees*12;

    }
    // propriétés


    public function getCapital(){
        return $this->capital;
    }

    public function getTauxMensuel(){

        return $this->tauxMensuel*100;
    }
    public function getnbMois()
    {
        return $this->nbMois;

    }



    public function CalculMensualite()
    {
        $quotient=( 1- POW((1+$this->tauxMensuel),-$this->nbMois));
        $resultat= ($this->capital*$this->tauxMensuel)/$quotient;
        return $resultat;
        
    }



}





?>