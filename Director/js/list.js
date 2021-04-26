"use strict"


function ajax(){
	const search = document.getElementById('search').value;
	const xhttp	= new XMLHttpRequest();



	xhttp.open('POST', 'list.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('search='+search);

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('result').innerHTML = this.responseText;
		}
		
	}
}