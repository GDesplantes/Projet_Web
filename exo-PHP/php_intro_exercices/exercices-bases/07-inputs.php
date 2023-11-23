<?php

function stringLength(string $string) :bool
{
    if (strlen($string)>=9)
    {
        echo "true";
        return true;
    }
    else    
    {
        echo "false";
        return false;
    }

    

}

// echo stringLength("motDePasseDepassant9Charactères");

function passwordCheck(string $string):bool
{
    if ( strlen($string)>=9 && 
    // preg_match('/[a-z]/',$string) && 
    // preg_match('/[A-Z]/',$string) && 
    // preg_match('/[0-9]/',$string)  && 
    preg_match('/[^a-zA-Z0-9]/',$string))
    {
        echo "true";
        return true;
    }
    else {
        echo "false";
        return false;
    }

}

echo passwordCheck("sfdg45wdfgAnjkhdsfjknb@");

function userLogin (string $nomUtilisateur, string $mdp, array $array) :bool
{
    $listUtilisateur = [
    'joe' => 'Azer1234!',
    'jack' => 'Azer-4321',
    'admin' => '1234_Azer'];

    if(passwordCheck() == true)
    {
        foreach($listUtilisateur as $name => $mdp)
        {
            
        }
    }
    
}