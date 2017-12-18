<?php
require_once 'libs/vendor/autoload.php';
require_once 'libs/fonctions.php';


echo renderTemplate('fichiertemplate.html.twig',
[
  'titre'=>'Test avec twig',
  'nom'=>'Machin',
  'avatar'=>'img4.jpg'
]);
