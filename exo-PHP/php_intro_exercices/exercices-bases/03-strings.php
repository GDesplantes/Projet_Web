<?php
//3.A

function getMC2() 
{
    echo "Einstein";
}

echo getMC2();
//3.B

function getUserName(string $prenom,string $nom) :string
{
    return $prenom ." ".$nom;
}

//echo getUserName('Guillaume','Desplantes');

//3.C

function getFullName( string $prenom2,string $nom2) :string
{
    return $prenom2 ." ".mb_strtoupper($nom2);
}

//echo getFullName('Guillaume', 'Desplantes');



//3.D

function askUser( string $nom, string $prenom) :string
{
    return "Bonjour " . $prenom . " " .mb_strtoupper($nom) 
    . ", connaissez-vous " . getMC2() ."?";
}

echo askUser("Desplantes","Guilaume");