<?php
	if(!isset($_SESSION['userId']))
	{
		session_start();
	}
	
	require_once('../class/bdd.class.php');
	require_once('../class/config.class.php');
	require_once('../class/client.class.php');
	
	require_once('../model/utilisateur.model.php');
	
	if(isset($_SESSION['userId']))
	{
		$clt = getUserViaId($_SESSION['userId']);
		include('../view/panier.php');
	} else {
		echo '<script>document.location.href = "index.php";</script>';
	}
?>