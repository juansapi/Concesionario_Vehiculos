 <?php
   include 'conexion.php';
   $autos =  $_POST["autos"];
   $cedula = $_POST["cedula"];
   $nombre = $_POST["nombre"];
   $apellidos = $_POST["apellidos"];
   $email = $_POST["email"];
   $celular = $_POST["celular"];
   $ciudad = $_POST["ciudad"];
   $observaciones = $_POST["observaciones"];
   
   $insertar = "INSERT INTO cotizacion(autos,cedula, nombre, apellidos, email, celular, ciudad, observaciones) VALUES ('$autos', '$cedula', '$nombre', '$apellidos', '$email', '$celular', '$ciudad', '$observaciones' )";
   
   $verificar_cedula = mysqli_query($conexion, "SELECT * FROM usuarios WHERE cedula = '$cedula'");
   if(mysqli_num_rows($verificar_cedula) > 0){
	   echo '<script>
	   alert("El usuario ya esta registrado");
	   window.history.go(-1);
	   </script>';
	   exit;
   }
   
    $verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
   if(mysqli_num_rows($verificar_email) > 0){
	   echo '<script>
	   alert("El email ya esta registrado");
	   window.history.go(-1);
	   </script>';
	   exit;
   }
    $verificar_celular = mysqli_query($conexion, "SELECT * FROM usuarios WHERE celular = '$celular'");
   if(mysqli_num_rows($verificar_celular) > 0){
	   echo '<script>
	   alert("El celular ya esta registrado");
	   window.history.go(-1);
	   </script>';
	   exit;
   }
    $resultado = mysqli_query($conexion, $insertar);
	if(!$resultado){
		
		echo 'Error al registrarse';
	}
	else{
		echo 'se a enviado la cotizacion exitosamente en los proximos dias recibira un email con toda la informacion, GRACIAS ';
	}
     
	 //cerrar conexion 
     mysqli_close($conexion);
   
   
   
   
?>