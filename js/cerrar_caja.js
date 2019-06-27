function CerrarCaja()
{

  swal({
      title: '¿Estas Seguro?',
      text: "Desea cerra la caja?",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../punto_venta/ventas_updatecerrar.php",
        type:"POST",
        dateType:"html",
        data:
        {},
        success:function(respuesta){
          if (respuesta == "1") 
          {
             llenarVentasDias();
             cajacerrada();
               swal(
                 'Cerrada!',
                 'Caja cerrada con éxito!',
                 'success'
               );
              
          }

          else if (respuesta == "2")
          {
            alert("Consulta incorrecta");
          }
           
          else if (respuesta == "4")
          {
             swal(
                 'Imposible!',
                 'Finalice la venta antes de cerrar!',
                 'warning'
               );
          }
          else
          {
            alert("No funciona");
          }      
                 
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
  })
  // $("#total").val(total);
  // $("#subtotal").val(subtotal);
  // $("#numero_venta").val(numero_venta);
  // $("#id_cliente").val(id_cliente);         
  
}



