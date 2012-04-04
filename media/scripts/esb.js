function add(name) {
	var count = parseInt(document.getElementsByName(name+'Count')[0].value)+1;
	
	//Line break
	var lineBreak=document.createElement("br");
	
	//Input box
	var input=document.createElement("input");
		//Type attribute of input
		var type=document.createAttribute('type');
		type.nodeValue = 'text';
		input.setAttributeNode(type);
		
		//ID attribute of input
		var id=document.createAttribute('name');
		id.nodeValue = name + count;
		input.setAttributeNode(id);
		
		//onBlur attribute of input
		/*var onBlur=document.createAttribute('onblur');
		onBlur.nodeValue = 'add(\'' + name+ '\')';
		input.setAttributeNode(onBlur);*/
		
	//Remove link
	var removelink = document.createElement("a");
		//Type attribute of the remove link
		var href=document.createAttribute('href');
		href.nodeValue = '#';
		removelink.setAttributeNode(href);
		
		//ID attribute of the remove button
		var id=document.createAttribute('id');
		id.nodeValue = 'remove' + name + count;
		removelink.setAttributeNode(id);
		
		//Style of the remove button
		var style=document.createAttribute('style');
		style.nodeValue = 'text-decoration:none;color:black;font-size:8pt;';
		removelink.setAttributeNode(style);
		
		//onClick attribute of the remove link
		var onClick=document.createAttribute('onclick');
		onClick.nodeValue = 'remove(\'' + name+ '\',' + count + ')';
		removelink.setAttributeNode(onClick);
		
		//Add the text to the remove link
		removelink.appendChild(document.createTextNode("[x]"));
	
	
	//A nested div just this input box / remove link
	var currentDiv = document.createElement("div");
		var id=document.createAttribute('id');
		id.nodeValue = 'div' + name + count;
		currentDiv.setAttributeNode(id);
		
		//currentDiv.appendChild(lineBreak);
		currentDiv.appendChild(input);
		currentDiv.appendChild(removelink);
		
	//Put the nested div in the big div
	document.getElementById(name+'s').appendChild(currentDiv);
	
	//Set the hidden count
	document.getElementsByName(name+'Count')[0].value = count;
}
function remove(name, id) {
	//<input type="button" id="removemap1" onClick="remove('map',1)" value="x">
	var count = parseInt(document.getElementsByName(name+'Count')[0].value);
	var toRemove = document.getElementById('div'+name+id);
	toRemove.parentNode.removeChild(toRemove);
	
	//Rename all elements with higher IDs
	for(var i=id+1;i<=count;i++) {
		document.getElementById('remove' + name + i).setAttribute('onClick','remove(\''+name+'\','+(i-1)+')');
		document.getElementsByName(name + i)[0].setAttribute('name',name + (i-1));
		document.getElementById('remove' + name + i).setAttribute('id', 'remove'+name + (i-1));
		document.getElementById('div' + name + i).setAttribute('id','div' + name + (i-1));
	}

	//Lower the hidden count
	document.getElementsByName(name+'Count')[0].value--;
}


