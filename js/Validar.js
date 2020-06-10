$( document ).ready(function(){
 
    //valida el boton para generar las acciones del evento
	$("#btnAceptar").click(function(){
	
	   //obtiene la informacion de la caja de texto de Usuario
    	usuario = getUsuario();
	
    	//obtiene la informacion de la caja de texto de Clave
 		clave = getClave();
		
		//llamado a funcion que valida el usuario
		validarUsuario(usuario, clave);

		//almacena usuario en ssesionStorge
		setSesion(usuario);		
		
	});

	
	//Limpia cajas de texto
	$("#btnLimpiar").click(function(){
		$("#txtUsuario").val("");
		$("#txtClave").val("");
	});	
	
	
});

//funcion para obtener los datos y mostrarlos en el formulario
function validarUsuario(login, pass){
			
		//envia url, datos (login y clave) 
		$.getJSON( "src/validarUsuario.php", {usuario:login,clave:pass}, function( data ) {
				
		//reaiza captura de los datos devueltos por php, en formato JSON		
		$.each( data, function( key, val ) {
		
		    //valida si la cosulta en validarUsuario obtuvo datos
			if (val.idperfil != null){
			
			   if (val.idperfil == 1){
					//llama  la funcion que muestra el menu del Admin
					parent.location="menu/menuAdmin.html";
			   }
   			   else if (val.idperfil == 2){
					//llama  la funcion que muestra el menu de consulta
					parent.location="menu/menuConsulta.html";
			   }
					else if (val.idperfil == 3){
					//llama  la funcion que muestra el menu de consulta
					parent.location="menu/menuRegistro.html";
			   }
		
			}
			else{
				 alert ("Usuario No Válido");		
			}
		});
	
	});

}//fin del metodo validarUsuario


//obtiene la informacion de la caja de texto usuario
function getUsuario(){

	usuario  = $("#txtUsuario").val();
	return usuario;

}//fin del metodo getUsuario

//obtiene la informacion de la caja de texto clave
function getClave(){

	clave  = $("#txtClave").val();
	return clave;

}//fin del metodo getClave
