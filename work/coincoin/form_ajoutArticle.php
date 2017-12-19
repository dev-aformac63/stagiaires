<?php
/**
*listes des require
*/
require_once 'libs/vendor/autoload.php';
require_once 'libs/fonctions.php';

/**
*appel du template twig
*/
if(isset($_GET['id']))
{
  echo renderTemplate('ajoutCoincoin.html.twig',['element'=>getArticle($_GET['id'])]);
}
else
{
  echo renderTemplate('ajoutCoincoin.html.twig',['element'=>NULL]);
}
