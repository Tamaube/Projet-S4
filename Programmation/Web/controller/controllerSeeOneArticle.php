<?php
	session_start();

	require_once('../class/bdd.class.php');
	require_once('../class/config.class.php');
	require_once('../class/produit.class.php');
	
	require_once('../model/produit.model.php');
	
	
	
	
	if(isset($_REQUEST['idProd']))
	{
		$produit  = getOneProduct($_REQUEST['idProd']);
		// print_r($produit);
		$utilisateurCo = false;
		if(isset($_SESSION['userId']))
		{
			$utilisateurCo = true;
			echo '<div class="col-xs-12 col-md-4" id="panier">';
				include('../controller/controllerPanier.php');
			echo '</div>';
		} else {
			include('../view/connection.php');
		}
		include('../view/seeOneArticle.php');
	}
?>