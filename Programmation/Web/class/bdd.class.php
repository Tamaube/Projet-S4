<?php
	class Bdd
	{
		// const BDD_USER = "cberth7";
		// const BDD_PASSWD = "asse";
		// const BDD_SERVER = "oci:dbname=//oracle.iut-orsay.u-psud.fr:1521/etudom";
		const BDD_USER = "root";
		const BDD_PASSWD = "";
		const BDD_SERVER = "mysql:host=localhost;dbname=rock_n_clothes";
						
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