$(document).ready(function () {  
	console.log("It's data you dummy!");
});


function getFormData(){
	const form = document.forms["dummyData"];
	const formData = new FormData(form);
	
	for (const [key, value] of formData){
		console.log(' ', key, ': ', value, '\n');
	}

}