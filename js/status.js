function statusPuesto(id_puesto,valor){
    var valor=valor;
    var id_puesto=id_puesto;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_puestos/puestos_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_puesto':id_puesto},
            success:function(respuesta){   
              llenarPuestos();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusPersona(id_persona,valor){
    var valor=valor;
    var id_persona=id_persona;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_personas/personas_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_persona':id_persona},
            success:function(respuesta){   
              llenarPersonas();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusUsuario(id_usuario,valor){
    var valor=valor;
    var id_usuario=id_usuario;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_usuarios/usuarios_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_usuario':id_usuario},
            success:function(respuesta){   
              llenarUsuarios();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusDepartamento(id_departamento,valor){
    var valor=valor;
    var id_departamento=id_departamento;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_departamentos/departamentos_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_departamento':id_departamento},
            success:function(respuesta){   
              llenarDepartamentos();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusTrabajador(id_trabajador,valor){
    var valor=valor;
    var id_trabajador=id_trabajador;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_trabajadores/trabajadores_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_trabajador':id_trabajador},
            success:function(respuesta){   
              llenarTrabajadores();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}


function NoEditar(){
    
swal(
        'Registro Desactivado!',
        'Active el registro para editar!',
        'warning'
    );
}

function NoVisualizar(){
    
swal(
        'Incorrecto!',
        'Cierre la vista previa!',
        'warning'
    );
}

function NoEditarStatus(){
    
swal(
        'Incorrecto!',
        'Prestamo Finalizado!',
        'warning'
    );
}

function NoEditarStatusSolicitud(){
    
swal(
        'Incorrecto!',
        'Solicitud Finalizada!',
        'warning'
    );
}

function statusSucursal(id_sucursal,valor){
    var valor=valor;
    var id_sucursal=id_sucursal;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_sucursales/sucursales_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_sucursal':id_sucursal},
            success:function(respuesta){   
              llenarSucursales();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}








function statusCaja(id_caja,valor){
    var valor=valor;
    var id_caja=id_caja;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_cajas/cajas_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_caja':id_caja},
            success:function(respuesta){   
              llenarCajas();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusTipoPago(id_tipo_pago,valor){
    var valor=valor;
    var id_tipo_pago=id_tipo_pago;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_tipo_pago/tipo_pago_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_tipo_pago':id_tipo_pago},
            success:function(respuesta){   
              llenarTipoPago();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusTipoProveedor(id_tipo_proveedor,valor){
    var valor=valor;
    var id_tipo_proveedor=id_tipo_proveedor;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_proveedores_tipo/proveedores_tipo_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_tipo_proveedor':id_tipo_proveedor},
            success:function(respuesta){   
              llenarTipoProveedor();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusTipoProducto(id_tipo_producto,valor){
    var valor=valor;
    var id_tipo_producto=id_tipo_producto;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_productos_tipo/productos_tipo_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_tipo_producto':id_tipo_producto},
            success:function(respuesta){   
              llenarTipoProducto();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusProveedor(id_proveedor,valor){
    var valor=valor;
    var id_proveedor=id_proveedor;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_proveedores/proveedores_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_proveedor':id_proveedor},
            success:function(respuesta){   
              llenarProveedores();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusCliente(id_cliente,valor){
    var valor=valor;
    var id_cliente=id_cliente;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_clientes/clientes_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_cliente':id_cliente},
            success:function(respuesta){   
              llenarClientes();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusProducto(id_producto,valor){
    var valor=valor;
    var id_producto=id_producto;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_productos/productos_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_producto':id_producto},
            success:function(respuesta){   
              llenarProductos();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusTaller(id_taller,valor){
    var valor=valor;
    var id_taller=id_taller;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_talleres/talleres_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_taller':id_taller},
            success:function(respuesta){   
              llenarTalleres();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusInventario(id_inventario, valor){
    var valor=valor;
    var id_inventario=id_inventario;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../inventario/inventario_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_inventario':id_inventario},
            success:function(respuesta){   
              llenarInventarios();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusInventarioFijo(id_inventario_fijo, valor){
    var valor=valor;
    var id_inventario_fijo=id_inventario_fijo;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../inventario_fijo/inventario_fijo_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_inventario_fijo':id_inventario_fijo},
            success:function(respuesta){   
              llenarInventarioFijo();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}

function statusTipoUsuario(id_tipo_usuario,valor){
    var valor=valor;
    var id_tipo_usuario=id_tipo_usuario;
    if (valor==1) {
        variable="desactivar"        
    }
    else{
        variable="activar";       
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_usuarios_tipo/usuarios_tipo_updatestatus.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_tipo_usuario':id_tipo_usuario},
            success:function(respuesta){   
              llenarTipoUsuarios();
                if (valor==0) {
                     alertify.success('Registro Activado',3);
                }
                else{
                    alertify.error('Registro Desactivado',3);
                }
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}