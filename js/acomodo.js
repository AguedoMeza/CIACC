// function BtnHabilitarOrden()
// {
//   llenarOrdenTransferencia();
//   document.getElementById("sucursal").disabled=true;
//   document.getElementById("descripcion").disabled=true;
//   $('#listaordentransferencia').show();
//   $('#finalizar').show();
// }
// function BtnDeshabilitarPrestamo()
// {
//     document.getElementById("sucursal").disabled=false;
//     document.getElementById("descripcion").disabled=false;
//     $('#listaordentransferencia').hide();
//     $('#finalizar').hide();
//     $('#listacompras').hide(); 
//     EliminarOrden();
// }
var speed='slow';

var idioma_español = {
  "sProcessing":     "Procesando...",
  "sLengthMenu":     "Mostrar _MENU_ registros",
  "sZeroRecords":    "No se encontraron resultados",
  "sEmptyTable":     "Ningún dato disponible en esta tabla",
  "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
  "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
  "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
  "sInfoPostFix":    "",
  "sSearch":         "Buscar:",
  "sUrl":            "",
  "sInfoThousands":  ",",
  "sLoadingRecords": "Cargando...",
  "oPaginate": {
    "sFirst":    "Primero",
    "sLast":     "Último",
    "sNext":     "Siguiente",
    "sPrevious": "Anterior"
  },
  "oAria": {
    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
  }
}
function MostrarListadoInferiorPrestamo()
{
    $('#listaprestamoinferior').slideDown(speed);  
}


function MostrarPrevia()
{
  // llenarOrdenCompras();
  $('#listaprevia').slideDown(speed);  
  $('#titulov').slideDown(speed);  
}


function OcultarPrevia()
{
  // llenarOrdenCompras();
  $('#listaprevia').slideUp(speed);
    $('#titulov').slideUp(speed);  
}


function habilitarfolio()
{
  if($('#fijo').prop('checked')) 
   {
      $('#inputfolio').show();
      $('#cboconsumible').hide();
      $('#combounidad').hide();
   }
   else
   {

   	 $('#cboconsumible').show();
     $('#combounidad').show();
     $('#inputfolio').hide();
   }
  
}

function BtnHabilitarPrestamo()
{
  document.getElementById("solicitante").disabled=true;
  document.getElementById("motivo").disabled=true;
  document.getElementById("taller").disabled=true;
  llenarPrestamoMaterial();
  $('#listaProductos').slideDown(speed);  
  $('#finalizar').show();
}

function BtnDeshabilitarPrestamo()
{
    document.getElementById("solicitante").disabled=false;
    document.getElementById("motivo").disabled=false;
    document.getElementById("taller").disabled=false;
    $('#listaProductos').slideUp(speed);  
    $('#finalizar').hide();
    $('#listaprestamoinferior').hide(); 
    llenarListadoInferiorPrestamo();
    // EliminarOrden();
}

function HabilitarChkboxPermisos ()
{
  if($('#personalizado').prop('checked')) 
                {
                     $('#permisos').slideDown(speed); 
                }
            else
                {
                     $('#permisos').slideUp(speed);    
                }
}
function OcultarPermisos ()
{
      $('#permisos').slideUp(speed);  
     document.getElementById("personas").checked = false;
     document.getElementById("usuarios").checked = false;
     document.getElementById("tipo_usuarios").checked = false;
     document.getElementById("trabajadores").checked = false;
     document.getElementById("puestos").checked = false;
     document.getElementById("talleres").checked = false;
     document.getElementById("departamentos").checked = false;
     document.getElementById("sucursales").checked = false;
     document.getElementById("productos").checked = false;
     document.getElementById("tipo_productos").checked = false;
     document.getElementById("prestamo_material").checked = false;
     document.getElementById("lista_prestamos").checked = false;
     document.getElementById("solicitud_material").checked = false;
     document.getElementById("lista_solicitudes").checked = false;
     document.getElementById("orden_salida").checked = false;
     document.getElementById("lista_orden").checked = false;
     document.getElementById("inventario_almacen").checked = false;
     document.getElementById("inventario_fijo").checked = false;


}

