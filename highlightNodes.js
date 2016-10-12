
window.onload = function(){
	var elmnt = document.getElementsByTagName("*");
	
		
	for (var i=0; i<elmnt.length; i++){
		if (elmnt[i].type != 3)
		{
		elmnt[i].addEventListener('click',showTag);
		}
		function showTag(){
			alert(this.tagName);
		}
	}	
}

