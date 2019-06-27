$(document).ready(function selectrabajadores() {
	$.ajax({
 type: 'post',
 url: '../obtener_personas.php',
 data: {},
 success: function (response) {
  document.getElementById("nombre").innerHTML=response; 
 }
 });
} );
