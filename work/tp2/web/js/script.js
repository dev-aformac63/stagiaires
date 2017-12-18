
var tbl=document.querySelector('#tbody');
var btn=document.querySelector('#btnAdd');

window.onload=function()
{
	

	tbl.addEventListener('click',tbody_onClick);
	btn.addEventListener('click', btnAdd_onClick);
	loadDatas();
}


function btnAdd_onClick(ev)
{
	
}

function tbody_onClick(ev)
{
	var target = ev.srcElement || ev.target;
	var row=[];

	if(target && target.nodeName === 'TD')
	{
		target=target.parentNode;

		for(var i=0;i<target.childNodes.length;i++)
		{
			row[i]=target.childNodes[i].innerText;
		}
		
		console.log(row);
		alert("affiche la ligne "+row[0]);
	}

	
}


/**
 *
 *
 */
function loadDatas()
{
	var xhr=new XMLHttpRequest();

	xhr.open('GET','assets/data/data1.json');
	xhr.onload=function()
	{
		if(xhr.status === 200)
		{
			//createTable()
			createTable(JSON.parse(xhr.responseText));
		}
	};
	xhr.send();
}



/**
 *
 *
 */
function createTable(dt)
{
	
	var lbl=document.querySelector('#lblNb');
	var tr;

	for(var i=0;i<dt.length;i++)
	{
		tr=createRow(dt[i]);
		tbl.appendChild(tr);

		tr=null;
	}

	lblNb.innerText=dt.length;
}

function createRow(row)
{
	var tr=document.createElement('tr');
	var td;
	var content;

	for(var col in row)
	{
		td=document.createElement('td');
		content=document.createTextNode(row[col]);
		
		td.appendChild(content);
		tr.appendChild(td);

		content=null;
		td=null;
	}

	td=document.createElement('td');
	tr.appendChild(td);

	return tr;
}

/**
 *
 *
 */
function refreshTable()
{

}
