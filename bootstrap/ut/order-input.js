function getCompValues(){
	let cName = document.getElementById("comp_name").value;
	let cDesc = document.getElementById("comp_desc").value;
	let mod1Name = document.getElementById("mod1-name").value;
	let mod2Name = document.getElementById("mod2-name").value;
	let mod3Name = document.getElementById("mod3-name").value;	
	let newComp = new component(cName, cDesc);
	newComp.addMod(mod1Name);
	newComp.addMod(mod2Name);
	newComp.addMod(mod3Name);
	
	components.push(newComp);
	
	populateComponents();
	
	setOrderComponents();
	
	document.getElementById("comp_name").value = '';
	document.getElementById("comp_desc").value = '';
	document.getElementById("mod1-name").value = '';
	document.getElementById("mod2-name").value = '';
	document.getElementById("mod3-name").value = '';	
}


function addOrder(){
	
}

var testList = ['1', '2', '3', '4', '5', '6'];

function setOrderComponents(){
	$('.orderComps').each(function(){
		var ords = $(this)[0];	
		for(var i=0; i<components.length; i++){ 
			let opt = components[i].name;
			let el = document.createElement('option');
			el.textContent = opt;
			el.value = opt;
			ords.appendChild(el);
		}
	});
}

