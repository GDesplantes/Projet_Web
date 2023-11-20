<?php
//Exo 4.A
function isMajor(int $age) :bool
{
    if ($age >=18) {
        echo "true ";
        return true;
        
    }
    else {
        echo "false "; 
        return false;
        
    }
}

// echo isMajor(12); renvoie rien dans la console
// echo isMajor(18); renvoie un "1"
// echo isMajor(42); renvoie un "1"

//Exo 4.B

function getRetired(int $age) : string 
{
    $retraite = 60;
    if ($age === $retraite) {
        return " Vous êtes à la retraite cette année";
    }

    else if ($age >=60 ) {
        return " vous êtes à la retraite depuis " . $age-$retraite . " ans";
    }
    else if ($age < $retraite && $age >=0) {
        return " il vous reste " . $retraite-$age . " ans avant la retraite";

    }

    else {
        return " vous n'etes pas encore né";
    }
}

// echo getRetired(12);
// echo getRetired(60);
// echo getRetired(72);
// echo getRetired(-2);

//Exo 4.C

function getMax (float $nb1,float $nb2,float $nb3) :float 
{ $resultat = max($nb1,$nb2,$nb3);
    if ($nb1 === $nb2 || $nb1 === $nb3 || $nb2 === $nb3)
    {
        return 0;
    }
    else 
    {
        return number_format($resultat,3);
    }
}

// echo getMax(250.0364,25,-359.5489);
// echo getMax(250.0364,25,25);


//Exo 4.D

function capitalCity(string $_pays)
{
$pays= $_pays;

$tabPays =["France","Allemagne", "Italie","Maroc","Espagne",
"Portugal","Angleterre"];

// boucle for

for ($i = 0; $i < sizeof($tabPays); $i++)
{
    // echo " " . $tabPays[$i];
    if ($tabPays[$i] == $pays ){
        
        switch ($pays) {
            case "France":
            echo " Paris";
            break;
        
            case "Allemagne":
            echo " Berlin";
            break;
            
            case "Italie":
            echo "Rome";
            break;
        
            case "Maroc":
            echo " Rabat";
            break;
            
            case "Espagne":
            echo " Madrid";
            break;
                
            case "Portugal":
            echo " Lisbonne";
            break;
        
            case "Angleterre":
            echo " Londres";
            break;

            default:
            echo "Capitale inconnue";
         }
       
    }
    
    
}

}

echo capitalCity("France");
