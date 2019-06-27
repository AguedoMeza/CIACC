function llenarPuestos(){
    $.ajax({
        url:"../c_puestos/puestos_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listapuestos").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarPersonas(){
    $.ajax({
        url:"../c_personas/personas_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listapersonas").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarUsuarios(){
    $.ajax({
        url:"../c_usuarios/usuarios_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listausuarios").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarDepartamentos(){
    $.ajax({
        url:"../c_departamentos/departamentos_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listadepartamentos").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarTrabajadores(){
    $.ajax({
        url:"../c_trabajadores/trabajadores_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listatrabajadores").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarSucursales(){
    $.ajax({
        url:"../c_sucursales/sucursales_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listasucursales").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarTipoProducto(){
    $.ajax({
        url:"../c_productos_tipo/productos_tipo_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listaproductostipo").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarProductos(){
    $.ajax({
        url:"../c_productos/productos_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listaProductos").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

// function llenarOrdenTransferencia(){
//     var sucursal =  $("#sucursal").val();
//     $.ajax({
//         url:"../orden_compra/orden_compra_listado.php",
//         type:"POST",
//         dateType:"html",
//         data:{
//             'sucursal':sucursal
//         },
//         success:function(respuesta){
//             $("#listaordentransferencia").html(respuesta);
//         },
//         error:function(xhr,status){
//             alert("no se muestra");
//         }
//     });
// }

function llenarAlmacen(){
    $.ajax({
        url:"../almacen/almacen_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listaAlmacen").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}


function llenarTalleres(){
    $.ajax({
        url:"../c_talleres/talleres_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listatalleres").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarInventarios(){
    $.ajax({
        url:"../inventario/inventario_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listainventarios").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

// function llenarUnidades(){
//     $.ajax({
//         url:"../c_productos/productos_listado_modal.php",
//         type:"POST",
//         dateType:"html",
//         data:{},
//         success:function(respuesta){
//             $("#tablaunidad").html(respuesta);
//         },
//         error:function(xhr,status){
//             alert("no se muestra");
//         }
//     });
// }
function llenarInventarioFijo(){
    $.ajax({
        url:"../inventario_fijo/inventario_fijo_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listaInventarioFijo").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarPrestamoMaterial(){
  
    $.ajax({
        url:"../prestamo_material/prestamo_material_listado_productos.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listaProductos").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarListadoInferiorPrestamo(){
  
    $.ajax({
        url:"../prestamo_material/prestamo_material_listadoinferior.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listaprestamoinferior").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarDetallePrestamo(){
    $.ajax({
        url:"../prestamo_material_listado/prestamo_materialListado_detalles.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listaprevia").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarListaPrestamos(){
     var asucursal =  $("#asucursal").val();
    $.ajax({
        url:"../prestamo_material_listado/prestamo_materialListado_ListaPrestamos.php",
        type:"POST",
        dateType:"html",
        data:{'asucursal':asucursal},
        success:function(respuesta){
            $("#listaordenesvisualizar").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarTipoUsuarios(){
    $.ajax({
        url:"../c_usuarios_tipo/usuarios_tipo_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listausuarios").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarMaterialesSolicitados(){
    $.ajax({
        url:"../solicitud_material/solicitud_material_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listaSolicitudProductos").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarDetalleSolicitud(){
    var asucursal =  $("#asucursal").val();
    $.ajax({
        url:"../solicitud_material_listado/solicitud_materialListado_detalles.php",
        type:"POST",
        dateType:"html",
        data:{'asucursal':asucursal},
        success:function(respuesta){
            $("#listaprevia").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarListaSolicitudes(){
        var asucursal =  $("#asucursal").val();
    $.ajax({
        url:"../solicitud_material_listado/solicitud_materialListado_ListaSolicitudes.php",
        type:"POST",
        dateType:"html",
        data:{'asucursal':asucursal},
        success:function(respuesta){
            $("#listaordenesvisualizar").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarOrdenSalida(){
        // var asucursal =  $("#asucursal").val();
    $.ajax({
        url:"../orden_salida/orden_salida_listado.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#listaproductossalidos").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarOrdenSalidaListado(){
        var asucursal =  $("#asucursal").val();
    $.ajax({
        url:"../orden_salida_listado/orden_salidalistado_listado.php",
        type:"POST",
        dateType:"html",
        data:{'asucursal':asucursal},
        success:function(respuesta){
            $("#listaordenesadesalida").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarOrdenSalidaDetalles(){
        var asucursal =  $("#asucursal").val();
    $.ajax({
        url:"../orden_salida_listado/orden_salidalistado_detalles.php",
        type:"POST",
        dateType:"html",
        data:{'asucursal':asucursal},
        success:function(respuesta){
            $("#listadetallesorden").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarFormularioOrdenSalida(){
    $.ajax({
        url:"../orden_salida/orden_salida_formulario.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#altaordensalida").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}


function llenarInventarioAlmacenSucursal(){
    var asucursal =  $("#asucursal").val();
    $.ajax({
        url:"../inventario/inventario_listado_dinamico.php",
        type:"POST",
        dateType:"html",
        data:{'asucursal':asucursal},
        success:function(respuesta){
            $("#listadinamica").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarInventarioFijoSucursal(){
    var asucursal =  $("#asucursal").val();
    $.ajax({
        url:"../inventario_fijo/inventario_fijo_listado_dinamico.php",
        type:"POST",
        dateType:"html",
        data:{'asucursal':asucursal},
        success:function(respuesta){
            $("#listadinamica").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function llenarModalAutorizacion(id_solicitud_post0, id_sucursal0){
    $.ajax({
        url:"../solicitud_material_listado/solicitud_materialListado_modalautorizacion.php",
        type:"POST",
        dateType:"html",
        data:{'id_solicitud_post0':id_solicitud_post0,
    		   'id_sucursal0':id_sucursal0
    		 },
        success:function(respuesta){
            $("#modalautorizacion").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}