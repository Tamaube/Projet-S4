<?php
	class Produit
	{
		private $id;
		public $nom;
		private $prix;
		private $coupDeCoeur;
		private $stock;
		private $description;
		private $pathFile;
		
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
		
		public function setNom($nom)
		{
			$this->nom = $nom;
		}
		
		public function setPrix($prix)
		{
			$this->prix = $prix;
		}
		
		public function setCoupDeCoeur($coupDeCoeur)
		{
			$this->coupDeCoeur = $coupDeCoeur;
		}
		
		public function setStock($stock)
		{
			$this->stock = $stock;
		}
		
		public function setDescription($description)
		{
			$this->description = $description;
		}
		
		public function setPathFile($pathFile)
		{
			$this->pathFile = $pathFile;
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
		
		public function getPrix()
		{
			return $this->prix;
		}
		
		public function getStock()
		{
			return $this->stock;
		}
		
		public function getDescription()
		{
			return $this->description;
		}
		
		public function getPathFile()
		{
			return $this->pathFile;
		}
		
		public function isCoupDeCoeur()
		{
			return $this->coupDeCoeur == 1;
		}
	}
?>