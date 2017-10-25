<!-- **********************************************************************

ÉTUDIANTS: Annie Legault, Jérémie Durand et Maxime Pigeon
Cours: 420-323-AL Application Web 2
Session: automne 2017

Description : Contient la classe qui créer la librairie (tableau) avec les
		différentes BD qui contiennent elles-même une liste (tableau) des tomes.
		Modèle pour la page d'accueil.

PAGE TERMINER

********************************************************************** -->
<?php
	require_once("classe/Bd.php");
	require_once("classe/Tome.php");
	
	class LibrairieModele extends Modele
	{
		const CHEMIN_FICHIER = "donnees/listeBD.txt";
		private $librairie;
		
		function __construct()
		{			
			$this->librairie = array();

			// Va chercher tout le contenu du fichier "listeBD.txt"
			$contenuFichier = file_get_contents(self::CHEMIN_FICHIER);
			// Va diviser le contenu dans un tableau 
			//chaque entrée du tableau va être une ligne du fichier
			$tmp = explode("\n", $contenuFichier);

			// garde en mémoire le titre de la dernier bd ajouter à la librairie
			$bdTitre;
			// Parcours le tableau $tmp
			foreach ($tmp as $value) {
				// Va diviser chaque élément du tableau en sous-tableau
				// $line va être un tableau qui contient chaque information
				// de la ligne du fichier "listeBD.txt"
				$line = explode("|", $value);
				
				// Vérifie si c'est un tome
				// Premier élément de le ligne est un nombre au lieu d'une chaîne
				if (ctype_digit($line[0])) {
					$tome = new Tome($line[0], $line[1], $line[2]);
					// Ajoute le tome à la Bd
					$bd = $this->getById($bdTitre);
					$bd->addTome($tome);
				}
				// N'est pas un tome 
				//alors est une Bd
				else {
					$bd = new Bd($line[0], $line[1], $line[2], $line[3]);
					$bdTitre = $bd->getTitre();
					// Ajoute la bd à la fin de la librairie
					$this->librairie[$bdTitre] = $bd;
				}
			}
		}

		public function getAll(){
			return $this->librairie;
		}

		public function getById($id){
			return (array_key_exists($id, $this->librairie) ? $this->librairie[$id] : null);
		}
	}

?>