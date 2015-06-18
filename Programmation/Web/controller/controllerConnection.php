<?php
	require_once('../class/bdd.class.php');
	require_once('../class/config.class.php');
	require_once('../class/client.class.php');
	
	require_once('../model/utilisateur.model.php');
	
	session_start();
	
	if(isset($_REQUEST['pseudo']) && !empty($_REQUEST['pseudo']) && isset($_REQUEST['mdp']) && !empty($_REQUEST['mdp']))
	{
		$client = getUser($_REQUEST['pseudo'], $_REQUEST['mdp']);
		if ($client == null)
		{
			echo "Mot de passe ou pseudo incorrect";
		} else {
			$_SESSION['userId'] = $client->getId();
		}
	}	
	
?>