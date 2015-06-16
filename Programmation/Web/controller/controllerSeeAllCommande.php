<?php
	session_start();
	
	
	require_once('../class/bdd.class.php');
	require_once('../class/config.class.php');
	require_once('../class/client.class.php');
	require_once('../class/commande.class.php');
	require_once('../class/produit.class.php');
	
	require_once('../model/utilisateur.model.php');
	require_once('../model/commande.model.php');
	require_once('../model/produit.model.php');
	
	if(isset($_SESSION['userId']))
	{
		$clt = getUserViaId($_SESSION['userId']);
		$tabCommandes = getAllCommandeUser($clt->getId());
		$nbCmd = count($tabCommandes);
		include('../view/seeAllCommande.php');
	} else {
		echo '<script>document.location.href = "index.php";</script>';
	}
?>