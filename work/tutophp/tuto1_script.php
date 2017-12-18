<?php



/*
if(isset($_FILES))
{
	$upload_dirs='./assets/uploads/';
	$tmp_name=$_FILES['txtFile']['tmp_name'];
	$p_name=$_FILES['txtFile']['name'];
	if(move_uploaded_file($tmp_name,$upload_dirs.$p_name))
	{
		echo 'OK';
	}
	else
	{
			echo 'KO';
	}
}
*/




/*
les informations envoyés depuis le formulaire sont contenues dans un tableau indexé
non pas par un entier mais par une clé qui est le nom du champ du formulaire (attribut 'name' de l'input)
*/

/*vérifier que le formulaire a été correctement posté, le bouton submit est alors posté comme n'importe
quel champ du formulaire (ne pas oublier de lui donner la valeur 'submit' à l'attribut 'name')
*/

if( isset($_POST['submit']) )
{
	//le formulaire a bien été envoyé, traiter les infos

	$connexion=new pdo('mysql:host=localhost;dbname=aformac;port=3306;','aformac','aformac2017');

	if(isset($_POST['id']) && !empty($_POST['id']))
	{
		$requete="UPDATE tbl_actualites";
		$requete.=" SET titre = :titre";
		$requete.=",texte = :texte";
		$requete.=",section = :section";
		$requete.=" WHERE id = :id";

		$stmt=$connexion->prepare($requete);
		$stmt->bindParam(':id',$_POST['id']);
		$stmt->bindParam(':titre',$_POST['txtSubject']);
		$stmt->bindParam(':section',$_POST['txtSection']);
		$stmt->bindParam(':texte',$_POST['txtContent']);

		$stmt->execute();
	}
	else
	{
		//uploader le fichier
		if(isset($_FILES))
		{
			$hname=uniqid();//hash_file('md5',$_FILES['txtFile']['tmp_name']);
			if(!move_uploaded_file($_FILES['txtFile']['tmp_name'],'./assets/uploads/'.$hname))
			{
				$hname=NULL;
			}
		}

			$now=Date('Y-m-d');//on déclare une variable représentant la date du jour

			//écrire la requête sql en indiquant les paramètres variables
			$requete="INSERT INTO tbl_actualites";
			$requete.=" SET section = :section";
			$requete.=",titre = :titre";
			$requete.=",texte = :texte";
			$requete.=",date_crea = :now";
			if(isset($hname)) $requete.=",visuel = :visuel";

			//on crée un 'statement' afin de préparer la requête à être exécutée
			$stmt=$connexion->prepare($requete);

			//on associe tous les paramètres de cette requête avec les valeurs des champs du formulaire
			$stmt->bindParam(':section',$_POST['txtSection']);
			$stmt->bindParam(':titre',$_POST['txtSubject']);
			$stmt->bindParam(':texte',$_POST['txtContent']);
			$stmt->bindParam(':now',$now);
			if(isset($hname)) $stmt->bindParam(':visuel',$hname);

			//exécuter la requête entièrement reconstituée
			$stmt->execute();

			//on récupère l'identifiant de l'élément inséré (NULL si erreur)
			$id=$connexion->lastInsertId('id');

			//on peut utiliser cet identifiant éventuellement dans un autre processus
	}

}

//une fois l'opération terminée, renvoyer vers une autre page (redirection)
header('Location: tuto1_affiche.php');
