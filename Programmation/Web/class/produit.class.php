<?php
	class Produit
	{
		private $id;
		private $nom;
		private $prix;
		private bool $coupDeCoeur;
		private $stock;
		private $description;
		
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
		
		public function isCoupDeCoeur()
		{
			return $this->coupDeCoeur;
		}
	}
?>