<?php
	class Categorie
	{
		private $id;
		private $nom;
		//private $sesSousCategories;
		
		/*============= Description setters ====================*/
		public function setId($id)
		{
			$this->id = $id;
		}
		
		public function setNom($nom)
		{
			$this->nom = $nom;
		}
		
		// public function setSesSousCategories($sesSousCategories)
		// {
			// $this->sesSousCategories = $sesSousCategories;
		// }
		
		/*============= Description getters ==============*/
		public function getId()
		{
			return $this->id;
		}
		
		public function getNom()
		{
			return $this->nom;
		}
		
		// public function getSesSousCategories()
		// {
			// return $this->sesSousCategories;
		// }
		
		
	}
?>