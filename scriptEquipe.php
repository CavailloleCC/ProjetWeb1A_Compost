<?php
	require('db.php');
	include('authEquipe.php');
?>


<html>
<head>
	<title>SCRIPT EQUIPE
	</title>
	<meta charset="utf-8"/>
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css"/>
</head>

<body> 

<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"> <a href="script.php">Script</a> </li>
            <li> <a href="map.php">Map</a> </li>
            <li> <a href="#" class="navbar-center">Temps total </a> </li>
            <li> <a href="deconnexionEquipe.php" >Déconnexion</a></li>

          </ul>
        </div>
</nav>


<div class="row">

  <div class="col-sm-12 centre">
  <br/><h1><strong>Bienvenue sur le jeu du Compost </strong></h1>
  <br/>
  <br/> <h3>Suivez les indices,<br/>
  <br/> Explorer les différentes salles,<br/>
  <br/> Discutez avec les élèves pour retrouver le compost de l'école <br/>
  <br/> Commencer à aider la planête, il n'est jamais trop tard !<br/></h3>
  <br/>
  <br/>

  <div class="row">
	<div class="col-sm-12 centre ">
	<a class="btn btn-info" role="button"  href="map.php"><h2>Voir la <strong>MAP</strong><span class="glyphicon glyphicon-map-marker"></span><br/>pour commencer à jouer </h2></a>
	</div>
</div>


  <br/> 
  <br/>
  <br/>
  <h5><a href="deconnexionEquipe.php">Déconnexion</a></h5>
  </div>

</div>

</body>
</html>








