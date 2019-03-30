<!doctype html>
<html>
<head>
	<title>MAP
	</title>
	<meta charset="utf-8"/>
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styleMap.css" />
</head>

<body> 
<?php
    require('db.php');
    $requete5 =$connexion->query("SELECT description FROM aide WHERE numAide = '1'"); 
    while($ligne5 = mysqli_fetch_assoc($requete5))
        {
            $aide1 = $ligne5['description'];
        }
    
    $requete6 =$connexion->query("SELECT description FROM aide WHERE numAide = '2'"); 
    while($ligne6 = mysqli_fetch_assoc($requete6))
        {
            $aide2 = $ligne6['description'];
        }

    $requete7 =$connexion->query("SELECT description FROM aide WHERE numAide = '3'"); 
    while($ligne7 = mysqli_fetch_assoc($requete7))
        {
            $aide3 = $ligne7['description'];
        }
?>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"> <a href="scriptEquipe.php">Script</a> </li>
            <li> <a href="map.php">Map</a> </li>
            <li> <a href="#" class="navbar-center">Temps total </a> </li>
            <div id="masque5">
                    <div class="fenetre-modale">
                        <a class="fermer" href="#">Fermer</a>
                        <span class="glyphicon glyphicon glyphicon-leaf"></span> 
                        <h2><?php echo "INDICE 1 : "; echo "<br/>"; echo $aide1; ?></h2> 
                    </div>
            </div>

            <div id="masque6">
                    <div class="fenetre-modale">
                        <a class="fermer" href="#">Fermer</a>
                        <span class="glyphicon glyphicon glyphicon-leaf"></span> 
                        <h2><?php echo "INDICE 2 : "; echo "<br/>"; echo $aide2; ?></h2> 
                    </div>
            </div>

            <div id="masque7">
                    <div class="fenetre-modale">
                        <a class="fermer" href="#">Fermer</a>
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


<div class = "fond">



<br>
<br>
<br>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="row">
	<div class="col-sm-8 centre"></div>
	<div class="col-sm-4 centre">
        <form action="jeu.php" method="post">
            <input type="hidden" name="lieu" value="Bâtiment Est">
            <button class="btn btn-danger btn-lg" type="submit">
                <span class="glyphicon glyphicon glyphicon-leaf"></span>
            </button>
        </form>
	</div>
</div>
<br/>
<div class="row">
	<div class="col-sm-6 centre"></div>
	<div class="col-sm-4 centre">
    <form action="jeu.php" method="post">
            <input type="hidden" name="lieu" value="Bâtiment Nord">
            <button class="btn btn-danger btn-lg" type="submit">
                <span class="glyphicon glyphicon glyphicon-leaf"></span>
            </button>
        </form>
	</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="row">
	<div class="col-sm-1 centre"></div>
	<div class="col-sm-5 centre">
    <form action="jeu.php" method="post">
            <input type="hidden" name="lieu" value="Bâtiment Ouest">
            <button class="btn btn-danger btn-lg" type="submit">
                <span class="glyphicon glyphicon glyphicon-leaf"></span>
            </button>
        </form>
	</div>
</div>



<div class="row">
	<div class="col-sm-7 centre"></div>
	<div class="col-sm-2 centre">
    <form action="jeu.php" method="post">
            <input type="hidden" name="lieu" value="Bâtiment Sud">
            <button class="btn btn-danger btn-lg" type="submit">
                <span class="glyphicon glyphicon glyphicon-leaf"></span>
            </button>
        </form>
	</div>
</div>


<div class="row">
	<div class="col-sm-4 centre"></div>
	<div class="col-sm-3 centre">
    <form action="jeu.php" method="post">
            <input type="hidden" name="lieu" value="Patio">
            <button class="btn btn-danger btn-lg" type="submit">
                <span class="glyphicon glyphicon glyphicon-leaf"></span>
            </button>
        </form>	
    </div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

</div>


</body>

</html>
