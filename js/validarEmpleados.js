//funcion para validar los usuarios del registro
function validar() {
//funcion para almacenar los datos que se ingresan
	var cargo,cedula, nombre, apellidos, email, celular, direccion, ciudad, edad, peso, expresion;
//guardamos el valor del elemento nombrado 
    cargo = document.getElementById("cargo").value;
	cedula = document.getElementById("cedula").value;
	nombre = document.getElementById("nombre").value;
	apellidos = document.getElementById("apellidos").value;
	email = document.getElementById("email").value;
	celular = document.getElementById("celular").value;
	direccion = document.getElementById("direccion").value;
	ciudad = document.getElementById("ciudad").value;
	edad = document.getElementById("edad").value;
	peso = document.getElementById("peso").value;
//variable expresion regulares	
	expresion = /\w+@\w+\.+[a-z]/;
//funcion que nos dice si los campos estan vacios 
	if(cargo ==="" || cedula === "" || nombre === "" || apellidos === "" || email === "" || celular === "" || direccion === "" || ciudad === "" || edad === "" || clave === "" || peso === ""){
		alert("Todos los campos son Obligatorios");
		return false;
	}
	else if (cargo.length>30){
		alert("el nombre del cargo es muy largo");
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
	else if (direccion.length>50){
		alert("la direccion es muy larga");
		return false;
	}
	else if (ciudad.length>20){
		alert("la ciudad es muy larga");
		return false;
	}
	else if (edad.length>50){
		alert("la edad es muy larga");
		return false;
	}
	else if (peso.length>10){
		alert("el peso es muy largo");
		return false;
	}
}
