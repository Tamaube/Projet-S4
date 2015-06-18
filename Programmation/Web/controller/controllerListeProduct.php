<?php
	session_start();

	require_once('../class/bdd.class.php');
	require_once('../class/config.class.php');
	require_once('../class/produit.class.php');
	
	require_once('../model/produit.model.php');
	

	
	$tabAllProduct = [];
	$tabAllCoupCoeur = [];
	
	$message = "Aucun produit dans cette catégorie";
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
		if(isset($_REQUEST['recherche'])) {
			$tabAllProduct = getRechercheProduit($_REQUEST['recherche']);
			$message = "Aucun produit ne correspond à votre recherche";
		} else {
			$tabAllProduct = getAllProduit();
			$tabAllCoupCoeur = getAllCoupDeCoeur();
		}
	}

	$nbCoupCoeur = count($tabAllCoupCoeur);
	$nbAllProduct = count($tabAllProduct);
	if(isset($_SESSION['userId']))
	{
		echo '<div class="col-xs-12 col-md-4" id="panier">';
			include('../controller/controllerPanier.php');
		echo '</div>';
	} else {
		include('../view/connection.php');
	}
	include('../view/listeProduct.php');
	
	
?>