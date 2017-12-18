
var btn=document.querySelector('#btnOk');
var max=parseInt(31*Math.random(31)+10);
var N=parseInt(max*Math.random(max))+1;console.log(max);
var essais=0;
var span=document.querySelector('#txtMax');

span.innerText=max;

btn.addEventListener("click",btnok_quandClick);


function btnok_quandClick(ev)
{
	var nbre=document.querySelector('#txtNbre');
	var valeur=parseInt(nbre.value);

	essais++;

	if(valeur == N)
	{
		alert("gagné!\nNbre d'essais : "+essais);
	}
	else
	{
		if(valeur < N)
		{
			alert("plus grand");
		}
		else
		{
			alert("plus petit");
		}
	}

}
