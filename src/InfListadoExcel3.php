<?php

   ini_set("display_errors", "off"); 
	//Código para incluir las librerias
	 include_once("conexion.php");
	 

	 //Conexión con el servidor
	  $link=ConectarseServidor();

	 //Conexión con la base de datos
	  ConectarseBaseDatos($link);
 
	  
	  //realiza consulta a la base de datos
	  $sql = "select * from empleados"; 
     
	 	 
     $result=mysql_query($sql,$link);
	   
	   
     //crea nombre del archivo excel
    $nomArchivo = "Listadoempleados.csv";
	
	//permite lecto escritura (w+)
	$arch = fopen($nomArchivo,"w+");

	//pinta las columnas del excel (los encabezados)
	fwrite($arch,"cargo;cedula;nombre;apellidos;ciudad;edad;peso;email;celular,direccion"."\n");	
     
		 
	 //almacena en vector la informacion
	 while ($row = mysql_fetch_array($result)){
		
		fwrite($arch,$row["cargo"].";".$row["cedula"].";". $row["nombre"].";".$row["apellidos"].";".$row["ciudad"].";".$row["edad"].";".$row["peso"].";".$row["email"].";".$row["celular"].";".$row["direccion"]."\n");	
				
	}//fin del while
		
	//permite descargar Archivo de excel
	$basefichero = basename("Listadoempleados.csv");

	header( "Content-Type: application/octet-stream");
	header( "Content-Length: ".filesize("Listadoempleados.csv"));
	header( "Content-Disposition: attachment; filename=".$basefichero."");
	readfile("Listadoempleados.csv");	
			 
	 //cierra el archivo
	 fclose($arch);
		
	 //libera memoria
	 mysql_free_result ($result);

		
	 	
?>