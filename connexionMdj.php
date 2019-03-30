<html>
<head>
	<title>CONNEXION MAITRE DU JEU
	</title>
	<meta charset="utf-8"/>
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css"/>
</head>

<body>

<?php
		require('db.php');
		session_start();
		if(isset($_POST['loginMdj'])){
			$login2 = mysqli_real_escape_string($connexion,stripslashes($_REQUEST['loginMdj']));
			$mdp2 = mysqli_real_escape_string($connexion,stripslashes($_REQUEST['mdpMdj']));
			$demande2 = "SELECT * FROM maitre_du_jeu WHERE loginMdj='".$login2."' and mdpMdj='".$mdp2."'";
			$result2 = $connexion->query($demande2);
			$rows = mysqli_num_rows($result2);
			if($rows==1)
			{
				$_SESSION['loginMdj'] = $login2;
				header("Location: scriptMdj.php");
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
				echo "<p><h3>Une <strong>erreur</strong> s'est produite lors votre identification.<br/> <br/>
				Le pseudo ou le mot de passe entré n'est pas correct. </p><br/><p> Cliquez <a href=\"./connexionMdj.php\">ici</a> pour vous <strong> reéssayer </strong>. </a></h3></p>				
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
	 Connexion MDJ - Le jeu du compost
	</h1>
<br/>

<form method="post">
<fieldset><legend>Connectez-vous en tant que maître du jeu :</legend>
<br/>
<label for='login'>Login : </label>
<input type='text' name='loginMdj' size='50'/><br/>
<label for='mdp'>Mot de passe : </label>
<input type='password' name='mdpMdj' size='50'/><br/>

<input type='submit' value='Envoyer'/>
</form>	 
</div>

<?php
		}
?>




</body>
</html>