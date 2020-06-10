 <?php
   include 'conexion.php';
   $cedula = $_POST["cedula"];
   $nombre = $_POST["nombre"];
   $respuesta = $_POST["respuesta"];
   $puntos = $_POST["puntos"];
   $observaciones = $_POST["observaciones"];

   
   $insertar = "INSERT INTO encuesta(cedula, nombre, respuesta, puntos, observaciones) VALUES ('$cedula', '$nombre', '$respuesta','$puntos','$observaciones' )";
   
   $verificar_cedula = mysqli_query($conexion, "SELECT * FROM usuarios WHERE cedula = '$cedula'");
   if(mysqli_num_rows($verificar_cedula) > 0){
	   echo '<script>
	   alert("El usuario ya esta registrado");
	   window.history.go(-1);
	   </script>';
	   exit;
   }
   
    $resultado = mysqli_query($conexion, $insertar);
	if(!$resultado){
		
		echo 'Error al enviar la encuesta';
	}
	else{
		echo 'Gracias por participar en nuestra encuesta';
	}
     
	 //cerrar conexion 
     mysqli_close($conexion);
   
   
   
   
?>