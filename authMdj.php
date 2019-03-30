<?php
	session_start();
	if(!isset($_SESSION["login"])){
	header("location:connexionMdj.php");
	exit();
	}
?>