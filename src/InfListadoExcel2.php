<?php

   ini_set("display_errors", "off"); 
	//Código para incluir las librerias
	 include_once("conexion.php");
	 

	 //Conexión con el servidor
	  $link=ConectarseServidor();

	 //Conexión con la base de datos
	  ConectarseBaseDatos($link);
 
	  
	  //realiza consulta a la base de datos
	  $sql = "select * from cotizacion"; 
     
	 	 
     $result=mysql_query($sql,$link);
	   
	   
     //crea nombre del archivo excel
    $nomArchivo = "Listadocotizacion.csv";
	
	//permite lecto escritura (w+)
	$arch = fopen($nomArchivo,"w+");

	//pinta las columnas del excel (los encabezados)
	fwrite($arch,"autos;cedula;nombre;apellidos;email;celular;ciudad;observaciones"."\n");	
     
		 
	 //almacena en vector la informacion
	 while ($row = mysql_fetch_array($result)){
		
		fwrite($arch,$row["autos"].";".$row["cedula"].";". $row["nombre"].";".$row["apellidos"].";".$row["email"].";".$row["celular"].";".$row["ciudad"].";".$row["observaciones"]."\n");	
				
	}//fin del while
		
	//permite descargar Archivo de excel
	$basefichero = basename("Listadocotizacion.csv");

	header( "Content-Type: application/octet-stream");
	header( "Content-Length: ".filesize("Listadocotizacion.csv"));
	header( "Content-Disposition: attachment; filename=".$basefichero."");
	readfile("Listadocotizacion.csv");	
			 
	 //cierra el archivo
	 fclose($arch);
		
	 //libera memoria
	 mysql_free_result ($result);

		
	 	
?>