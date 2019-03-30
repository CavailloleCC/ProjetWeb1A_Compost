<html>
<head>
	<title>JEU
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css"/>

</head>



<body> 



<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"> <a href="script.php">Script</a> </li>
            <li> <a href="map.php">Map</a> </li>
            <li> <a href="#" class="navbar-center">Temps tot </a> </li>
            <div id="masque5">
                    <div class="fenetre-modale">
                        <a class="fermer" href="#"><img alt="Fermer" title="Fermer la fenêtre" class="btn-fermer"/></a>
                        <span class="glyphicon glyphicon glyphicon-leaf"></span> 
                        <h2><?php echo "INDICE 1 : "; echo "<br/>"; echo $aide1; ?></h2> 
                    </div>
            </div>

            <div id="masque6">
                    <div class="fenetre-modale">
                        <a class="fermer" href="#"><img alt="Fermer" title="Fermer la fenêtre" class="btn-fermer"/></a>
                        <span class="glyphicon glyphicon glyphicon-leaf"></span> 
                        <h2><?php echo "INDICE 2 : "; echo "<br/>"; echo $aide2; ?></h2> 
                    </div>
            </div>

            <div id="masque7">
                    <div class="fenetre-modale">
                        <a class="fermer" href="#"><img alt="Fermer" title="Fermer la fenêtre" class="btn-fermer"/></a>
                        <span class="glyphicon glyphicon glyphicon-leaf"></span> 
                        <h2><?php echo "INDICE 3 : "; echo "<br/>"; echo $aide3; ?></h2> 
                    </div>
            </div>
            
            <li> <a href="#masque5" class="navbar-center">Aide 1 </a> </li>
            <li> <a href="#masque6" class="navbar-center">Aide 2 </a> </li>
            <li> <a href="#masque7" class="navbar-center">Aide 3 </a> </li>
            <li> <a href="deconnexionEquipe.php" >Déconnexion</a></li>

          </ul>
        </div>
</nav>
<div class="bg" style="background: url('compost.jpg') no-repeat 0% 0% / cover; height: 120vh; width:100%;"> 
<br/>
<br/>
<div class = "maPoliceStlee"><h1><p><strong>BRAVOOOO</strong></p></h1></div>

</div>
</body>

</html>
