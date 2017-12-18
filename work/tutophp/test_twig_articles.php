<?php
require_once 'libs/vendor/autoload.php';
require_once 'libs/fonctions.php';

echo renderTemplate('liste_articles.html.twig',['liste'=>getArticles()]);

/**
 *
 */
function getArticle($id)
{
  $connexion=new PDO('mysql:host=localhost;port=3306;dbname=aformac','aformac','aformac2017');

  $requete="SELECT * FROM tbl_actualites WHERE id = :id";
  $stmt=$connexion->prepare($requete);
  $stmt->bindParam(':id',$id);
  $stmt->execute();
  $resultat=$stmt->fetch();
  if($resultat == NULL) return NULL;

  return $resultat;
}

/**
 *
 */
function getArticles()
{
  $connexion=new PDO('mysql:host=localhost;port=3306;dbname=aformac','aformac','aformac2017');

  $requete="SELECT * FROM tbl_actualites";
  $stmt=$connexion->prepare($requete);
  $stmt->execute();
  $resultats=$stmt->fetchAll();
  if($resultats == NULL) return [];

  return $resultats;
}
