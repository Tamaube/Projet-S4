<?php
	class Avis
	{
		private $auteur;
		private $contenu;
		
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
		
		/*====== Definition setters =====*/
		public function setAuteur($auteur)
		{
			$this->auteur = $auteur;
		}
		
		public function setContenu($contenu)
		{
			$this->contenu = $contenu;
		}
		
		/*====== Definition getters =====*/
		public function getAuteur()
		{
			return $this->auteur;
		}
		
		public function getContenu()
		{
			return $this->contenu;
		}		
	}
?>