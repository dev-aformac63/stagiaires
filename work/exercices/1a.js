
var btn=document.querySelector('#btnOk');
var txt=document.querySelector('#txtMot');

btn.addEventListener("click",btnok_quandClick);

function btnok_quandClick(ev)
{
	var valeur=txt.value;
	//var verlan='';
	
	if( palindrome(valeur) )
	{
		alert("c'est un palimdrome");
	}
	else
	{
		alert("ce n'est pas un palimdrome");
	}
	

/*	for(var i=0;i<valeur.length;i++)
	{
		verlan=verlan+valeur[valeur.length-i-1];
	}
	
	console.log(verlan);

	if(valeur == verlan)
	{
		alert("bien joué");
	}
	else
	{
		alert("essaie encore");
	}*/
}

/*
function palindrome(valeur)
{
	var result=true;

	for(var i=0;i<valeur.length;i++)
	{
		var val1=valeur[i];
		var val2=valeur[valeur.length-i-1];

		console.log("val1 : "+val1+" -- val2 : "+val2);

		if(val1 != val2)
		{
			result=false;
			break;
		}
	}

	return result;
}
*/

function palindrome(valeur)
{
	for(var i=0;i<parseInt(valeur.length/2);i++)
	{
		var val1=valeur[i];
		var val2=valeur[valeur.length-i-1];

		console.log("val1 : "+val1+" -- val2 : "+val2);

		if(val1 != val2)
		{
			return false;
		}
	}

	return true;
}