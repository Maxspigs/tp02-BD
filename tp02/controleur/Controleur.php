<!-- **********************************************************************

ÉTUDIANTS: Annie Legault, Jérémie Durand et Maxime Pigeon
Cours: 420-323-AL Application Web 2
Session: automne 2017

Description : Va aller chercher le modèle LibrairieModele
			pour obtenir la librairie. Ensuite, va l'utilisateur
			diriger vers le bon contrôleur particulier.


********************************************************************** -->
<?php 
	require_once("controleur/LibrairieControleur.php");
	require_once("modele/Modele.php");
	require_once("modele/LibrairieModele.php");

	class Controleur
	{
		
		function __construct(){ }

		public function dispatch(){
			// On va mettre l'attribut action dans le get pour dire qu'elle
			// action on veut exécuter
			// Si pas setter passe dans librairie automatiquement
			$action = (isset($_GET["action"]) ? $_GET["action"] : "");

			// On va toujours avoir le même modèle
			// qui représente la librairie
			$modele = new LibrairieModele();

			switch ($action) {

				// Affiche la page d'accueil ou la page détail
				// Voir LibrairieControleur
				case 'librairie':
				default:
					$controleur = new LibrairieControleur($modele);
					$controleur->dispatch();
					break;
			}
		}

	}

 ?>