//funcion para validar los usuarios del registro
function validar() {
//funcion para almacenar los datos que se ingresan
	var cedula, nombre, respuesta, puntos, observaciones;
//guardamos el valor del elemento nombrado 
	cedula = document.getElementById("cedula").value;
	nombre = document.getElementById("nombre").value;
	respuesta = document.getElementById("respuesta").value;
	puntos = document.getElementById("puntos").value;
	observaciones = document.getElementById("observaciones").value;

//funcion que nos dice si los campos estan vacios 
	if( cedula === "" || nombre === "" || respuesta === "" || puntos === "" || observaciones === "" ){
		alert("Todos los campos son Obligatorios");
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
	
	else if (respuesta.length>10){
		alert("la respuesta es muy larga");
		return false;
	}
	
	else if (puntos.length>10){
		alert("los numeros son muy largos");
		return false;
	}
	
	else if (observaciones.length>100){
		alert("la observaciones son muy largas");
		return false;
	
}
