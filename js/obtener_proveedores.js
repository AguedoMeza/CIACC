$(document).ready(function selectproveedores() {
	$.ajax({
 type: 'post',
 url: '../obtener_proveedores.php',
 data: {},
 success: function (response) {
  document.getElementById("sucursal").innerHTML=response; 
 }
 });
} );

$("#frmOrdenCompras").submit(function(e){
  
   
    var proveedor =  $("#proveedor").val();
    $.ajax({
        url:"../orden_compra/obtenerValue_Proveedores.php",
        type:"POST",
        dateType:"html",
        data:{
                
                'proveedor':proveedor
            },
        success:function(respuestaC){
         if (respuestaC == "1")
           {
           	alert(proveedor);
           }
           else	
           {
           	alert("NO FUNCIONA!");
           }
        },
        error:function(xhr,status){
            //no se encontro el archivo donde se procesa la peticion Ajax
            alert("no se muestra");
        }
    });
    e.preventDefault();
    return false;
});

// function ObtenerTabla(){
//    var proveedor =  $("#proveedor").val();
   
//         $.ajax({
//             url:"../orden_compra/obtenerValue_Proveedores.php",
//             type:"POST",
//             dateType:"html",
//             data:{get_option:proveedor},
//             success:function(respuesta){ 
//             if (respuesta == "1") 
//             {
//               alert("FUNCIONA");
                 
//             }  
//             else if (respuesta == "2")
//             {
//             	alert(proveedor);
//             	alert("NO FUNCIONA!");
//             }
               
                
//             },
//             error:function(xhr,status){
//                 //no se encontro el archivo donde se procesa la peticion Ajax
//                 alert("no se muestra");
//             }
//         });
//     //fin de ajax
    
// }

// function seleccionado(val)
// {
//  $.ajax({
//  type: 'post',
//  url: '../orden_compra/obtener_proveedores.php',
//  data: {
//   get_option:val
//  },
//  success: function (response) {
//  	 if (response == "1") 
//             {
//             	 llenarOrdenCompras();
//                  alert(val);
//                  // document.getElementById("new_select").innerHTML=response; 
//             }  
//     else if (response == "2")
//             {
//             	alert(val);
//             	alert("NO FUNCIONA!");
//             }
  
//  }
//  });
// }