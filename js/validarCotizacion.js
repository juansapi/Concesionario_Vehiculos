//funcion para validar los usuarios del registro
function validar() {
//funcion para almacenar los datos que se ingresan
	var autos,cedula, nombre, apellidos, email, celular,ciudad, observaciones, expresion;
//guardamos el valor del elemento nombrado 
    autos = document.getElementById("autos").value;
	cedula = document.getElementById("cedula").value;
	nombre = document.getElementById("nombre").value;
	apellidos = document.getElementById("apellidos").value;
	email = document.getElementById("email").value;
	celular = document.getElementById("celular").value;
	ciudad = document.getElementById("ciudad").value;
	observaciones = document.getElementById("observaciones").value;
//variable expresion regulares	
	expresion = /\w+@\w+\.+[a-z]/;
//funcion que nos dice si los campos estan vacios 
	if(autos === "" || cedula === "" || nombre === "" || apellidos === "" || email === "" || celular === "" || ciudad === observaciones === ""){
		alert("Todos los campos son Obligatorios");
		return false;
	}
	else if (autos.length>100){
		alert("el nombre de autos es muy largo");
		return false;
	}
	else if (cedula.length>30){
		alert("la cedula es muy larga");
		return false;
	}
	else if (isNaN(cedula)){
		alert("la cedula ingresada no es un numero");
		return false;
	}
	else if (nombre.length>30){
		alert("el nombre es muy largo");
		return false;
	}
	else if (apellidos.length>30){
		alert("los apellidos son muy largos");
		return false;
	}
	else if (email.length>50){
		alert("el email es muy largo");
		return false;
	}
	else if (!expresion.test(email)){
		alert("el email no es valido");
		return false;
	}
	else if (celular.length>20){
		alert("el numero de cedular es muy larga");
		return false;
	}
	else if (isNaN(celular)){
		alert("el telefono ingresado no es un numero");
		return false;
	}
	
	else if (ciudad.length>20){
		alert("la ciudad es muy larga");
		return false;
	}
	else if (observaciones.length>200){
		alert("las observaciones superan el limite de letras");
		return false;
	}
	
}
