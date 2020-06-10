 <?php
   //  header('Content-Type: text/txt; charset=ISO-8859-1');
	ini_set("display_errors", "off");
	//Código para incluir las librerias
	 include_once("conexion.php");

	 //Conexión con el servidor
	  $link=ConectarseServidor();

	 //Conexión con la base de datos
	  ConectarseBaseDatos($link);

	 //obtiene la informacion de las variables usuario y clave
	 $usuario = $_REQUEST["usuario"];
	 $clave   = $_REQUEST["clave"];
	  
	 //realiza consulta a la base de datos
	 $sql = "select * from usuario where login = '$usuario' and clave = '$clave' "; 
	 
     $result=mysql_query($sql,$link);
	 
		$row     = mysql_fetch_array($result);
		$datos   = array('idperfil' => $row['idperfil'] );
		$rows[]  = $datos;
		
		
	/*Función para desconectarse de la base de datos*/
	desconectarse($link);//cierra la conexion
	
    echo json_encode($rows);
 	
?>