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
			
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			
			$data = [];
			
			while($res = $stmt->fetch())
			{
				$tempCat = new Categorie($res);
				$listeSousCat = getSousCategorie($res['id']);
				$tempCat->setSesSousCategories($listeSousCat);
				$data[] = $tempCat;
			}
			
			return $data;
			
			$stmt->closeCursor();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
	function getSousCategorie($idCategorie)
	{
		$requete = "SELECT DISTINCT sc.id, sc.nom ".
					"FROM sous_categorie sc, produitsouscat psc ".
					"where sc.id = psc.souscategorie ".
					"AND psc.categorie = :idCategorie";
		$bd = new Bdd();
		$dbh = $bd->connexion();
		// Cette ligne permet d'activier la gestion des erreurs avec PDO :
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try {
			$stmt = $dbh->prepare($requete);
			$stmt->execute(array(':idCategorie' => $idCategorie));
			
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			
			$data = [];
			
			while($res = $stmt->fetch())
			{
				$tempSousCat = new Categorie($res);
				$data[] = $tempSousCat;
			}
			
			return $data;
						
			$stmt->closeCursor();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
?>