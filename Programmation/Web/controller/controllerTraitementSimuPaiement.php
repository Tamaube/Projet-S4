<?php

	session_start();
	
	if(isset($_SESSION['userId']) && isset($_POST['codeCarte']) && preg_match('#[0-9]{16}#', $_POST['codeCarte'])
		&& isset($_POST['crypto']) && preg_match('#[0-9]{3}#', $_POST['crypto'])
		&& isset($_POST['mois']) && isset($_POST['annee'])
	)
	{
	
	} else { 
		echo "Erreur dans la saisie";
	}
?>