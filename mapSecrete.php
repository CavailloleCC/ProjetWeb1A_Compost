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
<?php
        if(isset($_POST['mdp']))
		{
            $mdp = $_POST['mdp'];
            if($mdp==34156)
            {
                echo "<div class='centre'><h2>Je crois que tu touches au but...
				<br/> Es-tu prêt à découvrir le Saint des Saints ? Le <a href='gagne.php'><strong>sauveur</strong></a> de l'humanité ? </h2></div>
				<p><img src='tuYEsPresque.jpg' alt='CCdesopasdeso' height=100% width=100%></p>";
            }
            else
			{
                echo "<nav class='navbar navbar-inverse'>
        <div class='container-fluid'>
          <ul class='nav navbar-nav'>
            <li class='active'> <a href='#'>Script</a> </li>
            <li> <a href='map.php'>Map</a> </li>
            <li> <a href='#' class='navbar-center'>Temps total :</a> </li>
            <div id='masque5'>
            <div class='fenetre-modale'>
                <a class='fermer' href='#'>Fermer</a>
                <span class='glyphicon glyphicon glyphicon-leaf'></span> 
                <h2>INDICE 1 : <br/> $aide1 </h2> 
            </div>
    </div>

    <div id='masque6'>
            <div class='fenetre-modale'>
                <a class='fermer' href='#'>Fermer</a>
                <span class='glyphicon glyphicon glyphicon-leaf'></span> 
                <h2>INDICE 2 : <br/> $aide2 </h2> 
            </div>
    </div>

    <div id='masque7'>
            <div class='fenetre-modale'>
                <a class='fermer' href='#'>Fermer</a>
                <span class='glyphicon glyphicon glyphicon-leaf'></span> 
                <h2>INDICE 3 : <br/> $aide3 </h2> 
            </div>
    </div>
    
    <li> <a href='#masque5' class='navbar-center'>Aide 1 </a> </li>
    <li> <a href='#masque6' class='navbar-center'>Aide 2 </a> </li>
    <li> <a href='#masque7' class='navbar-center'>Aide 3 </a> </li>
            <li> <a href='Accueil.html' >Quitter</a></li>
          </ul>
        </div>
</nav>
<div class='centre'><p><h2>Mauvais code !</h2></p><p><h2>Cliquez <a href='mapSecrete.php'><strong>ici</strong></a>
                    pour retenter. </h2></p>  </div>           
					<p><img src='mdpIncorrect.jpg' alt='CCdesopasdeso' height=100% width=100%></p>";
           }
        }
		else {
?>


<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"> <a href="script.php">Script</a> </li>
            <li> <a href="map.php">Map</a> </li>
            <li> <a href="#" class="navbar-center">Temps tot </a> </li>
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
	<div class="col-sm-4 centre"></div>
	<div class="col-sm-1 centre">
		<div id="masque">
			<div class="fenetre-modale">
				<a class="fermer" href="#nullePart">Fermer</a>
				
				
				<form method="post">
					<fieldset>
					<label for='mdp'>Mot de passe : </label>
					<input type='password' name='mdp' size='5'/></br>
					<input type='submit' value='Envoyer'/>
				</form>





				<h2>Vous n'avez pas le badge requis pour acceder à ce lieu.
				<br/>
				Avez-vous le code à 5 chiffres ?</h2> 
			</div>
		</div>
			<p><a href="#masque"class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon glyphicon-leaf"></span></a></p>
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

<?php
		}
		?>
</body>

</html>

