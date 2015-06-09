<?php
	class Bdd
	{
		const BDD_USER = "cberth7";
		const BDD_PASSWD = "asse";
		const BDD_SERVER = "oci:dbname=//r2d2.etu.iut-orsay.fr:1521/etudom";
						
		private $dbh; 
		
		public function connexion()
		{
			try{
				$this->dbh = new PDO(self::BDD_SERVER,self::BDD_USER,self::BDD_PASSWD);
			} catch(PDOException $e){
				echo ($e->getMessage());
			}
			return $this->dbh;
			
		}
		
		public function deconnexion()
		{
		}
	}
?>