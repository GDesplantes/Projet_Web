<?php 

//exo 2.A

function getSum(int $nb1, int $nb2) : int 
{
    return $nb1+$nb2;
}

//echo getSum(5,3);

//exo 2.B

function getSub(int $nb3, int $nb4) : int 
{
    return $nb3-$nb4;
}

// echo getSub(5,3);


function getMulti(float $nb5, float $nb6) : float 
{
    
 return  number_format($nb5*$nb6,2);
}

// echo getMulti(5.6,3);

function getDiv(int $nb7, int $nb8) :float
{
    if ($nb7 === 0 || $nb8 === 0) 
    {
        return 0;
    }
    else 
    {
       
        return number_format($nb7/$nb8,2);
    }
}

echo getDiv(20,3);