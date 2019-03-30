<html>
<head>
	<title>INSCRIPTION EQUIPE
	</title>
	<meta charset="utf-8"/>
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css"/>
</head>

<body>


	<?php
		require('db.php');
		if(isset($_POST['login']))
		{
			$login = mysqli_real_escape_string($connexion,stripslashes($_REQUEST['login']));
			$mdp = mysqli_real_escape_string($connexion,stripslashes($_REQUEST['mdp']));
			$query = "INSERT INTO equipe (login,mdp) VALUES ('$login','".md5($mdp)."')";
			$result = mysqli_query($connexion,$query);
			if($result)
			{
					?>
					<nav class="navbar navbar-inverse">
					<div class="col-sm-3"></div>

					<div class="blanc col-sm-6 centre"><h2>Le jeu du compost</h2></div></div>
					
					<div class="col-sm-3"></div>

				</nav>
				<?php echo"<br/><br/><p><h3><strong>Inscription réussi ! </h3></strong></p><br/><br/>";?>
							<div class="row">
							<div class="col-sm-12 centre ">
							<a class="btn btn-info" role="button"  href="connexionEquipe.php"><h2>Maintenant <strong> connectez-vous </strong><span class="glyphicon glyphicon-user"></span><br/> pour jouer !</h2></a>
							</div>
							</div>
				<?php
			}
			else
			{
				?>
					<nav class="navbar navbar-inverse">
					<div class="col-sm-3"></div>

					<div class="blanc col-sm-6 centre"><h2>Le jeu du compost</h2></div></div>
					
					<div class="col-sm-3"></div>

				</nav>
				<?php
				echo "<p><h3><strong>Une erreur s\'est produite 
						pendant votre inscription.<br/> Le pseudo est déjà utilisé.</p><p>Cliquez <a href=\"./inscriptionEquipe.php\">ici</a> 
						pour rééssayer. </h3></strong></p>
					";
			}
		}
			else{
		?>
	

	<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"> <a href="accueil.html">Retour à l'accueil</a> </li>
			</ul>
		</div>
	</nav>


<div class='row'>
<div class='col-lg-12'>

	<h1>
	Inscription - Le jeu du compost
	</h1>
<br/>

<form method="post">
<fieldset><legend>Inscrivez-vous en tant qu'équipe :</legend>
<br/>
<label for='login'>Login : </label>
<input type='text' name='login' size='50'/><br/>
<label for='mdp'>Mot de passe : </label>
<input type='password' name='mdp' size='50'/><br/>

<input type='submit' value='Envoyer'/>
</form>
	<a href="connexionEquipe.php" >Déjà inscrit ?</a>
	 
</div>

<?php
		}
?>




</body>
</html>