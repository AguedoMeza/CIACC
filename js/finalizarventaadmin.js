function FinVenta2(subtotal, total, numero_venta, id_cliente)
{
  if (subtotal == 0) 
 {
  iniciarVentas2();
            swal(
                 'Incorrecto!',
                 'Agregue productos a su venta!',
                 'warning');
 }
 else
{
  swal({
      title: '¿Estas Seguro?',
      text: "Desea Finalizar la venta?",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../ventas/ventas_modal.php",
        type:"POST",
        dateType:"html",
        data:
        {
            'subtotal':subtotal,
            'total':total,
            'numero_venta':numero_venta,
            'id_cliente':id_cliente
        },
        success:function(respuesta){
            // if (respuesta == "1") 
            // {
              // alert(subtotal + "-" + total + "-" + numero_venta + "-" + id_cliente);
                $("#edit").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                $(this).find('input, textarea, select').filter(':visible:first').focus();
                document.getElementById("pago_cliente").value = "";
                document.getElementById('pago_cliente').focus();});

               //    llenarVentas();
               //      swal(
               //   'Finalizado!',
               //   'Venta Finalizada con exito!',
               //   'success'
               // );
            // }
                 
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
  })
  $("#total").val(total);
  $("#subtotal").val(subtotal);
  $("#numero_venta").val(numero_venta);
  $("#id_cliente").val(id_cliente);         
}
   
}

function EliminarVentaActual ()
{
     
      $.ajax({
        url:"../ventas/ventas_deleteactual.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){},
        error:function(xhr,status){
            alert(xhr);
        }
    
    });

}

function InsertarVenta1 ()
{
      var numero_venta = $("#numero_venta").val();
      var total = $("#total").val();
      var subtotal = $("#subtotal").val();
      var pago_cliente = $("#pago_cliente").val();
      var id_cliente = $("#id_cliente").val();
      var n1,n2;
      var res;
      n1= parseFloat(document.getElementById("pago_cliente").value); 
      n2= parseFloat(document.getElementById("total").value);
      res= n1 - n2;
      resta = res.toFixed(2);
     if (pago_cliente == "")
      {
         swal(
                 'Incorrecto!',
                 'Ingrese el pago del cliente!',
                 'warning'
               );
      }
    else if (n1 < n2) 
    {
      swal(
                 'Incorrecto!',
                 'Efectivo Insuficiente!',
                 'warning'
               );
    }
    else if (n1 >= n2){
     
      $.ajax({
        url:"../ventas/ventas_insert_finventa.php",
        type:"POST",
        dateType:"html",
        data:{
                  'numero_venta':numero_venta,
                  'subtotal':subtotal,
                  'total':total,
                  'pago_cliente':pago_cliente,
                  'resta':resta,
                  'id_cliente':id_cliente
                 },
        success:function(respuesta){
           EliminarVentaActual();
             cerrarVentas();
             llenarVentas();
             iniciarVentas2();
            swal(
                 'Su Cambio es: ' + "$" + resta,
                 'VENTA EXITOSA!',
                 'success'
               );
           
            llenarVentas();
            window.open('../reportes/pdfTicketVentActual.php', '_blank');
        },
        error:function(xhr,status){
            alert(xhr);
        }
    
    });
  }
}

function cerrarVentas()
{
  
  //$(this).removeData();
    $("#edit").modal("hide");
}
