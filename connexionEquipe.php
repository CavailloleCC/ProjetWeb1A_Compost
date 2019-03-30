<html>
<head>
	<title>CONNEXION EQUIPE
	</title>
	<meta charset="utf-8"/>
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css"/>
</head>

<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"> <a href="accueil.html">Retour à l'accueil</a> </li>
</ul>
</div>
</nav>
<?php
		require('db.php');
		session_start();
		if(isset($_POST['login'])){
			$login1 = mysqli_real_escape_string($connexion,stripslashes($_REQUEST['login']));
			$mdp1 = mysqli_real_escape_string($connexion,stripslashes($_REQUEST['mdp']));
			$demande = "SELECT * FROM equipe WHERE login='".$login1."' and mdp='".md5($mdp1)."'";
			$result1 = $connexion->query($demande);
			$rows = mysqli_num_rows($result1);
			if($rows==1)
			{
				$_SESSION['login'] = $login1;
				  //$requete1 = mysqli_query($connexion, 'SELECT login FROM equipe');
				  //$requete2 = mysqli_query($connexion, 'SELECT login FROM partie');
				  //$requete2 = $requete1;
				
			  //echo $requete1;
			  //echo "<br/>";         
              //echo "<br/>";         
			  //echo $requete2;
              //echo "<br/>";         

				header("Location: scriptEquipe.php");
				?>
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
				echo "<p><h3><strong>Une erreur s'est produite lors votre connexion.<br/> Le pseudo ou le mot de passe n'est pas correct.</p><br/><p>Cliquez <a href=\"./connexionEquipe.php\">ici</a> 
						pour essayer de nouveau. 
						<br/><br/>
						Si vous n'êtes pas encore inscrit. Cliquez <a href=\"./inscriptionEquipe.php\">ici</a></h3></strong></p>
					";
			}
		}
			else{
		?>

	


<div class='row'>
<div class='col-lg-12'>

	<h1>
	 Connexion équipe - Le jeu du compost
	</h1>
<br/>

<form method="post">
<fieldset><legend>Connectez-vous en tant qu'équipe :</legend>
<br/>
<label for='login'>Login : </label>
<input type='text' name='login' size='50'/><br/>
<label for='mdp'>Mot de passe : </label>
<input type='password' name='mdp' size='50'/><br/>

<input type='submit' value='Envoyer'/>
</form>
	<a href="inscriptionEquipe.php">Pas encore inscrit ?</a>
	 
</div>

<?php
		}
?>


</body>
</html>