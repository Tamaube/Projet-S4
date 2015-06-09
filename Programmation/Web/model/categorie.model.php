<?php
	function getAllCategorie()
	{
		$requete = "SELECT id, nom ".
					"FROM categorie";
		$bd = new Bdd();
		$dbh = $bd->connexion();
		try {
			$stmt = $dbh->prepare($requete);
			$stmt->execute();
			
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Categorie');
			
			$res = $stmt->fetchAll();
			
			return $res;
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
?>