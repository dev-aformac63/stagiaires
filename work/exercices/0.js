

addEventListener('click',document_onClick);


function document_onClick(ev)
{
	console.log('position : '+ev.clientX+' , '+ev.clientY);

	var div=document.createElement('div');

	var s='position:absolute;width:100px;height:100px;top:'+(ev.clientY-50)+'px;left:'+(ev.clientX-50)+'px;border:2px solid #000;border-radius:50px;';
	console.log(s);

	div.setAttribute('style',s);

	document.body.appendChild(div);
}