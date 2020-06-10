<?php
     ini_set("display_errors", "off"); 
	//Código para incluir las librerias
	 include_once("conexion.php");
	 include('MyFPDF.php');

	 //Conexión con el servidor
	  $link=ConectarseServidor();

	 //Conexión con la base de datos
	  ConectarseBaseDatos($link);

	 //realiza consulta a la base de datos
	 $sql = "select * from cotizacion"; 
     
     $result=mysql_query($sql,$link);

	   
	   //inclusión de rutinas para crear informes PDF
	   $pdf=new MyFPDF();
	   $pdf->AddPage('P');
	   $pdf->SetFont('Arial','B',10);
	   $pdf->Cell(0,8,"cotizacion",0,0,'C',0);
	   $pdf->Cell(0,20,"",0,1,'',0);+

		//titulos de las columnas
		$pdf->SetTextColor(0,0,0); //rgb	
		$pdf->Cell(50,5,'autos',1,1,'C');	
		$pdf->Cell(50,5,'cedula',1,1,'C');	
		$pdf->Cell(50,5,'nombre',1,1,'C');	
		$pdf->Cell(50,5,'apellidos',1,1,'C');	
		$pdf->Cell(50,5,'email',1,1,'C');	
	    $pdf->Cell(50,5,'celular',1,1,'C');
		$pdf->Cell(50,5,'ciudad',1,1,'C');
		$pdf->Cell(50,5,'observaciones',1,1,'C');
		$pdf->SetFont('Arial','',10);

		//impresion de datos obtenidos desde la BD
		 while($row = mysql_fetch_array($result)){
			  $pdf->Cell(50,5,$row["autos"],1,1,'C');
			  $pdf->Cell(50,5,$row["cedula"],1,1,'C');
			  $pdf->Cell(50,5,$row["nombre"],1,1,'C');
			  $pdf->Cell(50,5,$row["apellidos"],1,1,'C');
			  $pdf->Cell(50,5,$row["email"],1,1,'C');
			  $pdf->Cell(50,5,$row["celular"],1,1,'C');
			  $pdf->Cell(50,5,$row["ciudad"],1,1,'C');
			  $pdf->Cell(100,5,$row["observaciones"],1,1,'C');
		  }//fin del while	
		
		 //libera memoria
		mysql_free_result ($result);

		//genera el PDF en el Navegador
		$pdf->Output();  
		//genera el PDF en un archivo
	    $pdf->Output("d:\ReporteCotizacion.pdf");  			 
?>