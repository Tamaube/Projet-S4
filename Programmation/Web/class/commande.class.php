<?php
	class Commande
	{
		private $id;
		private $client;
		private $produit;
		private $quantite;
		
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