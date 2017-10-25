<!-- **********************************************************************

ÉTUDIANTS: Annie Legault, Jérémie Durand et Maxime Pigeon
Cours: 420-323-AL Application Web 2
Session: automne 2017

Description : Contient la classe représentant un objet Tome.

PAGE TERMINER (peu possiblement être modifié)

********************************************************************** -->
<?php 
	/**
	* Classe qui représente un Tome.
	*/
	class Tome{
		private $numero;
		private $titre;
		private $nbPage;

	// Constructeur d'un tome. Argument = Numero, Titre, NbPage
		function __construct($numero,$titre,$nbPage)
		{
			$this->numero = $numero;
			$this->titre = $titre;
			$this->nbPage = $nbPage;
		}

	// Méthodes d'accès aux attributs
		public function getNumero() {
			return $this->numero;
		}

		public function getTitre() {
			return $this->titre;
		}

		public function getnbPage() {
			return $this->nbPage;
		}

	// Méthode d'affichage d'une instance
		public function __toString(){
			$string = $this->numero . "|" . $this->titre . "|" . $this->nbPage;
			return $string;
		}

	}
 ?>