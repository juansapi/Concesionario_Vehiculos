<?php

   ini_set("display_errors", "off"); 
	//Código para incluir las librerias
	 include_once("conexion.php");
	 

	 //Conexión con el servidor
	  $link=ConectarseServidor();

	 //Conexión con la base de datos
	  ConectarseBaseDatos($link);
 
	  
	  //realiza consulta a la base de datos
	  $sql = "select * from usuarios"; 
     
	 	 
     $result=mysql_query($sql,$link);
	   
	   
     //crea nombre del archivo excel
    $nomArchivo = "Listadousuarios.csv";
	
	//permite lecto escritura (w+)
	$arch = fopen($nomArchivo,"w+");

	//pinta las columnas del excel (los encabezados)
	fwrite($arch,"cedula;nombre;apellidos;email;celular;direccion;ciudad;edad;clave"."\n");	
     
		 
	 //almacena en vector la informacion
	 while ($row = mysql_fetch_array($result)){
		
		fwrite($arch,$row["cedula"].";". $row["nombre"].";".$row["apellidos"].";".$row["email"].";".$row["celular"].";".$row["direccion"].";".$row["ciudad"].";".$row["edad"].";".$row["clave"]."\n");	
				
	}//fin del while
		
	//permite descargar Archivo de excel
	$basefichero = basename("Listadousuarios.csv");

	header( "Content-Type: application/octet-stream");
	header( "Content-Length: ".filesize("Listadousuarios.csv"));
	header( "Content-Disposition: attachment; filename=".$basefichero."");
	readfile("Listadousuarios.csv");	
			 
	 //cierra el archivo
	 fclose($arch);
		
	 //libera memoria
	 mysql_free_result ($result);

		
	 	
?>