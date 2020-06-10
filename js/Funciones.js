
//funcion que permite mostrar un mensaje
 function mostrarMensaje(mensaje, id) {
 	var contenedorMensajes = document.getElementById(id);
	contenedorMensajes.innerHTML = mensaje;	
}//fin de la funcion mostrarMensjae

//valida la sesion 
function validarSesion(){
		
	//obtiene usuario del ssesionStorge
	usuarioSesion = getSesion('sessionUsuario');
	
		if (usuarioSesion==null){
			
			alert ("Usuario No Autenticado");
			
			//llama  la funcion que muestra el menu
			parent.location="../index.php";
		}
		

}//fin del metodo validarSesion
