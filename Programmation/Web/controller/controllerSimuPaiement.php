<?php
	session_start();

	require_once('../class/bdd.class.php');
	require_once('../class/config.class.php');
	require_once('../class/commande.class.php');
	require_once('../class/produit.class.php');
	require_once('../class/client.class.php');
	
	require_once('../model/utilisateur.model.php');
	require_once('../model/produit.model.php');
	require_once('../model/commande.model.php');
	
	
	if( isset($_SESSION['userId'])
		 && isset($_POST['rue']) && !empty($_POST['rue'])
	     && isset($_POST['ville']) && !empty($_POST['ville']) && preg_match('#[A-Za-z]+#', $_POST['ville'])
	     && isset($_POST['code_postal']) && !empty($_POST['code_postal']) && preg_match('#[0-9]{5}#', $_POST['code_postal'])
	     && isset($_POST['pays']) && !empty($_POST['pays']) && preg_match('#[A-Za-z]+#', $_POST['pays']))
	{
		$tabIdProd = [];
		$tabQte = [];
		$idClient = $_SESSION['userId'];
		
		foreach($_POST as $key => $val)
		{
			if (preg_match('#^qte_#' , $key))
			{
				$tabIdProd[] = intval(substr($key, 4));
				$tabQte[] = $val;
			}
		}		
	
		$nbCommande = count($tabQte);
		for($i=0; $i < $nbCommande; $i++)
		{
			$cmd = getOneCommande(new Commande(array('client' => $idClient , 'produit' => $tabIdProd[$i])));
			if($cmd->getQuantite() != $tabQte[$i])
			{
				$cmd->setQuantite($tabQte[$i]);
				updateCommande($cmd);
			}
			
			updateStockProduit($cmd);
			valideCommande($cmd);
			
		}
	} else {
		echo "Erreur de saisie";
	}
?>