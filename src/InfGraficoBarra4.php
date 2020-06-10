<?php
     ini_set("display_errors", "off"); 
	//Código para incluir las librerias
	 include_once("conexion.php");
	 require_once ("../utils2/jpgraph/src/jpgraph.php");
	 require_once ("../utils2/jpgraph/src/jpgraph_pie.php");	 
	 require_once ("../utils2/jpgraph/src/jpgraph_bar.php");
	
	 
	 //Conexión con el servidor
	  $link=ConectarseServidor();

	 //Conexión con la base de datos
	  ConectarseBaseDatos($link);
 
	  
	  //realiza consulta a la base de datos
	  $sql = "select puntos from encuesta"; 
      $result=mysql_query($sql,$link);
			
	  //define un arreglo
	  $datos = array(); 
	  
	  
      //obtiene los datos (puntos)
      while ($row = mysql_fetch_array($result)){
         $datos[] = $row['puntos']; //almacenas en un array todos los resultados 

      }//fin del while  
		
	 
 
    //****************************************************
	//GENERAR GRAFICO DE BARRAS
	//****************************************************

		$grafica = new Graph(500, 400);
		$grafica->img->SetMargin(50,40,20,0);

		/*Define el tipo de escala que va a utilizar y el
		valor minimo y maximo para el eje y*/
		$grafica->SetScale("textlin", 0, 150);

		// Asigna el titulo de la gráfica
		$grafica->title->Set("puntos encuesta");
		
		//Asigna el titulo y la alineacion para el eje y
		$grafica->yaxis->SetTitle("puntos","middle");

		//Define una serie, en este caso para un grafico de barras		
		//$datos es el arreglo que obtiene la informacion de la base de datos
		$concesionario 	  = new BarPlot( $datos );
		
		//Asigna la leyenda para la serie
		$concesionario->SetLegend('puntos encuesta');
		
		//agrega el grafico
		$grafica->Add($concesionario);
		
		//Muestra el grafico
		$grafica->Stroke();
	
	//****************************************************
 


	
	 //libera memoria
	 mysql_free_result ($result);

		
	 	
?>