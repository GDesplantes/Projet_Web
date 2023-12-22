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
    $dateUtilisateur = 0;
    $dateJour = new DateTime();
    try {
        $dateUtilisateur = new DateTime($date);

        if ($dateJour->format("Y-m-d") < $dateUtilisateur->format("Y-m-d")) {
            $diff = $dateUtilisateur->diff($dateJour);

            echo "année: " . $diff->y . "\n";
            echo "mois: " . $diff->m . "\n";
            echo "jour: " . $diff->d. "\n";
        }

        else if ($dateJour->format("Y-m-d") == $dateUtilisateur->format("Y-m-d"))
        {
            echo "Aujourd'hui";
        }

        else 
        {
            echo "Evènement passé";
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

echo getTimeLeft("2023-11-30");
