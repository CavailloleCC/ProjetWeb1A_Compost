<?php
	require('db.php');
	include('authMdj.php');
?>


<html>
<head>
	<title>SCRIPT
	</title>
	<meta charset="utf-8"/>
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css"/>
</head>

<body> 


<nav class="navbar navbar-inverse">
	  <div class="col-sm-3"></div>

      <div class="blanc col-sm-6 centre"><h2>Le jeu du compost</h2></div></div>
	  
	  <div class="col-sm-3"></div>

</nav>
<div class="souligner"><br/><h4>Voici les caractéristiques des équipes en cours : </h4></p></div>
<div class="row">

  <div class="col-sm-15 centre">
  <br/><h3></h3>

  <div class="row">
        <div class="col-lg-2">
          <?php
            require('db.php');
            $resultat2 = mysqli_query($connexion, 'SELECT numEquipe FROM partie');
            echo '<strong>N°équipe : </strong>';
            echo "<br/>";
            while($ligne2 = mysqli_fetch_assoc($resultat2))
              {
                echo "<br/>";
                   echo $ligne2['numEquipe'];
                   echo "<br/>";
              }

            ?>
        </div>
        <div class="col-lg-3">
          <?php
                require('db.php');
                $requete1 = "SELECT login FROM equipe";
                $resultat1 = $connexion->query($requete1);
                echo '<strong>Nom équipe : </strong>';
                $tabresultat1 = $resultat1->fetch_assoc();
                foreach ($tabresultat1 as $ligne1) 
                    {
                      echo"<br/>";
                      $login=$ligne1;
                      echo"<br/>";
                      echo $login;
                    }
          ?>
          </div> 
            
          <div class="col-lg-2">
            <?php
                require('db.php');
                $resultat2 = mysqli_query($connexion, 'SELECT numPartie FROM partie');
                echo '<strong>N°partie : </strong>';
                echo "<br/>";
                while($ligne2 = mysqli_fetch_assoc($resultat2))
                {
                  echo "<br/>";
                  echo $ligne2['numPartie'];
                  echo "<br/>";

                }

            ?>
          </div>


          <div class="col-lg-3">
            <?php
              require('db.php');
              //$requete2 = "SELECT * FROM equipe";
              $resultat2 = mysqli_query($connexion, 'SELECT tpsTotal FROM partie');
              echo '<strong>Temps total : </strong>';
              echo "<br/>";
              while($ligne2 = mysqli_fetch_assoc($resultat2))
              {
                echo "<br/>";
                echo $ligne2['tpsTotal'];
                echo "<br/>";

              }
            ?>
          </div>

          <div class="col-lg-2">
            <?php
              require('db.php');
              $resultat2 = mysqli_query($connexion, 'SELECT nbrAide FROM partie');
              echo '<strong>Nbr aide : </strong>';
              echo "<br/>";
              while($ligne2 = mysqli_fetch_assoc($resultat2))
              {
                echo "<br/>";
                echo $ligne2['nbrAide'];
                echo "<br/>";
              }

           ?>
          </div>
      </div>

<br/>
<br/>
  <h4><a href="deconnexionMdj.php">Déconnexion</a></h4>
  </div>

</div>


</body>
</html>

