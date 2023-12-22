<?php

$names = ['Joe','Jack','Léa','Zoé','Néo'];
$nameNull=[];

function firstItem(array $array)
{
    if (empty($array))
    {
        return null;
    }

        return $array[0];
    
    
}

// echo firstItem($names);

//Exo 6.B

function lastItem(array $array)
{
    if (empty($array))
    {
        return null;
    }

    return $array[count($array)-1];
}

// echo lastItem($names);

//Exo 6.C
function sortItems(array $array) : string 
{
    if(empty($array))
    {
        return implode([]);
    }
    else 
    {
        rsort($array) ;
    return implode(',',$array);
    }
    
}
echo(sortItems($names));
echo "<hr>";

//Exo 6.D

function stringsItems(array $array)
{
    if(empty($array))
    {
        return "Nothing to display";
    }
    asort($array);
    return implode(', ',$array);
}
echo "<br>";
echo stringsItems($names);