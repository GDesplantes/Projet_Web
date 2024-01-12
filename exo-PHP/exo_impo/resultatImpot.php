<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="./impot-index.php"></script>
    <title>IMPOT</title>
</head>
<body>
    <form action="resultatImpot.php" method="POST" enctype="multipart/form-data">
        <fieldset id="field1">
            <legend>C'est l'heure de la douille !!</legend>
            <section id="userName">
                <label for="name">Nom :</label>
                <input value="" type="text" name="nom" id="name">
            </section>
            <section id="impot">
                <label for="montantImpot">Revenu en €: </label>
                <input type="number" name="revenu" id="revenu" value="">
            </section>
            <section id="bpsubmit">
                <input type="submit" name="envoie" id="bpValider" value="OK">
            </section>
        </fieldset>
    </form>
</body>

<?php 
require "impot-index.php";
if(!empty($_POST['nom']) && !empty($_POST['revenu']))
{
    CalculImpot($_POST['nom'],floatval($_POST['revenu']));
}
else
{
    echo "t'as bien un nom et un montant Nan? feignasse va!";
}


//  function CalculImpot(string $_name, float $_income) : float | string
//     {
//         $devise ="euros";
//         //$devise ="€";
//         if($_income > 0){
//             if ($_income <= BAREMEMONTANT){
//                 $impotTaxe =$_income * (TRANCHEBASSE/100);
//                 echo '<p>'.$_name.
//                 " ".
//                 "votre impôt est de :".
//                 " ".
//                 $impotTaxe." ".$devise.'</p>';
//             } else{
//                 $impotTaxe = $_income * (TRANCHEHAUTE/100);
//                 echo'<p>'.$_name.
//                 " ".
//                 "votre impôt est de :".
//                 " ".
//                 $impotTaxe." ".$devise.'</p>';
//             }
//         }else{
//             return $_name.
//             " ".
//             "vous avez peut-être droit au RSA, sinon allez sucer les cailloux, chômeur va !!!";
//         }
//     }
?>