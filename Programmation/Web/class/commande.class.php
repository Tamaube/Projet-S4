<?php
	class Commande
	{
		private $id;
		private $client;
		private $produit;
		private $quantite;
		
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
		
		public function addQuantite($nombre)
		{
			$this->quantite += $nombre;
		}
		
		public function setId($id)
		{
			$this->id = $id;
		}
		
		public function setClient($client)
		{
			$this->client = $client;
		}
		
		public function setProduit($produit)
		{
			$this->produit = $produit;
		}
		
		public function setQuantite($quantite)
		{
			$this->quantite = $quantite;
		}
		
		
		public function getId()
		{
			return $this->id;
		}
		
		public function getClient()
		{
			return $this->client;
		}
		
		public function getProduit()
		{
			return $this->produit;
		}
		
		public function getQuantite()
		{
			return $this->quantite;
		}
	}

?>