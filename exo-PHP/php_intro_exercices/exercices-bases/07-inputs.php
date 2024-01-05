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
    if (preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{9,})$/',$string,))
    // preg_match('/[a-z]/',$string) && 
    // preg_match('/[A-Z]/',$string) && 
    // preg_match('/[0-9]/',$string)  && 
    
    {
    //    echo "chehhhhh";
        return true;
    }
    else {
        // echo "C'est faux!";
        return false;
    }

}

// var_dump( passwordCheck("sfdg45wdAnjkhdsfjknb@"));
// echo "<hr>";
// var_dump( passwordCheck("gne@A5euify      sdhkjhsed"));
// echo "<hr>";

function userLogin (string $nomUtilisateur, string $mdp) :bool
{
    
    $listUtilisateur = [
        'joe' => 'Azer1234!',
        'jack' => 'Azer-4321',
        'admin' => '1234_Azer'];
    
    //$trouve=false;

    if(passwordCheck($mdp))
    {

        foreach($listUtilisateur as $name => $value)
        {
            if ($nomUtilisateur == $name && $mdp == $value)
            {
                echo "Vous êtes connécté! \n". $name;
                echo $value;
                return true;   
            } 
        }
           
        if($nomUtilisateur != $name || $mdp != $value)
        
            echo $value;
            echo "Mot de passe inconnue! \n". $name;
        
    }
    else 
    {
        echo "Mot de passe non conforme \n";
    }

    return false;
    

   

    
}

 echo userLogin("joe","1234");
 echo "<hr>";
 echo userLogin("joe","Unbonformat!2");
 echo "<hr>";
 echo userLogin("joe","Azer1234!");
 echo "<hr>";
 echo userLogin("jack","Azer-4321");
 echo "<hr>";
 echo userLogin("admin","1234_Azer");