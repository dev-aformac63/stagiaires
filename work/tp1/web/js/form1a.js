
var input=document.getElementsByTagName("input");
var div1=document.getElementById('txtCode');

console.log(input);

var btnCancel=document.getElementById("btnCancel");

/*
btnCancel.addEventListener("click",function(ev)
	{

	});
*/

btnCancel.addEventListener("click",btnCancel_quandClick);

function btnCancel_quandClick(ev)
{
/*	
	for(var i=0;i<input.length;i++)
	{
		input[i].style.backgroundColor="teal";
	}
*/


	var x=function(n)
	{
		var s=1;
		for(var i=1;i<=n;i++)
		{
			s=s*i;
		}
		console.log(n+"! = "+s);

		return s;		
	};

	console.log(x(5));

	function factorielle(n)
	{
		var s=1;
		for(var i=1;i<=n;i++)
		{
			s=s*i;
		}
		console.log("factorielle de "+n+" = "+s);

		return s;		
	};

	console.log(factorielle(5));
}

