
window.onload = function(){
	var elmnt = document.getElementsByTagName("*");
	
		
	for (var i=0; i<elmnt.length; i++){
		if (elmnt[i].type != 3)
		{
		//elmnt.onclick = alert(elmnt.tagName);
		//console.log(elmnt[i]);
		//elmnt[i].onclick = alert(elmnt[i].tagName);
		elmnt[i].addEventListener('click',showTag);
		}
		function showTag(){
			alert(this.tagName);
		}
	}	
}

