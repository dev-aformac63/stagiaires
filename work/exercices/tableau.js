
var btnPush=document.querySelector('#btnPush');
var btnShift=document.querySelector('#btnShift');
var btnPop=document.querySelector('#btnPop');
var btnUnshift=document.querySelector('#btnUnshift');
var btnClear=document.querySelector('#btnClear');
var txtValeurs=document.querySelector('#txtValeurs');
var txtNbre=document.querySelector('#txtNbre');

var unTableau=[];

var unTableau2D=[];

btnPush.addEventListener('click',btnPush_onClick);
btnShift.addEventListener('click',btnShift_onClick);
btnPop.addEventListener('click',btnPop_onClick);
btnUnshift.addEventListener('click',btnUnshift_onClick);
btnClear.addEventListener('click',btnClear_onClick);


function btnPush_onClick(ev)
{
	var valeur=txtNbre.value;

	unTableau.push(valeur);
	console.log(unTableau);

	rafraichirTextarea();
}

function btnUnshift_onClick(ev)
{
	var valeur=txtNbre.value;

	unTableau.unshift(valeur);
	console.log(unTableau);

	rafraichirTextarea();
}

function btnPop_onClick(ev)
{
	unTableau.pop();
	console.log(unTableau);

	rafraichirTextarea();
}

function btnShift_onClick(ev)
{
	unTableau.shift();
	console.log(unTableau);

	rafraichirTextarea();
}

function btnClear_onClick(ev)
{
	while(unTableau.length > 0) unTableau.pop();

	console.log(unTableau);

	rafraichirTextarea();
}


function rafraichirTextarea()
{
	txtValeurs.innerText='';

	for(var i=0;i<unTableau.length;i++)
	{
		var contenu=document.createTextNode(unTableau[i]+"\n");
		txtValeurs.appendChild(contenu);		
	}

	
}