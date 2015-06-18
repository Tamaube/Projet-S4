<?php
	require_once('../class/bdd.class.php');
	require_once('../class/config.class.php');
	require_once('../class/client.class.php');
	
	require_once('../model/utilisateur.model.php');
	
	session_start();
	
	if ( isset($_POST['pseudo']) && !empty($_POST['pseudo'])
	     && isset($_POST['nom']) && !empty($_POST['nom']) && preg_match('#[A-Za-z]+#', $_POST['nom'])
	     && isset($_POST['prenom']) && !empty($_POST['prenom']) && preg_match('#[A-Za-z]+#', $_POST['prenom'])
	     && isset($_POST['password']) && !empty($_POST['password']) 
	     && isset($_POST['confPassword']) && !empty($_POST['confPassword']) && $_POST['confPassword'] == $_POST['password']
	     && isset($_POST['age']) && !empty($_POST['age']) && preg_match('#[0-9]+#', $_POST['age'])
	     && isset($_POST['mail']) && !empty($_POST['mail']) && preg_match('#.+@[A-Za-z]+\.[A-Za-z]{2,3}#', $_POST['mail'])
	     && isset($_POST['rue']) && !empty($_POST['rue'])
	     && isset($_POST['ville']) && !empty($_POST['ville']) && preg_match('#[A-Za-z]+#', $_POST['ville'])
	     && isset($_POST['code_postal']) && !empty($_POST['code_postal']) && preg_match('#[0-9]{5}#', $_POST['code_postal'])
	     && isset($_POST['pays']) && !empty($_POST['pays']) && preg_match('#[A-Za-z]+#', $_POST['pays'])
		)
	{
		$clt = new Client($_POST);
		createUser($clt, $_POST['password']);
	} else {
		echo "Un ou plusieurs des champs n'ont pas été remplis ou sont incorrects";
	}
?>