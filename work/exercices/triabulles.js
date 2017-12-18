
var btnAdd=document.querySelector('#btnAdd');
var btnSort=document.querySelector('#btnSort');
var txt=document.querySelector('#txtNbre');
var tbl=document.querySelector('#tbl');
var tableauDesValeurs=[];
//var unAutreTableau=new Array();


btnAdd.addEventListener('click',btnAdd_onClick);
btnSort.addEventListener('click',btnSort_onClick);

function btnAdd_onClick(ev)
{
	var valeur=parseInt(txt.value);
	var ligne=document.createElement('tr');
	var colonne=document.createElement('td');
	var contenu=document.createTextNode(valeur);

	colonne.appendChild(contenu);
	ligne.appendChild(colonne);

	tbl.appendChild(ligne);

	txtNbre.value='';
	txtNbre.focus();

	tableauDesValeurs.push(valeur);
}

function btnSort_onClick(ev)
{
	alert(tri(tableauDesValeurs));
}

function tri(unTableau)
{
	var leTableauEstTrie=false;

	while(!leTableauEstTrie)
	{
		leTableauEstTrie=true;

		for(var i=0;i<unTableau.length-1;i++)
		{
			if(unTableau[i] > unTableau[i+1])
			{
				var temp=unTableau[i+1];
				unTableau[i+1]=unTableau[i];
				unTableau[i]=temp;

				leTableauEstTrie=false;
			}
		}
	}

	return unTableau;
}

