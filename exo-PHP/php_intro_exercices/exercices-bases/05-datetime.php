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
    $date = new DateTime($date); 
    $dateJour = new DateTime("2020-01-30");
    try {
        

        if ($dateJour->format("Y-m-d") < $date->format("Y-m-d")) {
            $diff = $date->diff($dateJour);

            echo "Cette date arrivera dans :" . $diff->y . " an(s), \n";
            echo  $diff->m . " mois et \n";
            echo $diff->d. "  jours\n";
        }

        else if ($dateJour->format("Y-m-d") == $date->format("Y-m-d"))
        {
            echo "Aujourd'hui";
        }

        else 
        {
            echo "Evènement passé";
        }
    } catch (Exception $e) {
        echo $e->getMessage("C'est Faux");
    }
}


getTimeLeft ("2019-09-29"); // retourne « Évènement passé »
echo "<hr>";
getTimeLeft ("2020-01-30"); // retourne « Aujourd'hui »
echo "<hr>";
getTimeLeft ("2020-02-15"); // retourne « Dans 16 jours »
echo "<hr>";
getTimeLeft ("2020-05-16"); // retourne « Dans 4 mois et 17 jours »
echo "<hr>";
getTimeLeft ("2021-05-30"); // retourne « Dans 1 an et 4 mois »
echo "<hr>";
getTimeLeft ("2022-10-17"); // retourne « Dans 2 ans et 9 mois »
echo "<hr>";