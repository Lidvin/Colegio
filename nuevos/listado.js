function getGrado(){

	if (window.XMLHttpRequest){
		xmlhttp3 = new XMLHttpRequest();
	}else{
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp3.onreadystatechange=function(){
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
			document.getElementById("gradoList").innerHTML=xmlhttp3.responseText;
		}
	}
	xmlhttp3.open("GET","getGrado.php", true);
	xmlhttp3.send();
}


function getProf(id){

	if (window.XMLHttpRequest){
		xmlhttp3 = new XMLHttpRequest();
	}else{
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp3.onreadystatechange=function(){
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
			document.getElementById("profList").innerHTML=xmlhttp3.responseText;
		}
	}
	xmlhttp3.open("GET","getProf.php?id="+id, true);
	xmlhttp3.send();
}