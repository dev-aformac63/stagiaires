

var boutonAnnuler=document.getElementById("btnCancel");
var txtCode=document.getElementById("txtCode");
var txtDesignation=document.getElementById("txtDesignation");
var txtPrix=document.getElementById("txtPrix");
var txtQty=document.getElementById("txtQty");
var chk1=document.getElementById("chk1");


boutonAnnuler.addEventListener("click",function(ev)
{
	//window.close();
	if(!confirm("Acceptez-vous les conditions d'utilisations?"))
	{
		window.open("http://www.villardieres.com/");
	}


/*	if(chk1.checked)
	{
		alert("CGU acceptées");
		var total=parseFloat(txtPrix.value)*parseInt(txtQty.value);


		alert("code : "+txtCode.value+"\n"
			+"designation : "+txtDesignation.value+"\n"
			+"prix : "+txtPrix.value+"\n"
			+"quantité : "+txtQty.value+"\n"
			+"total : "+total);
	}
	else
	{
		alert("Veuillez accepter les CGU!");
	}*/
});

/*
boutonAnnuler.addEventListener("mousedown",function(ev)
	{
		boutonAnnuler.style.backgroundColor="red";
	});

boutonAnnuler.addEventListener("mouseup",function(ev)
	{
		boutonAnnuler.style.backgroundColor="";
	});
*/

var div1=document.getElementById("div1");

div1.addEventListener("mouseover",function(ev)
{
	div1.style.position = 'absolute';
	div1.style.top=parseInt(800*Math.random(800))+'px';
	div1.style.left = parseInt(400*Math.random(400))+'px';
});

/*boutonAnnuler.addEventListener("mouseover",function(ev)
{
	boutonAnnuler.style.position = 'absolute';
	boutonAnnuler.style.top=parseInt(800*Math.random(800))+'px';
	boutonAnnuler.style.left = parseInt(400*Math.random(400))+'px';
});*/


