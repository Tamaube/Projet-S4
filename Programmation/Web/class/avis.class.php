<?php
	class Avis
	{
		private $auteur;
		private $contenu;
		
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