function MostrarMaterialesSolicitados()
{
  if($("#listaSolicitudProductos").is(":hidden")) 
                { 
                    llenarMaterialesSolicitados();
                     $('#listaSolicitudProductos').slideDown(speed); 
                     $('#finalizarsolicitud').slideDown(speed); 
                }
            else
                {
                     llenarMaterialesSolicitados();
                }
  
}

function BtnDeshabilitarSolicitud()
{
    $('#listaSolicitudProductos').slideUp(speed);  
    $('#finalizarsolicitud').slideUp(speed);  
    llenarMaterialesSolicitados();
}

function HabilitarNumeroEmpleado()
{
  var puesto =  $("#puesto").val();

    if (puesto == "82") 
    {
       $('#areas').show();
       document.getElementById("sucursal").disabled=true;
       document.getElementById("noempleado").disabled=false;
    }
     if (puesto == "83" || puesto == "86" || puesto == "87")
    {
        $('#areas').hide();
        document.getElementById("sucursal").disabled=true;
        document.getElementById("noempleado").disabled=false;
    }

   if (puesto == "84")
    { 
    $('#areas').hide();
    document.getElementById("noempleado").value="";
    document.getElementById("noempleado").disabled=true;
    document.getElementById("sucursal").disabled=false;
    }

    else if (puesto == "81" || puesto == "85" || puesto >= "88")
    {
       $('#areas').hide();
       document.getElementById("noempleado").disabled=false;
       document.getElementById("sucursal").disabled=false;
    }


}

function HabilitarNumeroEmpleadoModal()
{
  var epuesto =  $("#epuesto").val();

    if (epuesto == "82") 
    {
       $('#eareas').show();
       $('#eextension').hide();
       $('#enumero').show();
       // document.getElementById("esucursal").disabled=true;
       // document.getElementById("enumempleado").disabled=false;
    }
     if (epuesto == "83" || epuesto == "86" || epuesto == "87")
    {
        $('#eareas').hide();
        $('#eextension').hide();
        $('#enumero').show();
        // document.getElementById("esucursal").disabled=true;
        // document.getElementById("enumempleado").disabled=false;
    }

   if (epuesto == "84")
    { 
    $('#eareas').hide();
    $('#enumero').hide();
    $('#eextension').show();
    // document.getElementById("enumempleado").value="";
    // document.getElementById("enumempleado").disabled=true;
    // document.getElementById("esucursal").disabled=false;
    }

    else if (epuesto == "81" || epuesto == "85" || epuesto >= "88")
    {
       $('#eareas').hide();
       $('#enumero').show();
       $('#eextension').show();
       // document.getElementById("enumempleado").disabled=false;
       // document.getElementById("esucursal").disabled=false;
    }


}


function ExtensionDonante()
{
  var status =  $("#status").val();
  if (status == 1) 
  {
    $('#extdonante').slideDown(speed); 
  }
  else
  {
     $('#extdonante').slideUp(speed); 
  }
}

function  BtnHablitarDestino ()
{
  if($('#donacion').prop('checked')) 
                {
                     $('#sucursal').show();
                }
            else
                {
                     $('#sucursal').hide();
                }
}
function  BtnHabilitarOrdenSalida ()
{
   // $('#menusuperior').slideUp(speed); 
   $('#altaordensalida').slideDown(speed); 
}

function  HabilitarFijoyAlmacen ()
{
    if($('#almacen').prop('checked')) 
                {
                     $('#defijo').hide();
                     $('#dealmacen').show();   
                     $('#cantidadproducto').show();               
                }
    if($('#fijo').prop('checked')) 
                {   
                     $('#dealmacen').hide();
                     $('#cantidadproducto').hide();   
                     $('#defijo').show();
                     // $('#productofijo').select2();
                }
}

function MostrarProductosSalidos()
{
  if($("#listaproductossalidos").is(":hidden")) 
                { 
                    llenarOrdenSalida();
                     $('#listaproductossalidos').slideDown(speed); 
                     $('#finalizarordensaldia').slideDown(speed); 
                }
            else
                {
                     llenarOrdenSalida();
                }
  
}

function MostrarDetallesOrden()
{
  $('#listadetallesorden').slideDown(speed);  
  $('#titulov').slideDown(speed);  
}
function OcultarDetallesOrden()
{
  $('#listadetallesorden').slideUp(speed); 
  $('#titulov').slideUp(speed);   
}
