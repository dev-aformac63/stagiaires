<?php

//commentaire ligne

/*
commentaire bloc :
sur plusieurs lignes
....
...
*/

//déclaration sans initialisation
$xyz;

//déclaration et initialisation d'une variable
$abc='Azerty';//variable de type chaine
$index=12;//variable de type numérique (entier)
$prix=5.45;//variable de type numérique (réel)
$tab=[];//variable de type tableau vide
$liste=['Simon','Sébastien','Guillaume','Hortense','Carinne','Léa'];//variable de type tableau initialisé

echo 'le prix : '.$prix.' -- index : '.$index.'<br/>';
var_dump($liste);//affiche le contenu d'une variable à titre de débugage

/*
afficher un élément du tableau à l'indice donné.
attention! l'indice du tableau commence à 0
le premier élément est à l'indice 0
le deuxième élément est à l'indice 1
etc...
*/
echo 'le 3ème élément de la liste : '.$liste[2].'<br/>';
echo 'le tableau contient '.count($liste).' éléments.';//récupérer le nombre d'éléments d'un tableau


echo '<br/><br/><br/>';
echo 'contenu de la variable = $abc<br/>';
echo "contenu de la variable = $abc<br/>";

echo 'avec des doubles quotes "<br/>';
echo 'avec une simple quote \'<br/>';

/*
incrémentation :
$variable++ équivaut à $variable = $variable+1
$variable+=2 équivaut à $variable = $variable+2
$variable+=N équivaut à $variable = $variable+N

décrémentation :
$variable-- équivaut à $variable = $variable-1
$variable-=2 équivaut à $variable = $variable-2
$variable-=N équivaut à $variable = $variable-N


$variable*=2 équivaut à $variable = $variable*2
$variable/=2 équivaut à $variable = $variable/2
*/


//compter de 0 à 9 avec une boucle for
/*
syntaxe :  for( $variable=valeurDébut ; $variable<valeurFin; $variable++)
*/
echo 'compter de 0 à 9 avec une boucle for<br/>';
for( $compteur=0; $compteur<10; $compteur++)
{
	echo 'i : '.$compteur.'<br/>';
}
echo '<br/>-------------------------<br/>';

$fin=false;
$i=0;

//compter de 0 à 9 avec une boucle while
/*
syntaxte :  while(condition)
*/
echo 'compter de 0 à 9 avec une boucle while<br/>';
while(!$fin)
{
	echo 'i : '.$i.'<br/>';
	$i++;

	if($i==10)
	{
		$fin=true;
	}
}
echo '<br/>-------------------------<br/>';


echo 'compter de 0 à 9 avec une boucle while avec un break<br/>';
$i=0;
while(true)
{
	echo 'i : '.$i.'<br/>';
	$i++;

	if($i==10)
	{
		break;
	}
}
echo '<br/>-------------------------<br/>';
echo '<br/>-------------------------<br/>';
echo '<br/>-------------------------<br/>';
echo 'afficher un message personnalisé pour chaque prénom :<br/>';
//parcours d'un tableau avec un for
for( $i=0; $i<count($liste); $i++)
{
	echo 'prénom : '.$liste[$i].'<br/>';

/*
	if($liste[$i] == 'Simon')
	{
		echo 'Clint<br/>';
	}

	if($liste[$i] == 'Sébastien')
	{
		echo 'Baloo<br/>';
	}	

	if($liste[$i] == 'Guillaume')
	{
		echo 'Euron<br/>';
	}

	if($liste[$i] == 'Hortense')
	{
		echo 'Tourte chaude<br/>';
	}

	if($liste[$i] == 'Carinne')
	{
		echo 'Dragonne<br/>';
	}

	if($liste[$i] == 'Léa')
	{
		echo 'Couette<br/>';
	}
*/	

	switch($liste[$i])
	{
		case 'Simon':
			echo 'Clint<br/>';
			break;

		case 'Sébastien':
			echo 'Baloo<br/>';
			break;

		case 'Guillaume':
			echo 'Euron<br/>';
			break;

		case 'Hortense':
			echo 'Tourte chaude<br/>';
			break;

		case 'Carinne':
			echo 'Dragonne<br/>';
			break;

		case 'Léa':
			echo 'Couette<br/>';
			break;
																		
	}		
}
echo '<br/>-------------------------<br/>';
echo '<br/>-------------------------<br/>';
echo '<br/>-------------------------<br/>';


uneFonction();
echo '<br/>';
echo '<br/>';

uneDeuxiemeFonction('azerty','qwerty');
echo '<br/>';
echo '<br/>';

echo uneTroisiemeFonction();
echo '<br/>';
echo '<br/>';

echo uneQuatriemeFonction(12,7);
echo '<br/>';
echo '<br/>';

echo addition(12,7);
echo '<br/>';
echo '<br/>';


echo division(14,0);
echo '<br/>';
echo '<br/>';

echo 'fin du script<br/>';

echo '<div style="width:300px;height:200px;border:2px solid #000;text-align:center;">';
echo '<h3>titre</h3>';
echo '<p>Ceci est du texte...</p>';
echo '<button type="button">Ok</button>';
echo '</div>';
echo '<br/>';

/*
déclaration d'une fonction sans paramètre d'entrée qui ne renvoie rien
syntaxe : function mondelafonction()
		  {
		   //traitements
		  }
*/
function uneFonction()
{
	echo 'corps de la fonction uneFonction()<br/>';
}

/*
déclaration d'une fonction avec paramètres d'entrée qui ne renvoie rien
syntaxe : function mondelafonction($param1,$param2,...,$paramN)
		  {
		   //traitements
		  }
*/
function uneDeuxiemeFonction($param1,$param2)
{
	echo 'corps de la fonction uneDeuxiemeFonction() param1 : '.$param1.' -- param2 : '.$param2.'<br/>';
}

/*
déclaration d'une fonction sans paramètres d'entrée qui renvoie un résultat
syntaxe : function mondelafonction()
		  {
		   //traitements
	       return $resultat;
		  }
*/
function uneTroisiemeFonction()
{
	echo 'corps de la fonction uneTroisiemeFonction()<br/>';

	return 12.5;
}

/*
déclaration d'une fonction avec paramètres d'entrée qui renvoie un résultat
syntaxe : function mondelafonction($param1,$param2,...,$paramN)
		  {
		   //traitements
		   return resultat
		  }
*/
function uneQuatriemeFonction($param1,$param2)
{
	echo 'corps de la fonction uneQuatriemeFonction() param1 : '.$param1.' -- param2 : '.$param2.'<br/>';

	return 'resultat_de_la_fonction : '.$param1.' et '.$param2;
}


function addition($nbre1,$nbre2)
{
	return $nbre1+$nbre2;
}


function division($nbre1,$nbre2)
{
	if($nbre2 == 0) return 'division par 0';
	return $nbre1/$nbre2;
}


