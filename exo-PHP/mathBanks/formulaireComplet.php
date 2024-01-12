<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Formulaire calcul Mensualité</h1>
<body>
<header>

</header>
    
<main>

<form action="formulaireComplet.php" method="POST" enctype="multipart/form-data">

<section id="capitalEmprunt">
    <label for="emprunt">Capital emprunté :</label>
    <input type="number" id="capital" name="capital" min="0">
</section>
<section id="tauxInteret">
    <label for="taux">Taux intérêt en % :</label>
    <input type="number" id="interet" name="interet" min="0" max="100" step="0.01">
</section>
<section id="dureeRemboursement">
    <label for="duree">Durée du remboursement en nb d'année :</label>
    <input type="number" id=remboursement name="remboursement" min="0" step="1">
</section>
<section id="btn+mensualite">
<input type="submit" name="envoyer" id="btnEnvoyer" value="valider">
<label for="mensualite">Mensualité :</label>
<input type="text" id="mensualite" name="mensualite" value="">
</section>

<textarea id="tabRemoursement" name="tabRemboursement">

</textarea>
</form>
</main>

</body>
</html>



<?php
include "model/Pret.php";

$pret=new Pret($_POST['capital'],$_POST['interet'],$_POST['remboursement']);

if (!empty($_POST['capital'])&& !empty($_POST['interet'])&& !empty($_POST['remboursement']))
{
    var_dump($pret) ;
}





















?>