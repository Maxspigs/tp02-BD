<!-- **********************************************************************

ÉTUDIANTS: Annie Legault, Jérémie Durand et Maxime Pigeon
Cours: 420-323-AL Application Web 2
Session: automne 2017

Description : Après avoir obtenu le modèle désiré, va diriger
		l'utilisateur vers la page désiré. Soit la page d'accueil
		ou la page qui affiche les détails d'une certaine Bd.


********************************************************************** -->
<?php 

	class LibrairieControleur extends Controleur
	{
		private $modele;

		function __construct($modele)
		{
			$this->modele = $modele;
		}

		public function dispatch(){
			// On va mettre l'attribut "page" dans le get pour savoir
			// qu'elle page l'on veut afficher
			// Si non set, affiche la page d'accueil
			$page = (isset($_GET["page"]) ? $_GET["page"] : "");

			switch ($page) {
				// Affiche les détails d'une seule bande dessinée
				// Doit passer l'attribut "bd" dans le get 
				// correspond à l'id de la bd dont on veut les détails
				case 'detail':
					$librairie = $this->modele->getById($_GET["bd"]);
					break;
				
				// Affiche la page d'accueil avec toute la librairie
				case 'accueil':
				default:
					$librairie = $this->modele->getAll();
					break;
			}
		}
	}

?>