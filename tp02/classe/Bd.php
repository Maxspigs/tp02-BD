<!-- **********************************************************************

ÉTUDIANTS: Annie Legault, Jérémie Durand et Maxime Pigeon
Cours: 420-323-AL Application Web 2
Session: automne 2017

Description : Contient la classe qui représente un objet de 
			type bande déssinée

PAGE TERMINER (peu possiblement être modifié)


********************************************************************** -->
<?php
	/**
	 * Classe représentant une bande dessinée.
	 */
	class Bd{
		
		private $titre;
		private $auteur;
		private $img;
		private $lienWeb;
		private $listeTomes;

	// Constructeur d'une Bd. Arguments = titre, auteur, img, lien
		public function __construct($titre, $auteur, $img, $lien){
			$this->titre = $titre;
			$this->auteur = $auteur;
			$this->img = $img;
			$this->lien = $lien;
			$this->listeTomes = array();
		}

	// Méthodes d'accès aux attributs
		public function getTitre() {
			return $this->titre;
		}

		public function getAuteur() {
			return $this->auteur;
		}

		public function getImg(){
			return $this->img;
		}

		public function getLienWeb() {
			return $this->lienWeb;
		}

		public function getListeTomes(){
			return $this->listeTomes;
		}

	// Méthode d'affichage d'une instance
		public function __toString(){
			return $this->titre."|".$this->auteur."|".$this->img."|".$this->lien;
		}

	// Méthode extra
		public function addTome($tome){
			$this->listeTomes[count($this->listeTomes)] = $tome;
		}
	}
?>