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
	
	
	if(isset($_POST) && isset($_SESSION['userId']))
	{
		$idProduits = [];
		$qtes = [];
		
		
		foreach($_POST as $key => $val)
		{
			if (preg_match('#^qte_#' , $key))
			{
				$idProduits[] = intval(substr($key, 4));
				$qtes[] = $val;
			}
		}
		
		
		
		$nbArticles = count($qtes);
		$saisieCorrecte = true;
		$i=0;
		
		while($i < $nbArticles &&  $saisieCorrecte)
		{
			$prod = getOneProduct($idProduits[$i]);
			$saisieCorrecte = ($qtes[$i] <= $prod->getStock());
			
			$i++;
		}
		
		if ($saisieCorrecte)
		{
			$clt = getUserViaId($_SESSION['userId']);
			$data = [];
			$data['rue'] = $clt->getRue();
			$data['ville'] = $clt->getVille();
			$data['code_postal'] = $clt->getCode_postal();
			$data['pays'] = $clt->getPays();
			
			// on envoie a javascript les data avec json
			echo json_encode($data);
		} else {
			// on envoie a javascript les data avec json
			echo json_encode(array('message' => 'Une des quantités indiquées est trop élevée' ));
		}
	}
	
	
?>