 <!DOCTYPE html>
<html>
    <head>
        <title>Autenticaci&oacuten</title>
        <script type="text/JavaScript" src="js/jQuery.js"></script>
        <script type="text/JavaScript" src="js/Validar.js"></script> 		
		<script type="text/JavaScript" src="js/Sesiones.js"></script> 	
		<LINK REL=StyleSheet HREF="css/estilos.css" TYPE="text/css" MEDIA=screen>
		
    </head>
    <body data-twttr-rendered="true">
		<div class="container">
			<div class="row">
			    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<form role="form">
						<input type="hidden" id="hidden" name="new"  value="new">
						<center><h2>Autenticación</h2></center>
						<hr class="colorgraph">
												
						<div class="form-group">
							<input type="text" name="txtUsuario" id="txtUsuario" class="form-control input-lg" placeholder="Usuario" tabindex="1" autofocus>
						</div>
						
						
						<div class="form-group">
							<input type="password" name="txtClave" id="txtClave" class="form-control input-lg" placeholder="Clave" tabindex="2">
						</div>
												
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-md-6"><div class="btn btn-primary btn-block btn-lg" tabindex="3" id="btnAceptar">Aceptar</div>							
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-6"><div class="btn btn-primary btn-block btn-lg" tabindex="4" id="btnLimpiar">Limpiar</div>							
						</div>  		       	
					</form>
				</div>
			</div>
		</div>
    </body>    
</html>