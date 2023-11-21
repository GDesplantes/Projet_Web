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

    return $array[sizeof($array)-1];
}

// echo lastItem($names);

function sortItems(array $array){
    if(empty($array))
    {
        return [];
    }
    rsort($array) ;
    return implode(',',$array);
}
echo(sortItems($names));