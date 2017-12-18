<?php
require_once 'libs/vendor/autoload.php';
require_once 'libs/fonctions.php';

$elem=[];
if(isset($_GET['id']))
{
  $elem=getArticle($_GET['id']);
  if($elem == NULL) $elem=[];
}
echo renderTemplate('fiche_article.html.twig',$elem);

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
