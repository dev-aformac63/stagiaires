<?php

require_once 'libs/vendor/autoload.php';
require_once 'libs/fonctions.php';

if(isset($_GET['id']))
{
  $connexion=new pdo('mysql:host=localhost;dbname=aformac;port=3306;','aformac','aformac2017');
  $requete='DELETE FROM tbl_coincoin WHERE id = :id';
  $stmt=$connexion->prepare($requete);
  $stmt->bindParam(':id',$_GET['id']);
  $stmt->execute();
}

header('Location: admin.php');
