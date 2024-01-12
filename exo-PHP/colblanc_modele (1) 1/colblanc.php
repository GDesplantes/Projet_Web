<!doctype html>
<html lang="Fr">

<head>
  <meta charset="utf-8">
  <title>Entrainement Centre de Readaptation</title>
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

  <div id="page">
    <div id="header">
      <img src="contenu/header.jpg" width="980" height="176" alt="colblanc entete">
    </div>

    <div id="menu">
      <ul>
        <li><a href="#">Entreprises</a>
          <ul>
            <li><a href="#" target="_self">Visualiser</a>
            </li>
            <li><a href="filtre.php">Rechercher</a>
            </li>
            <li><a href="#">Ajouter</a>
            </li>
          </ul>
        </li>
        <li><a href="#">Candidats</a>
          <ul>
            <li><a href="#" target="_self">Listing</a>
            </li>
            <li><a href="#">rechercher</a>
            </li>
            <li><a href="#">Ajouter</a>
            </li>
            <li><a href="#">CVthèque</a>
            </li>
          </ul>
        </li>
        <li><a href="#">Projets</a>

        </li>
        <li><a href="#">offres</a>
          <ul>

            <li><a href="#">Par secteur</a>

            </li>

            <li><a href="#">Par entreprises</a>

            </li>
          </ul>
        </li>
      </ul>
    </div>




    <main>
      <section>



        <h1 style=" text-align:center">Votre travail ici</h1>

        <!-- <p>Choisisser votre département :</p> -->

        <p>Séléctionner votre type d'établissement</p>





        <!-- </select> -->

        <!-- Menu déroulant contenant la liste des  département (relier à une DB) -->

        <form name="selection" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">

          <label for="dep">Choisisser votre département :</label>
          <select name="dep" id="dep">
            <option value="">choisir votre département</option>
            <?php
            include "models/Connexion.php";
            $connect = Connexion::getInstance();
            $rq = "SELECT id_dep, name FROM departements WHERE dep_actif=1";
            $state = $connect->prepare($rq);
            $state->execute();
            while ($obj = $state->fetch()) {
              if (isset($_POST["dep"]) && !empty($_POST["dep"]) && $obj->id_dep == $_POST["dep"]) {
                echo '<option value="' . $obj->id_dep . '" selected="true">' . $obj->name . '</option>';
              } else {
                echo '<option value="' . $obj->id_dep . '">' . $obj->name . '</option>';
              }
            }
            ?>
          </select>

          <fieldset>
            <legend>Sélectionner le type d'établissement</legend>
            <div>
              <!-- <input type="checkbox" name="choix[]" id="tpe" value="TPE"> -->
              <?php

              if (isset($_POST["choix"])) {
                foreach ($_POST["choix"] as $key => $value) {
                }
              }

              ?>
            </div>
            <!-- <div class="lesCheckbox">
        <input type="checkbox" name="TPE" id="TPE" value="">
        <label for="TPE">TPE</label>
        <input type="checkbox" name="PME" id="TPE" value="">
        <label for="TPE">PME</label>
        <input type="checkbox" name="GE" id="GE" value="">
        <label for="GE">GRANDE ENTREPRISE</label>
        <input type="checkbox" name="CTER" id="CTER" value="">
        <label for="CTER">COLLECTIVE TER</label>
        <input type="checkbox" name="ASSOCIATION" id="ASSOCIATION" value="">
        <label for="ASSOCIATION">ASSOCIATION</label>
        <input type="checkbox" name="AUTRES" id="AUTRES" value="">
        <label for="AUTRES">AUTRES (secteur public)</label> -->


            <input type="checkbox" name="choix[]" id="tpe" value="TPE">
            <label for="tpe">TPE</label>
            <input type="checkbox" name="choix[]" id=pme value="PME">
            <label for="pme">PME</label>
            <input type="checkbox" name="choix[]" id="ge" value="GE">
            <label for="ge">GRANDE ENTREPRISE</label>
            <input type="checkbox" name="choix[]" id="ct" value="CT">
            <label for="ct">COLLECTIVE TER</label>
            <input type="checkbox" name="choix[]" id="assoc" value="ASSOC">
            <label for="assoc">ASSOCIATION</label>
            <input type="checkbox" name="choix[]" id="autres" value="AUTRES...">
            <label for="autre">AUTRES</label>
          </fieldset>




          <input type="submit" id="valider" name="valider" value="Valider">

          <input type="button" id="imprimer" name="imprimer" value="imprimer">

        </form>
        <br>



        <?php

        // var_dump($_POST["choix"]);

        //     var_dump($_POST["dep"]) ;


        $finrq = "";

        if (isset($_POST["choix"]) && count($_POST["choix"]) > 0) {
          $liste = "";
          for ($i = 0; $i < count($_POST["choix"]); $i++) {
            $liste .= ",'" . $_POST["choix"][$i] . "'";
          }

          $liste2 = substr($liste, 1);

          $finrq = "  AND type_etab IN(".$liste2 .")";
        }


        $connect = Connexion::getInstance();
        $rq = "SELECT nom_etab, type_etab, nom_resp, adresse, cp, ville, Telephone, email FROM institutions WHERE depart=:departement " . $finrq;
        //and type_etab in ('TPE','GE') ;
        //echo $rq;
        $state = $connect->prepare($rq);
        $state->bindParam(":departement", $_POST["dep"], PDO::PARAM_INT);
        $state->execute();
        $data = [];
        $nbEntr = 0;

        echo "<caption> Résultat de votre recherche</caption> <table class=''>";
        echo "<thead><tr ><th>Nom établissement</th> <th>Type étab</th> <th>Nom resp</th> <th>adresse</th> <th>Code Postal</th> <th>Ville</th> <th>Tél</th> <th>Mail</th> </tr></thead> <tbody>";


        while ($obj = $state->fetch()) {
          echo "<tr>";
          $nbEntr++;
          array_push($data, $obj);

          foreach ($obj as $key => $value) {
            echo '<td>' . htmlentities($obj->$key) . '</td>';
          }

          echo "</tr>";
        }



        echo "</tbody></table>";
        //var_dump($data);
        ?>
        <aside>
          <?php
          echo "<p>Nombre d'établissement trouvé: " . $nbEntr . "</p>";
          ?>
        </aside>
      </section>
      <footer>
        Copyright
      </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </div>
  </div>
</body>

</html>