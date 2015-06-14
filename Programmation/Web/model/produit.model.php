<?php
	function getAllProduit($filtre = "")
	{
		$requete = "SELECT id, nom, prix, stock, description ".
					", CONCAT('categorie_', psc.categorie, '/souscategorie_', psc.souscategorie, '/produit_', p.id, '.jpg') AS pathFile ".
					"FROM produit p, produitsouscat psc ".
					"WHERE psc.produit = p.id ".
					"AND coup_coeur= 0 ".
					$filtre . " ".
					"ORDER BY p.nom ";
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
				$tempProd = new Produit($res);
				$data[] = $tempProd;
			}
			
			return $data;
			
			$stmt->closeCursor();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
	function getAllCoupDeCoeur($filtre = "")
	{
		$requete = "SELECT id, nom, prix, stock, description ".
					", CONCAT('categorie_', psc.categorie, '/souscategorie_', psc.souscategorie, '/produit_', p.id, '.jpg') AS pathFile ".
					"FROM produit p, produitsouscat psc ".
					"WHERE psc.produit = p.id ".
					"AND coup_coeur= 1 ".
					$filtre . " ".
					"ORDER BY p.nom ";
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
				$tempProd = new Produit($res);
				$data[] = $tempProd;
			}
			
			return $data;
			
			$stmt->closeCursor();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
	function getOneProduct($idProduit)
	{
		$requete = "SELECT id, nom, prix, stock, description, coup_coeur as coupDeCoeur ".
					", CONCAT('categorie_', psc.categorie, '/souscategorie_', psc.souscategorie, '/produit_', p.id, '.jpg') AS pathFile ".
					"FROM produit ".
					"WHERE p.id= :idProduit ";
		$bd = new Bdd();
		$dbh = $bd->connexion();
		// Cette ligne permet d'activier la gestion des erreurs avec PDO :
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try {
			$stmt = $dbh->prepare($requete);
			$stmt->execute(array(':idProduit' => $idProduit));
			
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			
			$tempProd = new Produit($stmt->fetch());
			
			return $tempProd;
			
			$stmt->closeCursor();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
?>