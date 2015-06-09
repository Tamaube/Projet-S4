<?php
	class Client
	{
		private $id;
		private $pseudo;
		private $nom;
		private $prenom;
		private $age;
		private $mail;
		
		
		/*======= Definition des setters =======*/
		public function setId($id)
		{
			$this->id = $id;
		}
		
		public function setNom($nom)
		{
			$this->nom = $nom;
		}
		
		public function setPrenom($prenom)
		{
			$this->prenom = $prenom;
		}
		
		public function setAge($age)
		{
			$this->age = $age;
		}
		
		public function setMail($mail)
		{
			$this->mail = $mail;
		}
		
		/*======= Definition des getters =======*/
		public function getId()
		{
			return $this->id;
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
	}
?>