$("#frmNuevoPuestos").submit(function(e){
  
   
    var nombre =  $("#nombre").val();
    var descripcion =  $("#descripcion").val();
    $.ajax({
        url:"../c_puestos/puestos_insert.php",
        type:"POST",
        dateType:"html",
        data:{
                
                'nombre':nombre,
                'descripcion':descripcion
            },
        success:function(respuestaC){
             if (respuestaC == "1")
              {
              	swal(
                 'Incorrecto!',
                 'El puesto ya existe!',
                 'warning');
              }
              else
              {
              	llenarPuestos();
             	iniciarPuestos();
            	swal(
                 'Guardado!',
                 'El registro se ha guardado!',
                 'success');
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

$("#frmNuevoPersonas").submit(function(e){

var nombre = document.getElementById('nombre').value;
var paterno = document.getElementById('paterno').value;
var materno = document.getElementById('materno').value;
var civil = document.getElementById('ecivil').value;
var tel = document.getElementById('telefono').value;
var correo = document.getElementById('correo').value;
var col = document.getElementById('colonia').value;
var calle = document.getElementById('calle').value;
var num = document.getElementById('numero').value;
var estado = document.getElementById('estado').value;
var munic = document.getElementById('new_select').value;
    $.ajax({
        url:"../c_personas/personas_insert.php",
        type:"POST",
        dateType:"html",
        data:{
                
                'nombre':nombre,
                'paterno':paterno,
                'materno':materno,
                'civil':civil,
                'tel':tel,
                'correo':correo,
                'col':col,
                'calle':calle,
                'num':num,
                'estado':estado,
                'munic':munic
            },
        success:function(respuestaC){
             llenarPersonas();
             iniciarPersonas();
            swal(
                 'Guardado!',
                 'El registro se ha guardado!',
                 'success'
               );
           

        },
        error:function(xhr,status){
            //no se encontro el archivo donde se procesa la peticion Ajax
            alert("no se muestra");
        }
    });
    e.preventDefault();
    return false;
});

$("#frmNuevoUsuarios").submit(function(e){

var nombre = document.getElementById('nombre').value;
var nombreusuario = document.getElementById('nombreusuario').value;
// var contrasena = document.getElementById('contrasena').value;
// var confirmarcontra = document.getElementById('confirmarcontra').value;
var tipousuario = document.getElementById('tipousuario').value;

      $.ajax({
        url:"../c_usuarios/usuarios_insert.php",
        type:"POST",
        dateType:"html",
        data:{
                'nombre':nombre,
                'nombreusuario':nombreusuario,
                'tipousuario':tipousuario,
                
            },
            
        success:function(respuestaC){
               
            if (respuestaC == '1') 
            {

              iniciarUsuarios();
            swal(
                 'Existente!',
                 'El usuario ya existe!',
                 'warning'
               );

            }
          else
          {
              llenarUsuarios();
              iniciarUsuarios();
            swal(
                 'Guardado!',
                 'El registro se ha guardado!',
                 'success'
               );
          //   alert("Hay Registro, no puedes");
          //  }
          $.ajax({
             type: 'post',
             url: '../obtener_trabajadores.php',
             data: {},
             success: function (response) {
              document.getElementById("nombre").innerHTML=response; 
             }
             });
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

$("#frmNuevoDepartamentos").submit(function(e){

var nombre = document.getElementById('nombre').value;
var siglas = document.getElementById('siglas').value;


    $.ajax({
        url:"../c_departamentos/departamentos_insert.php",
        type:"POST",
        dateType:"html",
        data:{
                
                'nombre':nombre,
                'siglas':siglas
            },
        success:function(respuestaC){
            if (respuestaC == "1") 
            {
               swal(
                 'Incorrecto!',
                 'El departamento ya existe!',
                 'warning'
               );
            }
            else
            {

              llenarDepartamentos();
              iniciarDepartamentos();
            swal(
                 'Guardado!',
                 'El registro se ha guardado!',
                 'success'
               );
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

$("#frmNuevoTrabajadores").submit(function(e){

var nombre = document.getElementById('nombre').value;
var noempleado = document.getElementById('noempleado').value;
var departamento = document.getElementById('departamento').value;
var puesto = document.getElementById('puesto').value;
var fechaing = document.getElementById('fechaing').value;
var sucursal = document.getElementById('sucursal').value;
var area = document.getElementById('area').value;
    $.ajax({
        url:"../c_trabajadores/trabajadores_insert.php",
        type:"POST",
        dateType:"html",
        data:{
                
                'nombre':nombre,
                'noempleado':noempleado,
                'departamento':departamento,
                'puesto':puesto,
                'fechaing':fechaing,
                'sucursal':sucursal,
                'area':area
            },
        success:function(respuestaC){
        	if (respuestaC == '1') 
        	{
        		  swal(
			                 'Existente!',
			                 'Ingrese otro número de empleado!',
			                 'warning'
			           );
        	}

        	else
        	{
        		 llenarTrabajadores();
               iniciarTrabajadores();


			    $.ajax({
			 type: 'post',
			 url: '../obtener_personas.php',
			 data: {},
			 success: function (response) {
			  document.getElementById("nombre").innerHTML=response; 
			 }
			 });
                   

			            swal(
			                 'Guardado!',
			                 'El registro se ha guardado!',
			                 'success'
			               );
           
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



$("#frmNuevoSucursales").submit(function(e){
  
   
    var sucursal =  $("#sucursal").val();
    var direccion =  $("#direccion").val();
    var descripcion =  $("#descripcion").val();
    var telefono =  $("#telefono").val();
    var correo =  $("#correo").val();
    var area =  $("#area").val();
    $.ajax({
        url:"../c_sucursales/sucursales_insert.php",
        type:"POST",
        dateType:"html",
        data:{
                
                'sucursal':sucursal,
                'direccion':direccion,
                'descripcion':descripcion,
                'telefono':telefono,
                'correo':correo,
                'area':area
            },
        success:function(respuestaC){
          if (respuestaC == "1")
           {
           
               swal(
                 'Incorrecto!',
                 'La sucursal ya existe!',
                 'warning'
               );
           }
           else
           {
            llenarSucursales();
             iniciarSucursales();
            swal(
                 'Guardado!',
                 'El registro se ha guardado!',
                 'success'
               );
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

$("#frmNuevoTipoProducto").submit(function(e){
  
   
    var nombre =  $("#nombre").val();
    var descripcion =  $("#descripcion").val();
    $.ajax({
        url:"../c_productos_tipo/productos_tipo_insert.php",
        type:"POST",
        dateType:"html",
        data:{
                
                'nombre':nombre,
                'descripcion':descripcion
            },
        success:function(respuestaC){
             if (respuestaC == "1") 
             {
                iniciarTipoProducto();
                swal(
                 'Incorrecto!',
                 'El tipo de producto ya existe!',
                 'warning'
               );
             }
            else
              {
                 llenarTipoProducto();
                iniciarTipoProducto();
            swal(
                 'Guardado!',
                 'El registro se ha guardado!',
                 'success'
               );
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


$("#frmNuevoProductos").submit(function(e){
  
   
    var nombre =  $("#nombre").val();
    var descripcion =  $("#descripcion").val();
    var tipoproducto =  $("#tipoproducto").val();
    var consumible =  $("#consumible").val();
    var unidad =  $("#unidad").val();
    var minimo =  $("#minimo").val();

                    $.ajax({
                url:"../c_productos/productos_insert.php",
                type:"POST",
                dateType:"html",
                data:{
                        
                        'nombre':nombre,
                        'descripcion':descripcion,
                        'tipoproducto':tipoproducto,
                        'consumible':consumible,
                        'unidad':unidad,
                        'minimo':minimo
                    },

                success:function(respuestaC){
                   
                     if (respuestaC == "1")
                      {
                        swal(
                         'Incorrecto!',
                         'El producto ya existe!',
                         'warning');
                      }
                      
                      else if(respuestaC == "2")
                      {
                        
                        llenarProductos();
                        iniciarProductos();
                        swal(
                         'Guardado!',
                         'El registro se ha guardado!',
                         'success');
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


$("#frmNuevoTalleres").submit(function(e){
  
   
    var nombre =  $("#nombre").val();
    var tallerista =  $("#tallerista").val();
    var descripcion =  $("#descripcion").val();
    $.ajax({
        url:"../c_talleres/talleres_insert.php",
        type:"POST",
        dateType:"html",
        data:{
                
                'nombre':nombre,
                'tallerista':tallerista,
                'descripcion':descripcion
            },
        success:function(respuestaC){
             if (respuestaC == "1")
              {
                swal(
                 'Incorrecto!',
                 'El taller ya existe!',
                 'warning');
              }
              else
              {
                llenarTalleres();
                iniciarTalleres();
                swal(
                 'Guardado!',
                 'El registro se ha guardado!',
                 'success');
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

$("#frmNuevoInventarios").submit(function(e){
  
   
    var producto =  $("#producto").val();
    var cantidad =  $("#cantidad").val();

    $.ajax({
        url:"../inventario/inventario_insert.php",
        type:"POST",
        dateType:"html",
        data:{
                
                'producto':producto,
                'cantidad':cantidad
            },
        success:function(respuestaC){
             if (respuestaC == "1")
              {

              	iniciarInventarios();
                llenarInventarios();
            	swal(
                 'Guardado!',
                 'El registro se ha guardado!',
                 'success');
            	
              }
              else if (respuestaC == 2)
              {
              	llenarInventarios();
             	iniciarInventarios();
            	swal(
                 'Incorrecto!',
                 'Cantidad Inválida!',
                 'warning');
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

$("#frmNuevoInventarioFijo").submit(function(e){
  
   
    var producto =  $("#producto").val();
    var qr =  $("#qr").val();
    var ci =  $("#ci").val();
    var condiciones =  $("#condiciones").val();
    var serie =  $("#serie").val();
    var marca =  $("#marca").val();
    var modelo =  $("#modelo").val();

        $.ajax({
        url:"../inventario_fijo/inventario_fijo_insert.php",
        type:"POST",
        dateType:"html",
        data:{
                
                'producto':producto,
                'qr':qr,
                'ci':ci,
                'condiciones':condiciones,
                'serie':serie,
                'marca':marca,
                'modelo':modelo
            },
        success:function(respuestaC){
             if (respuestaC == "1")
              {
                swal(
                 'Incorrecto!',
                 'QR registrado anteriormente!',
                 'warning');
              }
              else if (respuestaC == "2") 
              {
                swal(
                 'Incorrecto!',
                 'CI registrado anteriormente!',
                 'warning');
              }
              else if (respuestaC == "3") 
              {
                swal(
                 'Incorrecto!',
                 'Producto registrado anteriormente!',
                 'warning');
              }
              else if (respuestaC == "4")
              {
                llenarInventarioFijo();
                iniciarInventarioFijo();
                swal(
                 'Guardado!',
                 'El registro se ha guardado!',
                 'success');
              }
              else
              {
                alert(qr);
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

function AgregarOrden(id_producto)
{
     var cantidad = $("#cantidad"+id_producto).val();
     var producto =  $("#producto").val();
    
    $.ajax({
        url:"../prestamo_material/prestamo_material_insert.php",
        type:"POST",
        dateType:"html",
        data:{
          'id_producto':id_producto,
          'cantidad':cantidad
        },
        success:function(respuesta){
        if (respuesta == "1") 
        {
         
           swal(
                 'Incorrecto!',
                 'Ingrese una cantidad válida!',
                 'warning'
               );
          
        }
        else if (respuesta == "2") 
        {

          llenarListadoCompras();
          MostrarListado();
          alertify.success('Producto Agregado',2);
        }
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

$("#frmNuevoTipoUsuarios").submit(function(e){
  
   
    var nombre =  $("#nombre").val();
    var descripcion =  $("#descripcion").val();
    var personas;
    var usuarios;
    var tipousuarios;
    var trabajadores;
    var puestos;
    var talleres;
    var departamentos;
    var sucursales;
    var productos;
    var tipoproductos;
    var prestamomaterial;
    var listaprestamo;
    var solicitudmaterial;
    var listasolicitud;
    var ordensalida;
    var listaordensalida;
    var inventarioalmacen;
    var inventariofijo;
 if($('#total').prop('checked')) 
        {
            var personas = "1";
            var usuarios = "1";
            var tipousuarios = "1";
            var trabajadores = "1";
            var puestos = "1";
            var talleres = "1";
            var departamentos = "1";
            var sucursales = "1";
            var productos = "1";
            var tipoproductos = "1";
            var prestamomaterial = "1";
            var listaprestamo = "1";
            var solicitudmaterial = "1";
            var listasolicitud = "1";
            var ordensalida = "1";
            var listaordensalida = "1";
            var inventarioalmacen = "1";
            var inventariofijo = "1";
        }

else if($('#personalizado').prop('checked')) 
     {
        if($('#personas').prop('checked')) 
        {
          personas = "1";
        }
        else
        {
            personas = "0";
        }
        if($('#usuarios').prop('checked')) 
        {
            usuarios = "1";
        }
        else
        {
            usuarios = "0";
        }
        if($('#tipo_usuarios').prop('checked')) 
        {
          tipousuarios = "1";
        }
        else
        {
            tipousuarios = "0";
        }
        if($('#trabajadores').prop('checked')) 
        {
            trabajadores = "1";
        }
        else
        {
            trabajadores = "0";
        }
        if($('#puestos').prop('checked')) 
        {
            puestos = "1";
        }
        else
        {
            puestos = "0";
        }
        if($('#talleres').prop('checked')) 
        {
            talleres = "1";
        }
        else
        {
            talleres = "0";
        }
        if($('#departamentos').prop('checked')) 
        {
            departamentos = "1";
        }
        else
        {
            departamentos = "0";
        }
        if($('#sucursales').prop('checked')) 
        {
            sucursales = "1";
        }
        else
        {
            sucursales = "0";
        }
        if($('#productos').prop('checked')) 
        {
            productos = "1";
        }
        else
        {
            productos = "0";
        }
        if($('#tipo_productos').prop('checked')) 
        {
            tipoproductos = "1";
        }
        else
        {
            tipoproductos = "0";
        }
        if($('#prestamo_material').prop('checked')) 
        {
            prestamomaterial = "1";
        }
        else
        {
            prestamomaterial = "0";
        }
        if($('#lista_prestamos').prop('checked')) 
        {
            listaprestamo = "1";
        }
        else
        {
            listaprestamo = "0";
        }
        if($('#solicitud_material').prop('checked')) 
        {
            solicitudmaterial = "1";
        }
        else
        {
            solicitudmaterial = "0";
        }
        if($('#lista_solicitudes').prop('checked')) 
        {
            listasolicitud = "1";
        }
        else
        {
            listasolicitud = "0";
        }
        if($('#orden_salida').prop('checked')) 
        {
            ordensalida = "1";
        }
        else
        {
            ordensalida = "0";
        }
        if($('#lista_orden').prop('checked')) 
        {
            listaordensalida = "1";
        }
        else
        {
            listaordensalida = "0";
        }
        if($('#inventario_almacen').prop('checked')) 
        {
            inventarioalmacen = "1";
        }
        else
        {
            inventarioalmacen = "0";
        }
        if($('#inventario_fijo').prop('checked')) 
        {
            inventariofijo = "1";
        }
        else
        {
            inventariofijo = "0";
        }
     
    }
      
if (personas == "0" && usuarios == "0" && tipousuarios == "0" && trabajadores == "0" && puestos == "0" && talleres == "0" && departamentos == "0" && sucursales == "0" && productos == "0" 
    && tipoproductos == "0" && prestamomaterial == "0" && listaprestamo == "0" && solicitudmaterial == "0" && listasolicitud == "0" && ordensalida == "0" && listaordensalida == "0"
     && inventarioalmacen == "0" && inventariofijo == "0") 
{
     swal(
                 'Incorrecto!',
                 'No has agregado módulos',
                 'warning');
              
}

else
{

    $.ajax({
        url:"../c_usuarios_tipo/usuarios_tipo_insert.php",
        type:"POST",
        dateType:"html",
        data:{
                'nombre':nombre,
                'descripcion':descripcion,
                'personas':personas,
                'usuarios':usuarios,
                'tipousuarios':tipousuarios,
                'trabajadores':trabajadores,
                'puestos':puestos,
                'talleres':talleres,
                'departamentos':departamentos,
                'sucursales':sucursales,
                'productos':productos,
                'tipoproductos':tipoproductos,
                'prestamomaterial':prestamomaterial,
                'listaprestamo':listaprestamo,
                'solicitudmaterial':solicitudmaterial,
                'listasolicitud':listasolicitud,
                'ordensalida':ordensalida,
                'listaordensalida':listaordensalida,
                'inventarioalmacen':inventarioalmacen,
                'inventariofijo':inventariofijo
            },
        success:function(respuestaC){
             if (respuestaC == "1")
              {
                swal(
                 'Incorrecto!',
                 'El tipo de usuario ya existe!',
                 'warning');
              }
              else
              {
               
                iniciarTipoUsuario();
                llenarTipoUsuarios();
                swal(
                 'Guardado!',
                 'El registro se ha guardado!',
                 'success');
              }
           

        },
        error:function(xhr,status){
            //no se encontro el archivo donde se procesa la peticion Ajax
            alert("no se muestra");
        }
    });
}
    e.preventDefault();
    return false;

});

$("#frmNuevoSolicitudMaterial").submit(function(e){
  
   
    var producto =  $("#producto").val();
    var descripcion =  $("#descripcion").val();
    var cantidad =  $("#cantidad").val();
    var unidad =  $("#unidad").val();
    $.ajax({
        url:"../solicitud_material/solicitud_material_insert.php",
        type:"POST",
        dateType:"html",
        data:{
                
                'producto':producto,
                'descripcion':descripcion,
                'cantidad':cantidad,
                'unidad':unidad
            },
        success:function(respuestaC){
                MostrarMaterialesSolicitados();
                IniciarSolicitudMaterial();
                alertify.success('Producto Agregado',2);

        },
        error:function(xhr,status){
            //no se encontro el archivo donde se procesa la peticion Ajax
            alert("no se muestra");
        }
    });
    e.preventDefault();
    return false;
});

$("#frmNuevoOrdenSalida").submit(function(e){
  
  if($('#almacen').prop('checked')) 
        {  
            var esfijo = 0;
            var idproducto =  $("#productoalmacen").val();
            var cantidad =  $("#cantidad").val();
            var motivo =  $("#motivo").val();
        }
    if($('#fijo').prop('checked')) 
        {
            var esfijo = 1;
            var idproducto =  $("#productofijo").val();
            var cantidad =  1;
            var motivo =  $("#motivo").val();
        }
    $.ajax({
        url:"../orden_salida/orden_salida_insert.php",
        type:"POST",
        dateType:"html",
        data:{
                
                'esfijo':esfijo,
                'idproducto':idproducto,
                'cantidad':cantidad,
                'motivo':motivo
            },
        success:function(respuestaC){
            if (respuestaC == "1")
              {
                 alertify.error('Insuficiente Material',2);
              }
              else
              {
                IniciarOrdenSalida();
                MostrarProductosSalidos();
                alertify.success('Producto Agregado',2);
              
           
              }
                // MostrarMaterialesSolicitados();
                // IniciarSolicitudMaterial();
                // alertify.success('Producto Agregado',2);

        },
        error:function(xhr,status){
            //no se encontro el archivo donde se procesa la peticion Ajax
            alert("no se muestra");
        }
    });
    e.preventDefault();
    return false;
});
