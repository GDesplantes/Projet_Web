<?php

// date_default_timezone_set('');

function getToday()  
{
    $dateActuel = date('d/m/Y', time());
    return $dateActuel;
}

// echo getToday();

function getTimeLeft(string $date)  
{
    $dateActuel = date('Y-m-d',time());
    $date=date('Y-m-d');
}

echo getTimeLeft("");