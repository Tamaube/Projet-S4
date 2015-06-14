<?php
	class Categorie
	{
		private $id;
		private $nom;
		private $sesSousCategories;
		
		public function __construct (array $donnees)
		{
			$this->hydrate($donnees);
		}
		
		/*============= Description setters ====================*/
		public function setId($id)
		{
			$this->id = $id;
		}
		
		public function setNom($nom)
		{
			$this->nom = $nom;
		}
		
		public function setSesSousCategories(array $sesSousCategories)
		{
			$this->sesSousCategories = $sesSousCategories;
		}
		
		/*============= Description getters ==============*/
		public function getId()
		{
			return $this->id;
		}
		
		public function getNom()
		{
			return $this->nom;
		}
		
		public function getSesSousCategories()
		{
			return $this->sesSousCategories;
		}
		
		public function haveSousCat()
		{
			return count($this->sesSousCategories) > 0;
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
	}
?>