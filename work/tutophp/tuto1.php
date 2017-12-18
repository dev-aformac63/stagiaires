<?php
/*
ouverture de la balise PHP, tous ce qui est situé après cette balise est traité par le moteur PHP et interprété
*/
echo '<h2>tuto1</h2>';
echo '<p>';
echo 'Ce tuto se compose de plusieurs fichiers :<br/>';
echo '<ul>';
echo '<li><a href="tuto1_form.php" target="_blank">tuto1_form</a> : le formulaire de saisie d\'informations (ex : fil d\'actualités)</li>';
echo '<li>tuto1_script : le script php qui va traiter le formulaire et remplir la table sql</li>';
echo '<li><a href="tuto1_affiche.php" target="_blank">tuto1_affiche</a> : la page web qui va afficher le fil d\'actualités depuis la table sql</li>';
echo '</ul>';
echo '</p>';
echo '<br/><br/>';

/*
le bloc d'instructions PHP va se fermer lorsque cette balise est atteinte. Tout ce qui vient après est considéré comme de l'HTML,
jusqu'à rencontrer la fin du document ou une balise PHP ouvrante.
*/
?>

<!--
	ici, c'est de l'HTML
-->
<h2>Afficher du code HTML avec PHP</h2>
De base, il existe deux façons d'afficher du code HTML depuis du code PHP :<br/>
<br/>
<ul>
	<li>
		<p>Avec l'instruction <a href="http://php.net/manual/fr/function.echo.php" target="_blank"><i>echo</i></a> (voir ce code)<br/>
		Cette instruction permet à PHP d'afficher la chaîne de caractère passée en argument. Si cette chaîne contient des
		balises HTML, elles seront interprétées.<br/>
		<i>Attention! :</i> si la chaîne contient des apostrophes ou des guillemets, il faudra échapper ces caractères.<br/>
		<br/></p>
	</li>

	<li>
		<p>En alternant les blocs PHP et HTML :<br/>
			les balises &lt;?php et ?&gt; délimitent le code PHP qui sera interprété par le serveur web, tout ce qui est en dehors
			de ces balises est considéré comme de l'HTML et sera affiché tel quel (voir les pages tuto1_affiche.php et tuto1_form.php).<br/>
			Ainsi, en alternant les blocks en ouvrant et fermant les balises PHP, il est possible d'organiser l'affichage de son document.<br>
			Le principal défaut de cette méthode est qu'il est vite facile de se tromper et d'oublier une balise ouvrante ou fermante,
			le code risque alors d'être mal interprété et générer une erreur de syntaxe ou un défaut d'affichage.
		</p>
	</li>
</ul>

Il existe d'autres méthodes avec l'utilisation de bibliothèques tierces et la technologie des <a href="https://fr.wikipedia.org/wiki/Gabarit_(mise_en_page)" target="_blank">moteurs de templates</a>,
ce sera l'objet du prochain tutoriel <a href="tuto2.php" target="_blank">tuto2</a>.






