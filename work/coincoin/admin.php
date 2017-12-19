<?php
/**
*listes des require
*/
require_once 'libs/vendor/autoload.php';
require_once 'libs/fonctions.php';

/**
*appel du template twig
*/
echo renderTemplate('coincoinAdmin.html.twig',['liste'=>getArticles()]);
