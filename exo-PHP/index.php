<!DOCTYPE html>
<html lang="FR-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Gestion des critiques de restaurant, Guide DUCHEMIN</title>
</head>

<body>
    <?php
    require './models/MyTable.php';

    $maTable = new MyTable("restaurants");

    $mesDonnees = $maTable->readTable();
    //  var_dump($mesDonnees);


    echo "<table class='table table-dark table-hover'><thead><tr>";
    foreach ($mesDonnees[0] as $value) {

        echo "<th>$value</th>";
    }

    echo "</tr></thead><tbody>";
    for ($i = 1; $i < count($mesDonnees); $i++) {

        echo "<tr>";
        for ($j = 0; $j < count($mesDonnees[$i]); $j++) {
            echo "<td>" . $mesDonnees[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";


    ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>