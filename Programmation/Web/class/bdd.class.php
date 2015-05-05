<?php
	class Bdd
	{
		const BDD_USER = "cberth7";
		const BDD_PASSWD = "asse";
		const BDD_SERVER = "oci:dbname=oracle.iut-orsay.u-psud.fr:1521:etudom";
		
		private $dbh; 
		
		public function connexion()
		{
			$this->dbh = new PDO(self::BDD_SERVER,BDD_USER,BDD_PASSWD);
			
			return $this->dbh;
		}
		
		public function deconnexion()
		{
		}
	}
?>