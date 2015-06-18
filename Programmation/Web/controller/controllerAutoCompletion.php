<?php

	session_start();
	
	require_once('../class/bdd.class.php');
	require_once('../class/config.class.php');
	require_once('../class/produit.class.php');
	
	require_once('../model/produit.model.php');
	
	if(isset($_POST['recherche']))
	{
		$str = $_POST['recherche'];
		$selectProd = getRechercheProduit($str);

		echo json_encode($selectProd);
	}
?>