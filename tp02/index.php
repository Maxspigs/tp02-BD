<!-- **********************************************************************

ÉTUDIANTS: Annie Legault, Jérémie Durand et Maxime Pigeon
Cours: 420-323-AL Application Web 2
Session: automne 2017

Description : Page qui est ouverte en premier par l'utilisateur.
			Elle le redirige vers le contrôleur frontal.

PAGE TERMINER

********************************************************************** -->
<?php 
	require_once("controleur/Controleur.php");
	$controleur = new Controleur();
	$controleur->dispatch();
 ?>