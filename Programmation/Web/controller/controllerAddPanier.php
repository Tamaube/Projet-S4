<?php
	session_start();

	require_once('../class/bdd.class.php');
	require_once('../class/config.class.php');
	require_once('../class/commande.class.php');
	require_once('../class/produit.class.php');
	
	require_once('../model/produit.model.php');
	require_once('../model/commande.model.php');
	
	if(isset($_REQUEST['idProd']) && isset($_REQUEST['qte']) && isset($_SESSION['userId']))
	{
		$params = [];
		$params['produit'] = $_REQUEST['idProd'];
		$params['quantite'] = $_REQUEST['qte'];
		$params['client'] = $_SESSION['userId'];
		$produit = getOneProduct($_REQUEST['idProd']);
		
		$commande = new Commande($params);
		$cmd_enr = getOneCommande($commande);
		
		
		
		
		if($cmd_enr == null) {
			createCommande($commande);
		} else {
			if(isset($_REQUEST['viaPageArticle']))
			{
				if($commande->getQuantite() <= $produit->getStock())
				{
					$cmd_enr->setQuantite($commande->getQuantite());
					updateCommande($cmd_enr);
				} else {
					echo "La quantité de " . $produit->getNom() . " que vous demandez est trop importante par rapport au stock";
				}
			} else {
				if($commande->getQuantite() + $cmd_enr->getQuantite()  <= ($produit->getStock()))
				{
					$cmd_enr->addQuantite($commande->getQuantite());
					updateCommande($cmd_enr);
				} else {
					echo "La quantité de " . $produit->getNom() . " que vous demandez est trop importante par rapport au stock";
				}
			}			
		}
	}
	
?>