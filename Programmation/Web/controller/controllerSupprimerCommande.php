<?php

	session_start();

	require_once('../class/bdd.class.php');
	require_once('../class/config.class.php');
	require_once('../class/commande.class.php');
	require_once('../class/produit.class.php');
	
	require_once('../model/produit.model.php');
	require_once('../model/commande.model.php');
	
	if(isset($_REQUEST['idCmd']) && isset($_SESSION['userId'])){
		deleteCommande($_REQUEST['idCmd']);
	}

?>