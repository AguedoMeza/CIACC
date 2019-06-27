$(document).ready(function selecpersonas() {
	$.ajax({
 type: 'post',
 url: '../obtener_trabajadores.php',
 data: {},
 success: function (response) {
  document.getElementById("nombre").innerHTML=response; 
 }
 });
} );