function CerrarCaja1()
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
        url:"../ventas/ventas_updatecerrar.php",
        type:"POST",
        dateType:"html",
        data:
        {},
        success:function(respuesta){
          if (respuesta == "1") 
          {
             llenarVentasDiasAdmin();
             cajacerradadmin();
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

function InsertarVenta ()
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
     if (n1 == "")
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
    else {
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
             llenarVentas();
             iniciarVentas2();
             cerrarVentas();
            swal(
                 'Su Cambio es: ' + "$" + resta,
                 'VENTA EXITOSA!',
                 'success'
               );
            
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
  }
}

function cerrarVentas()
{
  
  //$(this).removeData();
    $("#edit").modal("hide");
}
