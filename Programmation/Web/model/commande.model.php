<?php
	function getAllCommandeUser($idClient)
	{
		$requete = "SELECT id, client , quantite, produit ".
					"FROM commande ".
					"WHERE statut = 'En cours' ".
					"AND  client = :idClient ";
		$bd = new Bdd();
		$dbh = $bd->connexion();
		// Cette ligne permet d'activier la gestion des erreurs avec PDO :
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try {
			$stmt = $dbh->prepare($requete);
			$stmt->execute(array(':idClient' => $idClient));
			
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			
			$res = [];
			while($data = $stmt->fetch())
			{
				$res[] = new Commande($data);
			}
			$stmt->closeCursor();
			
			return $res;			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
	function getOneCommande(Commande $cmd)
	{
		$requete = "SELECT id, client , quantite, produit ".
					"FROM commande ".
					"WHERE statut = 'En cours' ".
					"AND  client = :idClient ".
					"AND produit = :idProd ";
		$bd = new Bdd();
		$dbh = $bd->connexion();
		// Cette ligne permet d'activier la gestion des erreurs avec PDO :
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try {
			$stmt = $dbh->prepare($requete);
			
			$params = [];
			$params[':idClient'] = $cmd->getClient();
			$params[':idProd'] = $cmd->getProduit();
			
			$stmt->execute($params);
			
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			
			$res = null;
			if($stmt->rowCount() == 1)
			{
				$res = new Commande($stmt->fetch());
			}
			$stmt->closeCursor();
			
			return $res;			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
	function updateCommande(Commande $cmd)
	{
		$requete = "UPDATE commande SET client = :client , quantite = :quantite, produit = :produit ".
				   "WHERE id = :id";
		
		$bd = new Bdd();
		$dbh = $bd->connexion();
		// Cette ligne permet d'activier la gestion des erreurs avec PDO :
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try {
			$stmt = $dbh->prepare($requete);
			
			$params = [];
			$params[':id'] = $cmd->getId();
			$params[':client'] = $cmd->getClient();
			$params[':quantite'] = $cmd->getQuantite();
			$params[':produit'] = $cmd->getProduit();
			
			$stmt->execute($params);
			$stmt->closeCursor();
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	
	function createCommande(Commande $cmd)
	{
		$requete = "INSERT INTO commande (client , quantite, produit, statut, dateAjout) ".
				   "VALUE( :client, :quantite, :produit, 'En cours', NOW()) ";
		
		$bd = new Bdd();
		$dbh = $bd->connexion();
		// Cette ligne permet d'activier la gestion des erreurs avec PDO :
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try {
			$stmt = $dbh->prepare($requete);
			
			$params = [];
			$params[':client'] = $cmd->getClient();
			$params[':quantite'] = $cmd->getQuantite();
			$params[':produit'] = $cmd->getProduit();
			
			$stmt->execute($params);
			$stmt->closeCursor();
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
	
	

?>