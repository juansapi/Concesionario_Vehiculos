<?php
     ini_set("display_errors", "off"); 
	//C�digo para incluir las librerias
	 include_once("conexion.php");
	 include('MyFPDF.php');

	 //Conexi�n con el servidor
	  $link=ConectarseServidor();

	 //Conexi�n con la base de datos
	  ConectarseBaseDatos($link);

	 //realiza consulta a la base de datos
	 $sql = "select * from usuarios"; 
     
     $result=mysql_query($sql,$link);

	   
	   //inclusi�n de rutinas para crear informes PDF
	   $pdf=new MyFPDF();
	   $pdf->AddPage('P');
	   $pdf->SetFont('Arial','B',11);
	   $pdf->Cell(0,8,"Registrados En El Concesionario",0,0,'C',0);
	   $pdf->Cell(0,20,"",0,1,'',0);+

		//titulos de las columnas
		$pdf->SetTextColor(0,0,0); //rgb	
		$pdf->Cell(50,5,'cedula',1,0,'C');	
		$pdf->Cell(50,5,'nombre',1,0,'C');	
		$pdf->Cell(50,5,'apellidos',1,0,'C');	
		$pdf->Cell(50,5,'email',1,1,'C');	
	    $pdf->Cell(50,5,'celular',1,0,'C');
		$pdf->Cell(50,5,'direccion',1,0,'C');
		$pdf->Cell(50,5,'ciudad',1,0,'C');
		$pdf->Cell(50,5,'edad',1,1,'C');
		$pdf->Cell(50,5,'clave',1,1,'C');
		$pdf->SetFont('Arial','',10);

		//impresion de datos obtenidos desde la BD
		 while($row = mysql_fetch_array($result)){
			  $pdf->Cell(50,5,$row["cedula"],1,0,'C');
			  $pdf->Cell(50,5,$row["nombre"],1,0,'C');
			  $pdf->Cell(50,5,$row["apellidos"],1,0,'C');
			  $pdf->Cell(50,5,$row["email"],1,1,'C');
			  $pdf->Cell(50,5,$row["celular"],1,0,'C');
			  $pdf->Cell(50,5,$row["direccion"],1,0,'C');
			  $pdf->Cell(50,5,$row["ciudad"],1,0,'C');
			  $pdf->Cell(50,5,$row["edad"],1,1,'C');
			  $pdf->Cell(50,5,$row["clave"],1,1,'C');
		  }//fin del while	
		
		 //libera memoria
		mysql_free_result ($result);

		//genera el PDF en el Navegador
		$pdf->Output();  
		//genera el PDF en un archivo
	    $pdf->Output("d:\ReporteAcademiaMilitar.pdf");  			 
?>