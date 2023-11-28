<?php

$names = ['Joe','Jack','Léa','Zoé','Néo'];

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
        return [];
    }
    rsort($array) ;
    return implode(',',$array);
}
//echo(sortItems($names));


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

echo stringsItems($names);