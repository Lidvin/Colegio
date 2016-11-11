function validarDatos(){
	if ($("#cod").val()=="") {
		alert("Verifique datos");
		$("#cod").focus();
		return false;
	}
	if ($("#nom1").val()=="") {
		alert("Verifique datos");
		$("#nom1").focus();
		return false;
	}
	if ($("#nom2").val()=="") {
		alert("Verifique datos");
		$("#nom2").focus();
		return false;
	}
	if ($("#ape1").val()=="") {
		alert("Verifique datos");
		$("#ape1").focus();
		return false;
	}
	if ($("#ape2").val()=="") {
		alert("Verifique datos");
		$("#ape2").focus();
		return false;
	}
	if ($("#fol").val()=="") {
		alert("Verifique datos");
		$("#fol").focus();
		return false;
	}
	if ($("#lib").val()=="") {
		alert("Verifique datos");
		$("#lib").focus();
		return false;
	}
	if ($("#act").val()=="") {
		alert("Verifique datos");
		$("#act").focus();
		return false;
	}
	if ($("#dir").val()=="") {
		alert("Verifique datos");
		$("#dir").focus();
		return false;
	}
	if ($("#sex").val()=="") {
		alert("Verifique datos");
		$("#sex").focus();
		return false;
	}
	if ($("#est").val()=="") {
		alert("Verifique datos");
		$("#est").focus();
		return false;
	}
	if ($("#enc").val()=="") {
		alert("Verifique datos");
		$("#enc").focus();
		return false;
	}
	if ($("#dpi").val()=="") {
		alert("Verifique datos");
		$("#dpi").focus();
		return false;
	}
	if ($("#dep").val()=="") {
		alert("Verifique datos");
		$("#dep").focus();
		return false;
	}
	if ($("#gra").val()=="0") {
		alert("Verifique datos");
		$("#gra").focus();
		return false;
	}
	if ($("#prof").val()=="0") {
		alert("Verifique datos");
		$("#prof").focus();
		return false;
	}
	return true;
}