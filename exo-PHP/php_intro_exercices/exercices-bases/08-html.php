<?php

$names = ['Joe','Jack','Léa','Zoé','Néo'];
$vide =[];

function htmlList(string $string, array $array)
{
    echo "<h3>" . $string ."</h3> \n <ul> \n";
    
    if(empty($array))
    {
        echo "<p> Aucun résultat </p>";
    }
    else {
        
        for($i=0; $i<sizeof($array)-1; $i++)
        {
            echo "<li>" . $array[$i] . "</li> \n";
        }
        echo "\n </ul> \n";
    }
}

echo htmlList("Liste des personnes",$names);
echo htmlList("Liste des personnes",$vide);
