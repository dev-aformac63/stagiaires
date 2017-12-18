<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="web/css/bootstrap.min.css" />
	<style type="text/css">
		table
		{
			width: 100%;
		}

		table tr th,td
		{
			border: 1px solid #ace;
			/*width: 25%;*/
		}

		btnAction
		{
			float:left;
			margin-left: 2px;
			margin-right: 2px;
		}

		.miniature
		{
			width:48px;
			height: 48px;
			border:1px solid #ddd;
		}
	</style>
</head>
<body>


<div class="container" style="width:60%;">
	<div style="text-align:center;">
		<img src="web/img/aformac2.png" style="width:128px;height:128px;" />
	</div>
	<a href="tuto1_form.php"><button id="btnAjouter" class="btn btn-primary">Ajouter</button></a>
	<table id="">
		<thead>
			<tr>
				<th>#</th>
				<th>Section</th>
				<th></th>
				<th>Actualité</th>
				<th>Date mise à jour</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$elems=getActualites();
				if($elems != NULL)
				{
					for($i=0;$i<count($elems);$i++)
					{
						?>
						<tr>
							<td>
								<?php echo $elems[$i]['id']; ?>
							</td>
							<td>
								<?php echo $elems[$i]['section']; ?>
							</td>
							<td>
								<?php
								if($elems[$i]['visuel'] != NULL)
								{
									?>
									<img class="miniature" src="assets/uploads/<?php echo $elems[$i]['visuel'];?>" />
								<?php
								}
								 ?>

							</td>
							<td>
								<h3><?php echo $elems[$i]['titre']; ?></h3>
								<?php echo $elems[$i]['texte']; ?>
							</td>
							<td>
								<?php echo $elems[$i]['date_crea']; ?>
							</td>
							<td>
								<a href="tuto1_form.php?id=<?php echo $elems[$i][0] ?>"><button id="" class="btn btn-primary btnAction">
									<i class="glyphicon glyphicon-pencil"></i>
								</button></a>
								<a href="tuto1_delete.php?id=<?php echo $elems[$i][0] ?>"><button id="" class="btn btn-primary btnAction">
									<i class="glyphicon glyphicon-remove"></i>
								</button></a>
							</td>
						</tr>
						<?php
					}
				}
				else
				{
					?>
					<tr>
						<td colspan="6"><i>aucune actualité disponible</i></td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
	<br/>
	<div>
		<br/>
		<br/>
		<?php
			$nbreDePages=getNombrePages();
			$page=(isset($_GET['page']))?$_GET['page']:1;
		 ?>
		<a href="tuto1_affiche.php?page=1"><button>Première page</button></a>
		<a href="tuto1_affiche.php?page=<?php echo ($page>1)?($page-1):1; ?>"><button>Page précédente</button></a>
		<a href="tuto1_affiche.php?page=<?php echo ($page<$nbreDePages)?($page+1):$page; ?>"><button>Page suivante</button></a>
		<a href="tuto1_affiche.php?page=<?php echo $nbreDePages; ?>"><button>Dernière page</button></a>

		<br/>
		<br/>
		<?php
			for($num=1;$num<=$nbreDePages;$num++)
			{
				?>
				<a href="tuto1_affiche.php?page=<?php echo $num; ?>"><button><?php echo $num; ?></button></a>
				<?php
			}
		?>

	</div>

</div>

<script type="text/javascript" src="web/js/jquery.min.js"></script>
<script type="text/javascript" src="web/js/bootstrap.min.js"></script>
</body>
</html>

<?php
/**
 *
 */
function getNombrePages()
{
	$nbre=10;

	$connexion=new PDO('mysql:host=localhost;dbname=aformac;port=3306;','aformac','aformac2017');
	$requete='SELECT COUNT(id) AS nb FROM tbl_actualites';
	$reponse=$connexion->query($requete);
	$resultats=$reponse->fetch();
	$nbre=$resultats['nb'];

	return intval($nbre/5);
}



/**
 *
 */
function getActualites()
{
	$connexion=new PDO('mysql:host=localhost;dbname=aformac;port=3306;','aformac','aformac2017');

	/*
	on récupère les 5 derniers éléments
	ORDER BY id => sert à trier les éléments par le champ id
	DESC => associé à ORDER BY indique que l'on veut trier par ordre décroissant
	(ASC => par ordre croissant)
	LIMIT debut,nombre => indique que l'on ne veut garder que [nombre] éléclass_implements
	à partir de la position [debut]
	*/
	//$requete="SELECT * FROM tbl_actualites ORDER BY id DESC LIMIT 0,5";

	/*
	on récupère les éléments par "pages" de 5 éléments.
	*/
	$debut=0;
	if(isset($_GET['page']))
	{
		$debut=5*($_GET['page']-1);
	}

	$requete="SELECT * FROM tbl_actualites ORDER BY id ASC LIMIT $debut,5";
	$reponse=$connexion->query($requete);
	$elems=$reponse->fetchAll();

	if($elems == NULL) return NULL;

	return $elems;
}

?>
