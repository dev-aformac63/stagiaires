<?php

require_once 'libs/vendor/autoload.php';

echo '<h2>Tuto3 : récupération données d\'un formulaire avec upload de fichier</h2>';
echo '<br/>';

echo renderTemplate('tuto3a.html.twig',[]);

/**
 *
 */
function renderTemplate($tpl,$params)
{
	$loader=new Twig_Loader_Filesystem(dirname(__FILE__).'/templates/');
	$twig=new Twig_Environment($loader,array('cache'=>false));

	return $twig->render($tpl,$params);
}
