	var cuenta = 0;
	var contara = localStorage.getItem("cuenta");
	var chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
	var firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
	var opera =  navigator.userAgent.toLowerCase().indexOf('opera');
	var IE = navigator.userAgent.indexOf("MSIE") > -1 ;


	 function navegador(){
		if (chrome) {
			return "Google Chrome";
		}else if (firefox) {
			return "Mozilla firefox";
		}else if (opera) {
			return "Opera";
		}else if (IE) {
			return "Internet Explorer";
		}else{
			return "Desconocido";
		}
	}
	function SO(){
		var navInfo = window.navigator.appVersion.toLowerCase();
		if(navInfo.indexOf("win") != -1)
		{
			return "Windows";
		}
		else if(navInfo.indexOf("linux") != -1)
		{
			return "Linux";
		}
		else if(navInfo.indexOf("mac") != -1)
		{
			return "Macintosh";
		}else{
			return "Desconocido";
		}
	}
	function objetoAjax(){
		var xmlhttp=false;
		try {
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {

		try {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		  xmlhttp = new XMLHttpRequest();
		}
		return xmlhttp;
	}

	//Función para recoger los datos del formulario y enviarlos por post
	function enviar(){

	  //recogemos los valores de los inputs
	  sistema = SO();
	  nav = navegador();

	  //instanciamos el objetoAjax
	  ajax=objetoAjax();

	  //uso del medotod POST
	  //archivo que realizará la operacion
	  //registro.php
	  ajax.open("POST", "php/contador.php",true);
	  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
	  ajax.onreadystatechange=function() {
		  //la función responseText tiene todos los datos pedidos al servidor
	  	if (ajax.readyState==4) {
	  		//mostrar resultados en esta capa
			divResultado.innerHTML = ajax.responseText
	  		//llamar a funcion para limpiar los inputs
			LimpiarCampos();
		}
	 }
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("so="+sistema+"&navegador="+nav)
	}


if(contara == null){
	alert("Ahora cuenta");
	cuenta = 1;
	localStorage.setItem("cuenta", cuenta);
	enviar();
}else{
	console.log("No cuenta");
	// enviar();
}
