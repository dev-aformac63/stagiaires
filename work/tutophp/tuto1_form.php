<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="web/css/bootstrap.min.css" />

	<style type="text/css">
		.clSlot
		{

		}

		.clSlot input
		{
				display: none;
		}

		.clSlotInner
		{
			width:128px;
			height: 128px;
			margin:0 auto;
			border:4px dashed #ace;
			text-align: center;
			cursor:pointer;
		}

		.clSlotInner:hover
		{
				border-color:yellow;
		}

		.clSlotInner::before
		{
			content:"\e046";
			font-family: "Glyphicons Halflings";
			font-size: 5em;
			color:#ace;
		}

		.clSlotInner:hover::before
		{
			color:yellow;
		}

		.visuel
		{
			width:50%;
		}

		.visuelSlot
		{
			text-align: center;
		}

		#img-upload-slot
		{
				text-align: center;
		}

		#img-upload
		{
			width:50%;
			border:1px solid #000;
		}
	</style>
</head>
<body>
<div class="container" style="width:60%;">
	<div style="text-align:center;">
		<img src="web/img/aformac2.png" style="width:128px;height:128px;" />
	</div>

	<?php

		$elem=getActualite();
	?>

	<form method="POST" action="tuto1_script.php" enctype="multipart/form-data">
		<input type="hidden" id="id" name="id" value="<?php echo $elem['id']?>"/>
		<div class="form-group">
			<label for="txtSection">Section :<?php echo $elem['section']; ?></label>
			<select class="form-control" id="txtSection" name="txtSection">
		    	<option <?php echo ($elem['section']=='section abcd')?'selected':''; ?> >section abcd</option>
		    	<option <?php echo ($elem['section']=='section efgh')?'selected':''; ?> >section efgh</option>
		    	<option <?php echo ($elem['section']=='section ijkl')?'selected':''; ?> >section ijkl</option>
		    	<option <?php echo ($elem['section']=='section mnop')?'selected':''; ?> >section mnop</option>
			</select>
		</div>

		<div class="form-group">
			<label for="txtSubject">Titre :</label>
			<input type="text" class="form-control" id="txtSubject" name="txtSubject" value="<?php echo $elem['titre'];?>">
		</div>

		<div class="form-group">
			<label for="txtContent">Contenu :</label>
			<textarea class="form-control" id="txtContent" name="txtContent" cols="25" rows="10"><?php echo $elem['texte'];?></textarea>
		</div>

		<?php
		if(!isset($_GET['id']))
		{
		 ?>
		<div class="form-group">
			<div id="img-upload-slot">
				<img id="img-upload"/>
			</div>

			<div class="clSlot" id="btn1">
				<div class="clSlotInner">
				</div>
				<input type="file" id="txtFile" name="txtFile" />
			</div>
		</div>
		<?php
		}
		else
		{

			if($elem['visuel'] != NULL)
			{
				?>
				<div class="form-group">
					<div class="visuelSlot">
						<img class="visuel" src="assets/uploads/<?php echo $elem['visuel']; ?>"/>
					</div>
				</div>
				<?php
			}

		}
		 ?>

		<?php
		if(isset($_GET['id']))
		{
			?>
		<div>
			Article créé le <?php echo (new DateTime($elem['date_crea']))->format('d/m/Y'); ?>
		</div>
		<?php
		}
		 ?>
		<button type="submit" class="btn btn-primary" id="submit" name="submit">Envoyer</button>
		<button type="submit" class="btn btn-primary" id="cancel" name="cancel">Annuler</button>

	</form>
</div>

<script type="text/javascript" src="web/js/jquery.min.js"></script>
<script type="text/javascript" src="web/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function()
{
	$('#btn1').on('click',function(ev)
	{
		$('#txtFile').click();
	});

	$('#txtFile').on('click',function(ev)
	{
		ev.stopPropagation();
	});

	$('#txtFile').on('change',function(ev)
	{
		readURL(this);
	});

	function readURL(input)
	{
	    if (input.files && input.files[0])
	    {
	        var reader = new FileReader();

	        reader.onload = function (e)
	        {
	            $('#img-upload').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
});

</script>
</body>
</html>

<?php

/**
 *
 */
function getActualite()
{
	if(!isset($_GET['id'])) return NULL;

	$connexion=new PDO('mysql:host=localhost;dbname=aformac;port=3306;','aformac','aformac2017');
	$requete="SELECT * FROM tbl_actualites WHERE id = :id";
	$stmt=$connexion->prepare($requete);
	$stmt->bindParam(':id',$_GET['id']);
	$stmt->execute();
	$elem=$stmt->fetch();
	if($elem == NULL) return NULL;

	return $elem;
}
 ?>
