<?php
	require_once('../class/bdd.class.php');
	require_once('../class/config.class.php');
	require_once('../class/produit.class.php');
	
	require_once('../model/produit.model.php');
	
	session_start();
	
	$tabAllProduct = [];
	$tabAllCoupCoeur = [];
	if(isset($_REQUEST['idCat']))
	{
		if(isset($_REQUEST['idSousCat']))
		{
			$tabAllProduct = getAllProduit("AND psc.categorie = " . $_REQUEST['idCat'] . " AND psc.souscategorie = " . $_REQUEST['idSousCat']);
			$tabAllCoupCoeur = getAllCoupDeCoeur("AND psc.categorie = " . $_REQUEST['idCat'] . " AND psc.souscategorie = " . $_REQUEST['idSousCat']);
		} else {
			$tabAllProduct = getAllProduit("AND psc.categorie = " . $_REQUEST['idCat']);
			$tabAllCoupCoeur = getAllCoupDeCoeur("AND psc.categorie = " . $_REQUEST['idCat']);
		}
	} else {
		$tabAllProduct = getAllProduit();
		$tabAllCoupCoeur = getAllCoupDeCoeur();
	}

	$nbCoupCoeur = count($tabAllCoupCoeur);
	if(isset($_SESSION['userId']))
	{
		include('../controller/controllerPanier.php');
	} else {
		include('../view/connection.php');
	}
	include('../view/listeProduct.php');
	
	
?>