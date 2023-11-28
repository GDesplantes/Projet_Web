<?php

class Voitureu
{
    
    private ?string $marque;
    
    function __construct(string $nouvelleMarque = "Peugeot")
    {
    
        $this->marque = $nouvelleMarque;
        
    }
    
    
    static function copier(Voitureu $voitureACopier) : Voitureu
    {
        $marqueACopier = $voitureACopier->accessMarque();
        
        return new Voitureu($marqueACopier);
        
    }
    
    public function accessMarque() 
    {
        return $this->marque;
    }
    
}


$monAudi = new Voitureu("Audo blanche mal garée malgré qu'elle soit super belle");

$maPeugeot = new Voitureu();

$voitureCopiee = Voitureu::copier($maPeugeot);

var_export($monAudi->accessMarque());