<?php
	class Client
	{
		private $id;
		private $pseudo;
		private $nom;
		private $prenom;
		private $age;
		private $mail;
		
		private $rue;
		private $ville;
		private $code_postal;
		private $pays;
		
		public function __construct (array $donnees)
		{
			$this->hydrate($donnees);
		}
		
		private function hydrate(array $donnees)
		{
			foreach ($donnees as $key => $value)
			{
				// On récupère le nom du setter correspondant à l'attribut.
				$method = 'set'.ucfirst($key);
					
				// Si le setter correspondant existe.
				if (method_exists($this, $method))
				{
				  // On appelle le setter.
				  $this->$method($value);
				}
			}
		}
		
		/*======= Definition des setters =======*/
		public function setId($id)
		{
			$this->id = $id;
		}
		
		public function setPseudo($pseudo)
		{
			$this->pseudo = $pseudo;
		}
		
		public function setNom($nom)
		{
			$this->nom = $nom;
		}
		
		public function setPrenom($prenom)
		{
			$this->prenom = $prenom;
		}
		
		public function setMail($mail)
		{
			$this->mail = $mail;
		}
		
		public function setAge($age)
		{
			$this->age = $age;
		}
		
		public function setRue($rue)
		{
			$this->rue = $rue;
		}
		
		public function setVille($ville)
		{
			$this->ville = $ville;
		}
		
		public function setCode_postal($code_postal)
		{
			$this->code_postal = $code_postal;
		}
		
		public function setPays($pays)
		{
			$this->pays = $pays;
		}
		
		/*======= Definition des getters =======*/
		public function getId()
		{
			return $this->id;
		}
		
		public function getPseudo()
		{
			return $this->pseudo;
		}
		
		public function getNom()
		{
			return $this->nom;
		}
		
		public function getPrenom()
		{
			return $this->prenom;
		}
		
		public function getAge()
		{
			return $this->age;
		}
		
		public function getMail()
		{
			return $this->mail;
		}
		
		public function getRue()
		{
			return $this->rue;
		}
		
		public function getVille()
		{
			return $this->ville;
		}
		
		public function getCode_postal()
		{
			return $this->code_postal;
		}
		
		public function getPays()
		{
			return $this->pays;
		}
		
		
	}
?>