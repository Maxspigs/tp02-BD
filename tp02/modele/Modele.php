<!-- **********************************************************************

ÉTUDIANTS: Annie Legault, Jérémie Durand et Maxime Pigeon
Cours: 420-323-AL Application Web 2
Session: automne 2017

Description : Contient une classe qui ne peut être instancié. Elle va
			être hérité dans tous les sous-modèles. Elle va les obliger
			à contenir certaines méthodes.

PAGE TERMINER

********************************************************************** -->
<?php 
	
	abstract class Modele
	{
		abstract public function getAll();
		abstract public function getById($id);
	}

?>