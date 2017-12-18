
var unTableau2D=[];
var nbLignes=4;
var nbColonnes=3;
var btn=document.querySelector('#btn');
var txtCol=document.querySelector('#txtCol');
var txtLig=document.querySelector('#txtLig');

unTableau2D.push('a');
unTableau2D.push('b');
unTableau2D.push('c');
unTableau2D.push('d');
unTableau2D.push('e');
unTableau2D.push('f');
unTableau2D.push('g');
unTableau2D.push('h');
unTableau2D.push('i');
unTableau2D.push('j');
unTableau2D.push('k');
unTableau2D.push('l');

console.log(unTableau2D);

btn.addEventListener('click',btn_onClick);


function btn_onClick(ev)
{
/*	
	var ligne=parseInt(txtLig.value);
	var colonne=parseInt(txtCol.value);

	afficherCellule(ligne,colonne);
*/	

	for(var j=0;j<nbLignes;j++)
	{
		var tr=document.createElement('tr');
		for(var i=0;i<nbColonnes;i++)
		{
			console.log('ligne : '+j+' , colonne : '+i+' = '+unTableau2D[nbColonnes*j+i]);

			
			var td=document.createElement('td');
			var contenu=document.createTextNode(unTableau2D[nbColonnes*j+i]);

			td.appendChild(contenu);
			tr.appendChild(td);
		}
		
		tbl.appendChild(tr);
	}

	
}

function afficherCellule(ligne,colonne)
{
	alert(unTableau2D[nbColonnes*ligne+colonne]);
}