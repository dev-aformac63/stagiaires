<?php

if( isset($_POST['submit']) )
{
	$connexion=new pdo('mysql:host=localhost;dbname=aformac;port=3306;','aformac','aformac2017');

	if(isset($_POST['id']) && !empty($_POST['id']))
	{
		//uploader le fichier
		if(isset($_FILES))
		{
			$hname=uniqid();//hash_file('md5',$_FILES['txtFile']['tmp_name']);

			if(!move_uploaded_file($_FILES['txtFile']['tmp_name'],'./assets/upload/'.$hname))
			{
				$hname=NULL;
			}
		}

		$requete="UPDATE tbl_coincoin";
		$requete.=" SET titre = :titre";
		$requete.=",description = :description";
		$requete.=",nb_like = :nb_like";
		$requete.=",comment = :comment";
		if(isset($hname)) $requete.=",image = :image";
		$requete.=" WHERE id = :id";

		$stmt=$connexion->prepare($requete);
		$stmt->bindParam(':id',$_POST['id']);
		$stmt->bindParam(':titre',$_POST['txtTitre']);
		$stmt->bindParam(':description',$_POST['txtDescription']);
		$stmt->bindParam(':nb_like',$like);
		$stmt->bindParam(':comment',$comment);
		if(isset($hname)) $stmt->bindParam(':image',$hname);
		$stmt->execute();
	}
	else
	{
		//uploader le fichier
		if(isset($_FILES))
		{
			$hname=uniqid();//hash_file('md5',$_FILES['txtFile']['tmp_name']);

			if(!move_uploaded_file($_FILES['txtFile']['tmp_name'],'./assets/upload/'.$hname))
			{
				$hname=NULL;
			}
		}

			$now=Date('Y-m-d');//on déclare une variable représentant la date du jour

			//écrire la requête sql en indiquant les paramètres variables
			$requete="INSERT INTO tbl_coincoin";
			$requete.=" SET titre = :titre";
			$requete.=",description = :description";
			$requete.=",nb_like = :nb_like";
			$requete.=",comment = :comment";
			if(isset($hname))
			{
				$requete.=",image = :image";
			}

			//on crée un 'statement' afin de préparer la requête à être exécutée
			$stmt=$connexion->prepare($requete);


			//on associe tous les paramètres de cette requête avec les valeurs des champs du formulaire
			$stmt->bindParam(':titre',$_POST['txtTitre']);
			$stmt->bindParam(':description',$_POST['txtDescription']);
			$stmt->bindParam(':nb_like',$like);
			$stmt->bindParam(':comment',$comment);
			if(isset($hname))
			{ $stmt->bindParam(':image',$hname);
			}


			//exécuter la requête entièrement reconstituée
			$stmt->execute();

			//on récupère l'identifiant de l'élément inséré (NULL si erreur)
			$id=$connexion->lastInsertId('id');

			//on peut utiliser cet identifiant éventuellement dans un autre processus
	}

}

//une fois l'opération terminée, renvoyer vers une autre page (redirection)
header('Location: admin.php');
