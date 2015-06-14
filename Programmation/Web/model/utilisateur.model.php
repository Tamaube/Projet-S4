<?php
	function getUser($pseudo, $password)
	{
		$requete = "SELECT id, pseudo , nom, prenom, age, mail, rue, ville, code_postal, pays ".
					"FROM utilisateur ".
					"WHERE pseudo = :pseudo ".
					"AND password = :password ";
		$bd = new Bdd();
		$dbh = $bd->connexion();
		// Cette ligne permet d'activier la gestion des erreurs avec PDO :
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try {
			$stmt = $dbh->prepare($requete);
			$stmt->execute(array(':pseudo' => $pseudo, ":password" => $password));
			
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			
			$tempClient = null;
			if ($stmt->rowCount() == 1) {
				$tempClient = new Client($stmt->fetch());
			}
			
			$stmt->closeCursor();
			return $tempClient;			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
	function updateUser(Client $clt)
	{
		$requete = "UPDATE utilisateur SET nom = :nom, prenom = :prenom, age = :age, mail = :mail, rue = :rue, ".
				   " ville = :ville, code_postal = :code_postal, pays = :pays WHERE id = :id";
		
		$bd = new Bdd();
		$dbh = $bd->connexion();
		// Cette ligne permet d'activier la gestion des erreurs avec PDO :
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try {
			$stmt = $dbh->prepare($requete);
			
			$params = [];
			$params[':id'] = $clt->getId();
			$params[':nom'] = $clt->getNom();
			$params[':prenom'] = $clt->getPrenom();
			$params[':age'] = $clt->getAge();
			$params[':mail'] = $clt->getMail();
			$params[':rue'] = $clt->getRue();
			$params[':ville'] = $clt->getVille();
			$params[':code_postal'] = $clt->getCode_postal();
			$params[':pays'] = $clt->getPays();
			
			$stmt->execute($params);
			$stmt->closeCursor();
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
	function updatePassword ($idClient, $password)
	{
		$requete = "UPDATE utilisateur SET password = :password, ".
				   " WHERE id = :id";
		
		$bd = new Bdd();
		$dbh = $bd->connexion();
		// Cette ligne permet d'activier la gestion des erreurs avec PDO :
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try {
			$stmt = $dbh->prepare($requete);
			
			$params = [];
			$params[':id'] = $idClient;
			$params[':password'] = $password;
		
			$stmt->execute($params);
			$stmt->closeCursor();
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
	function createUser(Client $clt, $password)
	{
		$requete = "INSERT INTO utilisateur (pseudo, nom, prenom, age, mail, rue, ville, code_postal, pays, password) ".
				   "VALUE(:pseudo, :nom, :prenom, :age,:mail, :rue, :ville, :code_postal, :pays, :password) ";
		
		$bd = new Bdd();
		$dbh = $bd->connexion();
		// Cette ligne permet d'activier la gestion des erreurs avec PDO :
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try {
			$stmt = $dbh->prepare($requete);
			
			$params = [];
			$params[':pseudo'] = $clt->getPseudo();
			$params[':nom'] = $clt->getNom();
			$params[':prenom'] = $clt->getPrenom();
			$params[':age'] = $clt->getAge();
			$params[':mail'] = $clt->getMail();
			$params[':rue'] = $clt->getRue();
			$params[':ville'] = $clt->getVille();
			$params[':code_postal'] = $clt->getCode_postal();
			$params[':pays'] = $clt->getPays();
			$params[':password'] = $password;
			
			$stmt->execute($params);
			$stmt->closeCursor();
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
	
	

?>