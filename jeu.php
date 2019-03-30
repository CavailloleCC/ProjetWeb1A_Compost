<html>
<head>
	<title>JEU
	</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css"/>

</head>



<body> 

<?php 

    require('db.php');
//LECTURE DE TOUTES LES LIGNES DE LA TABLE "LIEU" SUIVANT LE 'lieu' DU BOUTON
    $lieu = $_POST["lieu"];
    $requete =$connexion->query("SELECT * FROM lieu WHERE nomLieu = '$lieu'"); 
        while($ligne2 = mysqli_fetch_assoc($requete))
        {
            //print_r($ligne2);
            $image = $ligne2['image'];
            $enigme1 = $ligne2['enigme1'];
            $enigme2 = $ligne2['enigme2'];
            $enigme3 = $ligne2['enigme3'];
        }
//LECTURE DE TOUTES LES LIGNES DE LA TABLE "LIEU" ---> MARCHE
        /*require('db.php');
        $requete = $connexion->query("SELECT * FROM lieu ");    
        while($ligne2 = mysqli_fetch_assoc($requete))
        {
            echo $ligne2['image'];
            echo $ligne2['nomLieu'];
            echo $ligne2['enigme1'];
            echo $ligne2['enigme2'];
            echo $ligne2['enigme3'];
        }*/

?>      
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
<div class="bg" style="background: url(<?php echo $image; ?>) no-repeat 0% 0% / cover; height: 120vh; width:100%;"> 

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<div class="container-fluid">
      <div class="row">

                <div class="col-lg-1"> <!-- bouton1 -->
                <div id="masque1">
                    <div class="fenetre-modale">
                        <a class="fermer" href="#">Fermer</a>
                        <h2><?php echo $enigme1; ?></h2> 
                    </div>
                </div>
                    <p><a href="#masque1"class="btn btn-success btn-sm" role="button"><span class="glyphicon glyphicon glyphicon-leaf"></span></a></p>
                </div>
		
		
        <div class="col-lg-2"></div>
        <div class="col-lg-3"></div>
        <div class="col-lg-5"></div>
		
		
		<div class="col-lg-1"> <!-- bouton3 -->
			<div id="masque3">
			<div class="fenetre-modale">
                <a class="fermer" href="#">Fermer</a>
				<h2><?php echo $enigme3; ?></h2> 
			</div>
			</div>
			<p><a href="#masque3"class="btn btn-success btn-sm" role="button"><span class="glyphicon glyphicon glyphicon-leaf"></span></a></p>
		</div>
      </div>

</div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


<div class="row">
	<div class="col-sm-5"></div>
	
	
	<div class="col-sm-2 center">
		<div id="masque2">
			<div class="fenetre-modale">
                <a class="fermer" href="#">Fermer</a>
				<h2><?php echo $enigme2; ?></h2> 
			</div>
		</div>
		<p><a href="#masque2"class="btn btn-success btn-sm" role="button"><span class="glyphicon glyphicon glyphicon-leaf"></span></a></p>
    </div>
	
	
	<div class="col-sm-5"></div>
</div>








</div>


</body>

</html>
