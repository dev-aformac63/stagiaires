<?php

if(isset($_GET['id']))
{
  $connexion=new pdo('mysql:host=localhost;dbname=aformac;port=3306;','aformac','aformac2017');
  $requete='DELETE FROM tbl_actualites WHERE id = :id';
  $stmt=$connexion->prepare($requete);
  $stmt->bindParam(':id',$_GET['id']);
  $stmt->execute();
}

header('Location: tuto1_affiche.php');
