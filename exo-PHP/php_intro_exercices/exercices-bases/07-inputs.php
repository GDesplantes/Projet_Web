<?php

function stringLength(string $string) :bool
{
    if (strlen(trim($string," "))>=9)
    {
        echo "true";
        return true;
    }
    else    
    {
        echo "c'est faux!";
        return false;
    }

    

}


function testRegex (string $mdp) 
{
}


// var_dump( testRegex("Bonjour"));
// echo "<hr>";
// var_dump(testRegex("Bon JOUR"));
// echo stringLength("motDePasseDepassant9Charactères");
// echo "<hr>";
// echo stringLength("                           ");
// echo "<hr>";
function passwordCheck(string $string):bool // A CORRIGER
{
    stringLength($string); 
    echo $string;                 //autre regex /[^a-zA-Z0-9]/
    if (preg_match('^(?=.*?[A-Z])(?=[a-z])(?=.*?[0-9])(?=.*?[\S]).{9,}$^',$string,))
    // preg_match('/[a-z]/',$string) && 
    // preg_match('/[A-Z]/',$string) && 
    // preg_match('/[0-9]/',$string)  && 
    
    {
       echo "chehhhhh";
        return true;
    }
    else {
        echo "C'est faux!";
        return false;
    }

}

var_dump( passwordCheck("sfdg45wdAnjkhdsfjknb@"));
echo "<hr>";
var_dump( passwordCheck("gne@A5euify      sdhkjhsed"));
echo "<hr>";
$listUtilisateur = [
    'joe' => 'Azer1234!',
    'jack' => 'Azer-4321',
    'admin' => '1234_Azer'];

function userLogin (string $nomUtilisateur, string $mdp, array $table) :bool
{
    
    $trouve=false;

    if(passwordCheck($mdp))
    {

        foreach($table as $name => $value)
        {
            if ($nomUtilisateur == $name && $mdp == $value)
            {
                echo "Vous êtes connécté! \n";
                $trouve=true;   
            } 
        }
           
        if($trouve==false )
            echo "Mot de passe inconnue! \n";
        
    }
    else 
    {
        echo "Mot de passe non conforme \n";
    }
    

   return $trouve;

    
}

//  echo userLogin("joe","1234",$listUtilisateur);
//  echo "<hr>";
//  echo userLogin("joe","Unbonformat!2",$listUtilisateur);
//  echo "<hr>";
//  echo userLogin("joe","Azer1234!",$listUtilisateur);
//  echo "<hr>";