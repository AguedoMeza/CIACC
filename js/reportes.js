function pdfPuesto(){
  swal({
    title: 'Lista en PDF',
    text: "¿Deseas ver la Lista de Puestos en PDF?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaPuesto.php', '_blank');
  })
}
//////////////////////////////////////////////////////////////////

function pdfUsuario(){
  swal({
    title: 'Lista en PDF',
    text: "¿Deseas ver la Lista de Usuarios en PDF?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaUsuario.php', '_blank');
  })
}
//////////////////////////////////////////////////////////////////
function pdfDepartamento(){
  swal({
    title: 'Lista en PDF',
    text: "¿Deseas ver la Lista de Departamentos en PDF?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaDepartamento.php', '_blank');
  })
}
//////////////////////////////////////////////////////////////////
function pdfSucursal(){
  swal({
    title: 'Lista en PDF',
    text: "¿Deseas ver la Lista de Sucursales en PDF?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaSucursal.php', '_blank');
  })
}
//////////////////////////////////////////////////////////////////
function pdfTipoProducto(){
  swal({
    title: 'Lista en PDF',
    text: "¿Deseas ver la Lista de los Tipos de Productos en PDF?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaTipoProducto.php', '_blank');
  })
}
//////////////////////////////////////////////////////////////////
function pdfProducto(){
  swal({
    title: 'Lista en PDF',
    text: "¿Deseas ver la Lista de los Productos en PDF?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaProducto.php', '_blank');
  })
}
//////////////////////////////////////////////////////////////////
function pdfPrestamoMaterial(){
  swal({
    title: 'Lista en PDF',
    text: "¿Deseas ver el Prestamo de Material en PDF?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaPrestamoMaterial.php', '_blank');
  })
}
// ////////////////////////////////////////////////////////////////////
// function pdfTicketVentaActual2(){
//     window.open('../reportes/pdfTicketVentActual.php', '_blank');

// }
//////////////////////////////////////////////////////////////////
function pdfPersona(){
  swal({
    title: 'Factura en PDF',
    text: "¿Deseas ver la Lista de Personas en PDF?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaPersona.php', '_blank');
  })
}
//////////////////////////////////////////////////////////////////
function pdfTrabajador(){
  swal({
    title: 'Factura en PDF',
    text: "¿Deseas ver la Lista de Trabajadores en PDF?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaTrabajador.php', '_blank');
  })
}
//////////////////////////////////////////////////////////////////
function pdfSolicitudMaterial(){
  swal({
    title: 'Lista en PDF',
    text: "¿Deseas ver la Solicitud de Material en PDF?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaSolicitudMaterial.php', '_blank');
  })
}
//////////////////////////////////////////////////////////////////
function pdfOrdenSalida(){
  swal({
    title: 'Lista en PDF',
    text: "¿Deseas ver la Orden de Salida en PDF?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaOrdenSalida.php', '_blank');
  })
}
////////////////////////////////////////////////////////////////////
function xcltaller(){
    window.open('../reportes/excel/excelTalleres.php', '_parent');

}
////////////////////////////////////////////////////////////////////
function xclpersona(){
    window.open('../reportes/excel/excelPersonas.php', '_parent');

}
////////////////////////////////////////////////////////////////////
function xclpuesto(){
    window.open('../reportes/excel/excelPuestos.php', '_parent');

}
////////////////////////////////////////////////////////////////////
function xclsucursal(){
    window.open('../reportes/excel/excelSucursales.php', '_parent');

}
////////////////////////////////////////////////////////////////////
function xcldepartamento(){
    window.open('../reportes/excel/excelDepartamentos.php', '_parent');

}
////////////////////////////////////////////////////////////////////
function xclusuario(){
    window.open('../reportes/excel/excelUsuarios.php', '_parent');

}
////////////////////////////////////////////////////////////////////
function xclinventario(){
    window.open('../reportes/excel/excelInventario.php', '_parent');

}
////////////////////////////////////////////////////////////////////
function xclinventariofijo(){
    window.open('../reportes/excel/excelInventarioFijo.php', '_parent');

}
////////////////////////////////////////////////////////////////////
function xclproducto(){
    window.open('../reportes/excel/excelProductos.php', '_parent');

}
////////////////////////////////////////////////////////////////////
function xclproductotipo(){
    window.open('../reportes/excel/excelProductosTipo.php', '_parent');

}
////////////////////////////////////////////////////////////////////
function xcltrabajador(){
    window.open('../reportes/excel/excelTrabajadores.php', '_parent');

}

function xclprestamosmaterial(){
    window.open('../reportes/excel/excelPrestamoMaterial.php', '_parent');

}

