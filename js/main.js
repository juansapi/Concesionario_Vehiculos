//metodo jquery para hacer el boton desplegable 
//se ejecuta la funcion main una vez que el documento este leido
$(document).ready(main);
//creamos una variable
var contador = 1;
//funcion que hace el metodo desplegable
function main (){
	$('.menu_bar').click(function(){
		if (contador ==1){
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador =1;
			$('nav').animate({
				left: '-100%'
			})
		}
	});
	
	  //mostramos y ocultamos submenus
	  
	  $('.submenu').click(function(){
		  $(this).children('.children').slideToggle();
	  });
}
