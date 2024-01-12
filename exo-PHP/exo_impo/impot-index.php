<?php
    // CONST TRANCHEBASSE = 9.0;
    // CONST TRANCHEHAUTE = 14.0;
    // CONST BAREMEMONTANT = 15000;
    // function CalculImpot(string $_name, float $_income) : float | string
    // {
    //     $devise ="euros";
    //     //$devise ="€";
    //     if($_income > 0){
    //         if ($_income <= BAREMEMONTANT){
    //             $impotTaxe =$_income * (TRANCHEBASSE/100);
    //             echo '<p>'.$_name.
    //             " ".
    //             "votre impôt est de :".
    //             " ".
    //             $impotTaxe." ".$devise.'</p>';
    //         } else{
    //             $impotTaxe = $_income * (TRANCHEHAUTE/100);
    //             echo'<p>'.$_name.
    //             " ".
    //             "votre impôt est de :".
    //             " ".
    //             $impotTaxe." ".$devise.'</p>';
    //         }
    //     }else{
    //         return $_name.
    //         " ".
    //         "vous avez peut-être droit au RSA, sinon allez sucer les cailloux, chômeur va !!!";
    //     }
    // }


// $nom = ($_GET['nom']);
// var_dump($nom) ;

// $salaire = $_GET['impot'];
// var_dump($salaire);

CONST TRANCHEBASSE = 9.0;
CONST TRANCHEHAUTE = 14.0;
CONST BAREMEMONTANT = 15000;

function CalculImpot(string $_nom, float $_salaire) 
{
if(!empty($_nom) && !empty($_salaire))
 {
    // echo "Salut ".$_nom. "tu possède ".$_salaire;
    // //echo $_salaire*2;
    $devise ="euros";
        $devise ="€";
        if($_salaire > 0){
            if ($_salaire <= BAREMEMONTANT){
                $impotTaxe =$_salaire * (TRANCHEBASSE/100);
                echo '<p>'.$_nom.
                " ".
                "votre impôt est de :".
                " ".
                $impotTaxe." ".$devise.'</p>';
            } else{
                $impotTaxe = $_salaire * (TRANCHEHAUTE/100);
                echo'<p>'.$_nom.
                " ".
                "votre impôt est de :".
                " ".
                $impotTaxe." ".$devise.'</p>';
            }
        }else{
            echo  $_nom.
            " ".
            "vous avez peut-être droit au RSA, sinon allez sucer les cailloux, chômeur va !!!";
        }
 }

 else 
 {
    echo "t'as bien un nom et un montant Nan? feignasse va!";
 }

}
    // echo "EXO IMPOT";
    // echo "<hr>";
    // echo "Doit renvoyer RSA"."<hr>";
    // echo (CalculImpot("Mr Devoldere",0 )) ;
    // echo "<hr>";

    // echo "Doit renvoyer un impot à 9%"."<hr>";
    // echo (CalculImpot("Mr Devoldere",15000 )) ;
    // echo "<hr>";

    // echo "Doit renvoyer un impot à 14%"."<hr>";
    // echo (CalculImpot("Mr Devoldere",15001 )) ;
    // echo "<hr>";

    // echo "Doit renvoyer un impot à 14%"."<hr>";
    // echo (CalculImpot("Mr Devoldere",15500 )) ;
    // echo "<hr>";
?>

</html>
