<?php

/*
charger les librairies/codes tiers utilisés par ce code php.
ce script php est un chargeur de code, il va récupérer les blocs de codes qui seront utilisés.
*/
require_once 'libs/vendor/autoload.php';

echo renderTemplate('tuto2.html.twig',[]);

/**
 *
 */
function renderTemplate($tpl,$params)
{
	/*
	initialiser le type de chargeur à utiliser, ici le charger de fichiers.
	indiquer en paramètre, le répertoire où sont stockés les templates (gabarits)
	*/
	$loader=new Twig_Loader_Filesystem(dirname(__FILE__).'/templates/');

	/*
	initialiser l'environnement d'exécution de twig
	*/
	$twig=new Twig_Environment($loader,array('cache'=>false));

	/*
	afficher le code html généré par le moteur twig
	*/
	return $twig->render($tpl,$params);
}
