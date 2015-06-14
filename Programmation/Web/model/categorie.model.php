<?php
	function getAllCategorie()
	{
		$requete = "SELECT id, nom ".
					"FROM categorie";
		$bd = new Bdd();
		$dbh = $bd->connexion();
		// Cette ligne permet d'activier la gestion des erreurs avec PDO :
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try {
			$stmt = $dbh->prepare($requete);
			$stmt->execute();
			
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Categorie');
			
			$res = $stmt->fetchAll();
			
			return $res;
			
			$stmt->closeCursor();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
?>