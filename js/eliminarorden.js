function EliminarOrden()
{
    $.ajax({
        url:"../orden_compra/orden_compra_deleteTabla.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
        llenarListadoCompras();
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}