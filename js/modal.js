 var speed='slow';
function ObtenerPuestos (id_puesto, enombrepuesto, edescripcion)
{    
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../c_puestos/puestos_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_puesto':id_puesto,
              'enombrepuesto':enombrepuesto,
              'edescripcion':edescripcion
        },
        success:function(respuesta){

                $("#edit").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();
    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })

     //$("#edit").modal("show").reset();
    $("#id_puesto").val(id_puesto);
    $("#enombrepuesto").val(enombrepuesto);
    $("#edescripcion").val(edescripcion);

  }
  


function UpdatePuestos (id_puesto,nombre, descripcion)
{
      var id_puesto = $("#id_puesto").val();
      var enombrepuesto = $("#enombrepuesto").val();
      var edescripcion = $("#edescripcion").val();
     if (enombrepuesto == "" || edescripcion == "")
      {
         swal(
                 'Incorrecto!',
                 'Los campos deben estar llenos!',
                 'warning'
               );
      }
    else {
      $.ajax({
        url:"../c_puestos/puestos_update.php",
        type:"POST",
        dateType:"html",
        data:{
                  'id_puesto':id_puesto,
                  'enombrepuesto':enombrepuesto,
                  'edescripcion':edescripcion
                 },
        success:function(respuesta){
  			 
            if (respuesta == "1")
             {
             	llenarPuestos();
               cerrarpuestos();
               iniciarPuestos();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
             }
             if (respuesta == "2")
              {

            alert("No se puede");
            swal(
                 'Incorrecto!',
                 'El puesto ya existe!',
                 'warning'
               );
              }

              if (respuesta == "3") 
              {
              	llenarPuestos();
                cerrarpuestos();
                iniciarPuestos();
          
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
              }
            else if (respuesta != "1" & respuesta != "2" & respuesta != "3")
           {
            alert("Sin respuesta");
             swal(
                 'Incorrecto!',
                 'El puesto ya existe!',
                 'warning'
               );
           }
            
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
  }
}

function cerrarpuestos()
{
	
	//$(this).removeData();
    $("#edit").modal("hide");
}

function ObtenerDepartamentos (id_departamento, enombredepartamento, esiglas)
{    
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../c_departamentos/departamentos_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_departamento':id_departamento,
              'enombredepartamento':enombredepartamento,
              'esiglas':esiglas
              

        },

        success:function(respuesta){

                // alert(id_departamento + enombredepartamento + esiglas);    
                $("#edit").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();

    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })

     //$("#edit").modal("show").reset();
    $("#id_departamento").val(id_departamento);
    $("#enombredepartamento").val(enombredepartamento);
    $("#esiglas").val(esiglas);

  }


function UpdateDepartamentos (id_departamento, enombredepartamento, esiglas)
{
      var id_departamento = $("#id_departamento").val();
      var enombredepartamento = $("#enombredepartamento").val();
      var esiglas = $("#esiglas").val();
      
     if (enombredepartamento == "")
      {
         swal(
                 'Incorrecto!',
                 'Los campos deben estar llenos!',
                 'warning'
               );
      }
    else {
      $.ajax({
        url:"../c_departamentos/departamentos_update.php",
        type:"POST",
        dateType:"html",
        data:{
                  'id_departamento':id_departamento,
                  'enombredepartamento':enombredepartamento,
                  'esiglas':esiglas
                 },
        success:function(respuesta){
         if (respuesta == "1")
          {
             llenarDepartamentos();
            cerrarDepartamentos();
            iniciarDepartamentos();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
          }
          if (respuesta == "2")
           {
               swal(
                 'Incorrecto!',
                 'El departamento ya existe!',
                 'warning'
               );
           }
           if (respuesta == "3")
            {
               llenarDepartamentos();
            cerrarDepartamentos();
            iniciarDepartamentos();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
            }
             else if (respuesta != "1" & respuesta != "2" & respuesta != "3")
           {
             swal(
                 'Incorrecto!',
                 'El departamento ya existe!',
                 'warning'
               );
           }
                                  },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
  }
}

function cerrarDepartamentos()
{
  
  //$(this).removeData();
    $("#edit").modal("hide");
}

function ObtenerPersonas (id_persona, enombre, epaterno, ematerno, ecivil, etelefono, ecorreo, ecolonia, ecalle, enumero, estado, new_select)// NEW_SELECT ES EL ID DEL MUNICIPIO
{   
  var change = false;
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
      $("#edit").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();
     });
    })
    $("#id_persona").val(id_persona);
    $("#enombre").val(enombre);
    $("#epaterno").val(epaterno);
    $("#ematerno").val(ematerno);
    $("#ecivil").val(ecivil);
    $("#etelefono").val(etelefono);
    $("#ecorreo").val(ecorreo);
    $("#ecolonia").val(ecolonia);
    $("#ecalle").val(ecalle);
    $("#enumero").val(enumero);
    $("#eestado").val(estado).change(seleccionadomodal(estado, new_select, change));

}

 function seleccionadomodal(val, id_municipio, change)
{
  if (change == true) 
  {
    $.ajax({
      type: 'POST',
      url: 'personas_selectmunicipiomodal.php',
      data: {
      get_option:val
      },
        success: function (response) {
        document.getElementById("municipioselec").innerHTML=response; 
      }
    });
    
  }
  else
  {
    
    $.ajax({
      type: 'POST',
      url: 'personas_selectmunicipiomodal.php',
      data: {
      get_option:val
      },
        success: function (response) {
        document.getElementById("municipioselec").innerHTML=response;
        $("#municipioselec").val(id_municipio); 
      }
    });
  }
 
}

function UpdatePersonas (id_persona, enombre, epaterno, ematerno, ecivil, etelefono, ecorreo, ecolonia, ecalle, enumero, estado, municipioselec)
{
      var id_persona = $("#id_persona").val();
      var enombre = $("#enombre").val();
      var epaterno = $("#epaterno").val();
      var ematerno = $("#ematerno").val();
      var ecivil = $("#ecivil").val();
      var etelefono = $("#etelefono").val();
      var ecorreo = $("#ecorreo").val();
      var ecolonia = $("#ecolonia").val();
      var ecalle = $("#ecalle").val();
      var enumero = $("#enumero").val();
      var estado = $("#eestado").val();
      var municipioselec = $("#municipioselec").val();
      
     if (enombre == "" || epaterno == "" || ematerno == "" || ecivil == "" || ecorreo == "" || ecolonia == "" || ecalle == "" || enumero == "" || estado == "" || municipioselec == "")
      {
         swal(
                 'Incorrecto!',
                 'Los campos deben estar llenos!',
                 'warning'
               );
      }
    else {
      $.ajax({
        url:"../c_personas/personas_update.php",
        type:"POST",
        dateType:"html",
        data:{
        		  'id_persona':id_persona,	
                  'enombre':enombre,
                  'epaterno':epaterno,
                  'ematerno':ematerno,
                  'ecivil':ecivil,
                  'etelefono':etelefono,
                  'ecorreo':ecorreo,
                  'ecolonia':ecolonia,
                  'ecalle':ecalle,
                  'enumero':enumero,
                  'estado':estado,
                  'municipioselec':municipioselec
                 },
        success:function(respuesta){
     		llenarPersonas();
            cerrarPersonas();
            iniciarPersonas();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
                                  },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
  }
}

function cerrarPersonas()
{
  
  //$(this).removeData();
    $("#edit").modal("hide");
}


function  ConfirmarContraUsuario (id_usuario, enombreusuario, etipousuario, econtrasena)
{
  swal({
      title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    })   .then(function () {

      $.ajax({
        url:"../c_usuarios/usuarios_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_usuario':id_usuario,
              'enombreusuario':enombreusuario,
              'etipousuario':etipousuario,
              'econtrasena':econtrasena

        },
        success:function(respuesta){

             
              $("#editcontra").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();
               });
             

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 
    // $("#editeditcontra").modal("show").reset();
    $("#id_usuariocontra").val(id_usuario);
    $("#cnombreusuario").val(enombreusuario);
    $("#ctipousuario").val(etipousuario);
    $("#contrareal").val(econtrasena);



     }) 

}

function VerificarContraUsuario (id_usuario, ccontrareal, ccontrasena1, cnombreusuario, ctipousuario)
{
   var id_usuario = $("#id_usuariocontra").val();
   var contrareal = $("#contrareal").val();
   var contrasena1 = $("#contrasena1").val();
   var cnombreusuario = $("#cnombreusuario").val();
   var ctipousuario = $("#ctipousuario").val();
 
  if (contrasena1 == contrareal) 
  {

    iniciarUsuariosModal1();
    $("#editcontra").modal("hide");

    $.ajax({
        url:"../c_usuarios/usuarios_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_usuario':id_usuario,
              'cnombreusuario':cnombreusuario,
              'ctipousuario':ctipousuario
        

        },
        success:function(respuesta){

                $("#edit").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                $(this).find('input, textarea, select').filter(':visible:first').focus();
                
    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

 
     //$("#edit").modal("show").reset();
    $("#id_usuario").val(id_usuario);
    $("#enombreusuario").val(cnombreusuario);
    $("#etipousuario").val(ctipousuario);
    document.getElementById("econtrasena").value = "";
    document.getElementById("econfirmarcontra").value = "";
  }  
  
  else if (contrasena1 != contrareal)
  {
    swal(
                 'Incorrecto!',
                 'Contraseña Incorrecta!',
                 'warning'
        );
    iniciarUsuariosModal1();

  }
    
}


function UpdateUsuarios (id_usuario, enombreusuario, etipousuario, econtrasena, econfirmarcontra)
{
      var id_usuario = $("#id_usuario").val();
      var enombreusuario = $("#enombreusuario").val();
      var etipousuario = $("#etipousuario").val();
      var econtrasena = $("#econtrasena").val();
      var econfirmarcontra = $("#econfirmarcontra").val();
     
     if (econtrasena == "" || econfirmarcontra == "" || enombreusuario =="")
      {
         swal(
                 'Incorrecto!',
                 'Los campos deben estar llenos!',
                 'warning'
               );
      }
    else if (econtrasena== econfirmarcontra) {
      $.ajax({
        url:"../c_usuarios/usuarios_update.php",
        type:"POST",
        dateType:"html",
        data:{
                  'id_usuario':id_usuario,
                  'enombreusuario':enombreusuario,
                  'etipousuario':etipousuario,
                  'econtrasena':econtrasena
                 },
        success:function(respuesta){
          if (respuesta == '1') 
          {
            // alert("MismoNombreSepuede");
            llenarUsuarios();
            cerrarUsuarios();
            iniciarUsuarios();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
           
          }
           if (respuesta == '2')
          {
            // llenarUsuarios();
            // cerrarUsuarios();
            // iniciarUsuarios();
              // alert("RepetidoNosePuede");

                swal(
                 'Incorrecto!',
                 'El usuario ya existe!',
                 'warning'
               );
          }

           if (respuesta == '3')
          {
               // alert("Sisepuede");
            llenarUsuarios();
            document.getElementById("econtrasena").value = "";
            document.getElementById("econfirmarcontra").value = "";
            cerrarUsuarios();
            iniciarUsuarios();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );

          }
           else if (respuesta != "1" & respuesta != "2" & respuesta != "3")
           {
             swal(
                 'Incorrecto!',
                 'El usuario ya existe!',
                 'warning'
               );
           }
},
        error:function(xhr,status){
            alert(xhr);
        },
    });
  }

  else  
  {

            swal(
                 'Incorrecto!',
                 'Contraseñas no coinciden!',
                 'warning'
               );
            document.getElementById("econtrasena").value = "";
            document.getElementById("econfirmarcontra").value = "";
            

  }
}

function cerrarUsuarios()
{
  
  //$(this).removeData();
    $("#edit").modal("hide");
}

function ObtenerTrabajadores (id_trabajador, cdepartamento, epuesto, efechaing, enumempleado, esucursal, earea)
{    
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../c_trabajadores/trabajadores_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_trabajador':id_trabajador,
              'cdepartamento':cdepartamento,
              'epuesto':epuesto,
              'efechaing':efechaing,
              'enumempleado':enumempleado,
              'esucursal':esucursal,
              'earea':earea
              

        },

        success:function(respuesta){

                // alert(cdepartamento);
                $("#edit").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();

    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })
 if (epuesto == "82") 
    {
       // $('#areas').show();
       // document.getElementById("sucursal").disabled=true;
       // document.getElementById("noempleado").disabled=false;
        $('#enumero').show();
        $('#eareas').show();
        $("#id_trabajador").val(id_trabajador);
        $("#edepartamento").val(cdepartamento);
        $("#epuesto").val(epuesto);
        $("#efechaing").val(efechaing);
        $("#enumempleado").val(enumempleado);
        $('#eextension').hide();
        $("#earea").val(earea);


    }
     if (epuesto == "83" || epuesto == "86" || epuesto == "87")
    {
        // $('#areas').hide();
        // document.getElementById("sucursal").disabled=true;
        // document.getElementById("noempleado").disabled=false;
        $("#id_trabajador").val(id_trabajador);
        $("#edepartamento").val(cdepartamento);
        $("#epuesto").val(epuesto);
        $("#efechaing").val(efechaing);
        $("#enumempleado").val(enumempleado);
        $('#eextension').hide();
        $('#eareas').hide();
        $('#enumero').show();
    }

   if (epuesto == "84")
    { 
    // $('#areas').hide();
    // document.getElementById("noempleado").value="";
    // document.getElementById("noempleado").disabled=true;
    // document.getElementById("sucursal").disabled=false;
        $("#id_trabajador").val(id_trabajador);
        $("#edepartamento").val(cdepartamento);
        $("#epuesto").val(epuesto);
        $("#efechaing").val(efechaing);
        $("#esucursal").val(esucursal);
        $('#enumero').hide();
        $('#eareas').hide();
        $('#eextension').show();

    }

   if (epuesto == "81" || epuesto == "85" || epuesto >= "88")
    {
       // $('#areas').hide();
       // document.getElementById("noempleado").disabled=false;
       // document.getElementById("sucursal").disabled=false;
        $('#enumero').show();
        $('#eextension').show();
        $("#id_trabajador").val(id_trabajador);
        $("#edepartamento").val(cdepartamento);
        $("#epuesto").val(epuesto);
        $("#efechaing").val(efechaing);
        $("#enumempleado").val(enumempleado);
        $("#esucursal").val(esucursal);
        $('#eareas').hide();

    }
  }


function UpdateTrabajadores (id_trabajador, cdepartamento, epuesto, efechaing, enumempleado, esucursal, earea)
{
      var id_trabajador = $("#id_trabajador").val();
      var edepartamento = $("#edepartamento").val();
      var epuesto = $("#epuesto").val();
      var efechaing = $("#efechaing").val();
      var enumempleado = $("#enumempleado").val();
      var esucursal = $("#esucursal").val();
      var earea = $("#earea").val();
    
      $.ajax({
        url:"../c_trabajadores/trabajadores_update.php",
        type:"POST",
        dateType:"html",
        data:{
                  'id_trabajador':id_trabajador,
                  'edepartamento':edepartamento,
                  'epuesto':epuesto,
                  'efechaing':efechaing,
                  'enumempleado':enumempleado,
                  'esucursal':esucursal,
                  'earea':earea
                 },
        success:function(respuesta){
    
          if (respuesta == "1") 
          {
              llenarTrabajadores ();
            cerrarTrabajadores ();
           
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
            // alert("MismoNumeroSePuede");
          }
          if (respuesta == "2") 
          {
              swal(
                 'Incorrecto!',
                 'El número de empleado ya existe!',
                 'warning'
               );
              // alert("YaExisteNosePuede");
          }

          if (respuesta == "3") 
          {
            // alert("NoExisteSisepuede");
              llenarTrabajadores ();
            cerrarTrabajadores ();
           
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
          }
          
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
}

function cerrarTrabajadores ()
{
  
  //$(this).removeData();
    $("#edit").modal("hide");
}


function ObtenerSucursales (id_sucursal, enombresucursal, edireccion ,edescripcion, ecorreo, etelefono, earea)
{    
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../c_sucursales/sucursales_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_sucursal':id_sucursal,
              'enombresucursal':enombresucursal,
              'edireccion':edireccion,
              'edescripcion':edescripcion,
              'ecorreo':ecorreo,
              'etelefono':etelefono,
              'earea':earea
        },
        success:function(respuesta){

                $("#edit").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();
    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })

     //$("#edit").modal("show").reset();
    $("#id_sucursal").val(id_sucursal);
    $("#enombresucursal").val(enombresucursal);
    $("#edireccion").val(edireccion);
    $("#edescripcion").val(edescripcion);
    $("#ecorreo").val(ecorreo);
    $("#etelefono").val(etelefono);
    $("#earea").val(earea);



  }
  


function UpdateSucursales (id_sucursal, enombresucursal, edireccion, edescripcion, ecorreo, etelefono, earea)
{
      var id_sucursal = $("#id_sucursal").val();
      var enombresucursal = $("#enombresucursal").val();
      var edireccion = $("#edireccion").val();
      var edescripcion = $("#edescripcion").val();
      var ecorreo = $("#ecorreo").val();
      var etelefono = $("#etelefono").val();
      var earea = $("#earea").val();
      if (enombresucursal == "" || edireccion == "" || edescripcion == "" || ecorreo == "" || etelefono == "")
      {
         swal(
                 'Incorrecto!',
                 'Los campos deben estar llenos!',
                 'warning'
               );
      }
    else {
    
      $.ajax({
        url:"../c_sucursales/sucursales_update.php",
        type:"POST",
        dateType:"html",
        data:{
                     'id_sucursal':id_sucursal,
                     'enombresucursal':enombresucursal,
                     'edireccion':edireccion,
                     'edescripcion':edescripcion,
                     'ecorreo':ecorreo,
                     'etelefono':etelefono,
                     'earea':earea
                 },
        success:function(respuesta){
          
          if (respuesta == "1") 
          {
             llenarSucursales();
            cerrarSucursales();
            iniciarSucursales();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
          }
          if (respuesta == "2") 
          {
             swal(
                 'Incorrecto!',
                 'La sucursal ya existe!',
                 'warning'
               );
          }
          if (respuesta == "3") 
          {
             llenarSucursales();
            cerrarSucursales();
            iniciarSucursales();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
          }
          else if (respuesta != "1" & respuesta != "2" & respuesta != "3")
           {
             swal(
                 'Incorrecto!',
                 'La sucursal ya existe!',
                 'warning'
               );
           }
            
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
  }    
}

function cerrarSucursales()
{
  
  //$(this).removeData();
    $("#edit").modal("hide");
}


function ResetPassword(id_usuario){
    var id_usuario=id_usuario;
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas reiniciar la contraseña del Usuario!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#12A439',
      cancelButtonColor: '#DC7B3A',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../c_usuarios/usuarios_resetcontra.php",
            type:"POST",
            dateType:"html",
            data:{'id_usuario':id_usuario},
            success:function(respuesta){   
              llenarUsuarios();
                 alertify.success('Contraseña Reiniciada',3);
                
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra");
            }
        });
    //fin de ajax
    })
}


function ObtenerTipoProducto (id_tipo_producto, enombre, edescripcion)
{    
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../c_productos_tipo/productos_tipo_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_tipo_producto':id_tipo_producto,
              'enombre':enombre,
              'edescripcion':edescripcion
        },
        success:function(respuesta){

                $("#edit").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();
    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })

     //$("#edit").modal("show").reset();
    $("#id_tipo_producto").val(id_tipo_producto);
    $("#enombre").val(enombre);
    $("#edescripcion").val(edescripcion);



  }
  


function UpdateTipoProducto (id_tipo_producto, enombre, edescripcion)
{
      var id_tipo_producto = $("#id_tipo_producto").val();
      var enombre = $("#enombre").val();
      var edescripcion = $("#edescripcion").val();
     
      if (enombre == "" || edescripcion =="")
      {
         swal(
                 'Incorrecto!',
                 'Los campos deben estar llenos!',
                 'warning'
               );
      }
      else {
      $.ajax({
        url:"../c_productos_tipo/productos_tipo_update.php",
        type:"POST",
        dateType:"html",
        data:{
                     'id_tipo_producto':id_tipo_producto,
                     'enombre':enombre,
                     'edescripcion':edescripcion
                 },
        success:function(respuesta){
          // alert(id_tipo_producto + "-" + enombre + "-" +respuesta);
         if (respuesta == "1") 
         {
          llenarTipoProducto  ();
            cerrarTipoProducto  ();
            iniciarTipoProducto  ();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
         }  
         if (respuesta == "2")
          {
            swal(
                 'Incorrecto!',
                 'El tipo de producto ya existe!',
                 'warning'
               );
          }
          if (respuesta == "3")
           {
            llenarTipoProducto  ();
            cerrarTipoProducto  ();
            iniciarTipoProducto  ();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
           }
           else if (respuesta != "1" & respuesta != "2" & respuesta != "3")
           {
             swal(
                 'Incorrecto!',
                 'El tipo de producto ya existe!',
                 'warning'
               );
           }
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
  }
}

function cerrarTipoProducto  ()
{
  
  //$(this).removeData();
    $("#edit").modal("hide");
}




function ObtenerProductos (id_producto, enombre, etipoproducto, econsumible, idunidad, edescripcion, eminimo)
{    
 
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../c_productos/productos_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_producto':id_producto,
              'enombre':enombre,
              'etipoproducto':etipoproducto,
              'econsumible':econsumible,
              'idunidad':idunidad,
              'edescripcion':edescripcion,
              'eminimo':eminimo     
        },
        success:function(respuesta){
              

                $("#editproductos").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();
    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })

          $("#id_producto").val(id_producto);
          $("#enombre").val(enombre);
          $("#edescripcion").val(edescripcion);
          $("#etipoproducto").val(etipoproducto);
          $("#econsumible").val(econsumible);
          $("#idunidad").val(idunidad);
          $("#eminimo").val(eminimo);
  
  }
  


function UpdateProductos (id_producto, enombre, edescripcion, etipoproducto, econsumible, efijo, efolio, idunidad, eminimo)
{
      var id_producto = $("#id_producto").val();
      var enombre = $("#enombre").val();
      var edescripcion = $("#edescripcion").val();
      var etipoproducto = $("#etipoproducto").val();
      var econsumible = $("#econsumible").val();
      var efolio = $("#efolio").val();
      var idunidad = $("#idunidad").val();
      var eminimo = $("#eminimo").val();
      
                     if (enombre == "" || edescripcion == "" || eminimo == "")
                  {

                     swal(
                             'Incorrecto!',
                             'Los campos deben estar llenos!',
                             'warning'
                           );
                  }
                else {
                  $.ajax({
                    url:"../c_productos/productos_update.php",
                    type:"POST",
                    dateType:"html",
                    data:{
                              'id_producto':id_producto,
                              'enombre':enombre,
                              'edescripcion':edescripcion,
                              'etipoproducto':etipoproducto,
                              'econsumible':econsumible,
                              'efolio':efolio,
                              'idunidad':idunidad,
                              'eminimo':eminimo
                             },
                    success:function(respuesta){
                     
                        if (respuesta == "1")
                         {
                      
                           llenarProductos();
                           cerrarProductos(); 
                           iniciarProductos();
                           // alert("1");
                        
                        swal(
                             'Modificado!',
                             'El registro se ha modificado!',
                             'success'
                           );
                         }
                         if (respuesta == "2")
                          {

                            // alert("2");
                        swal(
                             'Incorrecto!',
                             'El producto ya existe!',
                             'warning'
                           );
                          }

                        else if (respuesta != "1" & respuesta != "2")
                       {
                        alert("Ninguno");
                         swal(
                             'Incorrecto!',
                             'El producto ya existe!',
                             'warning'
                           );
                       }
                        
                    },
                    error:function(xhr,status){
                        alert(xhr);
                    },
                
                });
              }
    
}

function cerrarProductos()
{
  
  //$(this).removeData();
    $("#editproductos").modal("hide");
}


function AgregarPrestamo(id_producto)
{
     var cantidad = $("#cantidad"+id_producto).val();
    
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

          llenarListadoInferiorPrestamo();
          MostrarListadoInferiorPrestamo();
          alertify.success('Producto Agregado',2);
        }
        else if (respuesta == "3") 
        {

           swal(
                 'Incorrecto!',
                 'No hay suficiente material!',
                 'warning'
               );
        }
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function EliminarProductoPrestamo(id_detalle_prestamo)
{
    $.ajax({
        url:"../prestamo_material/prestamo_material_deleteinferior.php",
        type:"POST",
        dateType:"html",
        data:{
          'id_detalle_prestamo':id_detalle_prestamo
        },
        success:function(respuesta){
        alertify.error('Producto Eliminado',2);
        llenarListadoInferiorPrestamo();
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function EliminarProductoSolicitud(id_solicitud_material_detalle)
{
    $.ajax({
        url:"../solicitud_material/solicitud_material_delete.php",
        type:"POST",
        dateType:"html",
        data:{
          'id_solicitud_material_detalle':id_solicitud_material_detalle
        },
        success:function(respuesta){
        alertify.error('Producto Eliminado',2);
        llenarMaterialesSolicitados();
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function EliminarPrestamoCancelar()
{
    $.ajax({
        url:"../prestamo_material/prestamo_material_deletecancelar.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
        BtnDeshabilitarPrestamo();
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function EliminarProductoOrdenSalida(id_orden_salida_detalle, productofijo)
{
    $.ajax({
        url:"../orden_salida/orden_salida_deleteinferior.php",
        type:"POST",
        dateType:"html",
        data:{
          'id_orden_salida_detalle':id_orden_salida_detalle,
          'productofijo':productofijo
        },
        success:function(respuesta){
          llenarOrdenSalida();
        alertify.error('Producto Eliminado',2);
        // llenarListadoInferiorPrestamo();
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function FinalizarPrestamo()
{
   var motivo = $("#motivo").val();
   var solicitante = $("#solicitante").val();
   var taller = $("#taller").val();
    $.ajax({
        url:"../prestamo_material/prestamo_material_insert_prestamo.php",
        type:"POST",
        dateType:"html",
        data:{
          'motivo':motivo,
          'solicitante':solicitante,
          'taller':taller
        },
        success:function(respuesta){
            if (respuesta == "1")
                {
                    document.getElementById("solicitante").disabled=false;
                    document.getElementById("motivo").disabled=false;
                    document.getElementById("motivo").value = "";
                    $('#listaprestamoinferior').hide();
                    $('#listaProductos').hide();
                    $('#finalizar').hide();
                    
                swal(
                 'Listo!',
                 'Prestamo de Material Exitoso!',
                 'success');
                }

            else if (respuesta == "2")
                {
                
                      swal(
                 'Incorrecto!',
                 'Agregue productos al prestamo!',
                 'warning');
                }
                
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function ObtenerStatusPrestamo (id_prestamo, status)
{    

    swal({
    title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../prestamo_material_listado/prestamo_materialListado_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_prestamo':id_prestamo,
              'status':status
        },
        success:function(respuesta){
                $("#edit").modal("show");
                document.getElementById("comentario").value = "";
          document.getElementById("comentario").focus();
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();
    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })

     //$("#edit").modal("show").reset();
    $("#id_prestamo").val(id_prestamo);
    // $("#status").val(status);

  }
  


function UpdateStatusPrestamo (id_prestamo,status, comentario)
{
      var id_prestamo = $("#id_prestamo").val();
      var status = $("#status").val();
      var comentario = $("#comentario").val();
      if (status == 3) 
      {

        cerrarPrestamo();
          $.ajax({
        url:"../prestamo_material_listado/prestamo_materialListado_updatecancelacion.php",
        type:"POST",
        dateType:"html",
        data:{
                  'id_prestamo':id_prestamo
                 },
        success:function(respuesta)
        {
         
         $.ajax({
        url:"../prestamo_material_listado/prestamo_materialListado_modalcancelacion.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_prestamo':id_prestamo,
              'comentario':comentario,
              'status':status
        }, 
        success:function(respuesta){
                $("#editar").modal("show");
  //               $(".modal").on("hidden.bs.modal", function() {
  //   $("#contenedorp").empty();
  // });
    $('.modal').on('shown.bs.modal', function (e) {
      $(this).find('input, textarea, select').filter(':visible:first').focus();
    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    });
        
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
          
      }
      else if (status == 1 || status == 2)
      {
      $.ajax({
        url:"../prestamo_material_listado/prestamo_materialListado_update.php",
        type:"POST",
        dateType:"html",
        data:{
                  'id_prestamo':id_prestamo,
                  'status':status,
                  'comentario':comentario
                 },
        success:function(respuesta){
         
            
              cerrarPrestamo();
              llenarListaPrestamos();
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
          
 
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
   }
}

function cerrarPrestamo()
{
  
  //$(this).removeData();
    $("#edit").modal("hide");
}

function MostrarPreviaPrestamo(numero_orden)
{
    // $row0=mysqli_fetch_row($qry0)
    $.ajax({
        url:"../orden_compra/orden_compra_insertemporal.php",
        type:"POST",
        dateType:"html",
        data:{
          'numero_orden':numero_orden
        },
        success:function(respuesta){
          MostrarPrevia();
          llenarListadoPrevia();
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}


// function EliminarListado()
// {
//     $.ajax({
//         url:"../orden_compra/orden_compra_deleteprevia.php",
//         type:"POST",
//         dateType:"html",
//         data:{
//         },
//         success:function(respuesta){
//         llenarListadoPrevia();
//         },
//         error:function(xhr,status){
//             alert("no se muestra");
//         }
//     });
// }


function ObtenerTalleres (id_taller, enombre, etallerista, edescripcion)
{    
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../c_talleres/talleres_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_taller':id_taller,
              'enombre':enombre,
              'etallerista':etallerista,
              'edescripcion':edescripcion
        },
        success:function(respuesta){

                $("#edit").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();
    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })

     //$("#edit").modal("show").reset();
    $("#id_taller").val(id_taller);
    $("#enombre").val(enombre);
    $("#etallerista").val(etallerista);
    $("#edescripcion").val(edescripcion);

  }
  


function UpdateTalleres (id_taller, enombre, etallerista, edescripcion)
{
      var id_taller = $("#id_taller").val();
      var enombre = $("#enombre").val();
      var etallerista = $("#etallerista").val();
      var edescripcion = $("#edescripcion").val();
     if (enombre == "")
      {
         swal(
                 'Incorrecto!',
                 'Los campos deben estar llenos!',
                 'warning'
               );
      }
    else {
      $.ajax({
        url:"../c_talleres/talleres_update.php",
        type:"POST",
        dateType:"html",
        data:{
                  'id_taller':id_taller,
                  'enombre':enombre,
                  'etallerista':etallerista,
                  'edescripcion':edescripcion
                 },
        success:function(respuesta){
         
            if (respuesta == "1")
             {
              llenarTalleres();
               cerrartalleres();
               iniciarTalleres();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
             }
             if (respuesta == "2")
              {

            // alert("No se puede");
            swal(
                 'Incorrecto!',
                 'El taller ya existe!',
                 'warning'
               );
              }

              if (respuesta == "3") 
              {
                 llenarTalleres();
               cerrartalleres();
               iniciarTalleres();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
              }
            else if (respuesta != "1" & respuesta != "2" & respuesta != "3")
           {
             swal(
                 'Incorrecto!',
                 'El taller ya existe!',
                 'warning'
               );
           }
            
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
  }
}

function cerrartalleres()
{
  
  //$(this).removeData();
    $("#edit").modal("hide");
}


function ObtenerInventarios (id_inventario, eproducto, ecantidad)
{    
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../inventario/inventario_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_inventario':id_inventario,
              'eproducto':eproducto,
              'ecantidad':ecantidad
        },
        success:function(respuesta){

                $("#edit").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();
    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })

     //$("#edit").modal("show").reset();
    $("#id_inventario").val(id_inventario);
    $("#eproducto").val(eproducto);
    $("#ecantidad").val(ecantidad);

  }
  

function UpdateInventarios (id_inventario,eproducto, eagregar)
{
      var id_inventario = $("#id_inventario").val();
      var eproducto = $("#eproducto").val();
      var eagregar = $("#eagregar").val();
     if (eagregar == "")
      {
          document.getElementById("eagregar").value = "";
          document.getElementById("eagregar").focus();
         swal(
                 'Incorrecto!',
                 'Los campos deben estar llenos!',
                 'warning'
               );
      }
    else {
      $.ajax({
        url:"../inventario/inventario_update.php",
        type:"POST",
        dateType:"html",
        data:{
                  'id_inventario':id_inventario,
                  'eproducto':eproducto,
                  'eagregar':eagregar
                 },
        success:function(respuesta){

          if (respuesta == 1) 
          {

              llenarInventarios();
               cerrarinventarios();
               iniciarInventarios();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
           
          }
          else
          {
              document.getElementById("eagregar").value = "";
              document.getElementById("eagregar").focus();
              swal(
                 'Incorrecto!',
                 'Cantidad Invalida!',
                 'warning'
               ); 
          }
       
            
            
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
  }
}

function cerrarinventarios()
{
  
  // $(this).removeData();
    $("#edit").modal("hide");
    document.getElementById("eagregar").value = "";
    document.getElementById("eagregar").focus();
 
}

function AbrirModalUnidad ()
{    
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas Agregar Unidad!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../c_productos/productos_modal_unidad.php",
        type:"POST",
        dateType:"html",
        data: {},
        success:function(respuesta){

                $("#editarunidad").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus(); });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })   

  }

function AgregarUnidad (eunidad)
{

      var eunidad = $("#tipouni").val();
     
     if (eunidad == "")
      {
        
         swal(
                 'Incorrecto!',
                 'Los campos deben estar llenos!',
                 'warning'
               );
          document.getElementById("tipouni").value = "";
          document.getElementById("tipouni").focus();
         
      }
    else {
      $.ajax({
        url:"../c_productos/productos_insert_unidad_medida.php",
        type:"POST",
        dateType:"html",
        data:{
                  'eunidad':eunidad
                 },
        success:function(respuesta){

          if (respuesta == "1") 
          {
    //       		$('#tipoproducto').select2();
				// $('#consumible').select2();
				// $('#unidad').select2();

              $("#cbounidad").load(" #cbounidad");
              swal(
                 'Exitoso!',
                 'Unidad Agregada!',
                 'success'
               );
              document.getElementById("tipouni").value = "";
              document.getElementById("tipouni").focus();
              cerrarunidad();
          }
          else if (respuesta == "2")
          {
              
              swal(
                 'Incorrecto!',
                 'Unidad Existente!',
                 'warning'
               ); 
              document.getElementById("tipouni").value = "";
              document.getElementById("tipouni").focus();
          }
          else 
          {
            alert("Error del sistema, disulpe las molestias");
          }
       
            
            
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
  }
}

function cerrarunidad()
{
  
  // $(this).removeData();
    $("#editarunidad").modal("hide");
    document.getElementById("eunidad").value = "";
    document.getElementById("eunidad").focus();
 
}

function ObtenerInventarioFijo (id_inventario_fijo, eqr, eci, eproducto, emodelo, eserie, emarca, econdiciones)
{    
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../inventario_fijo/inventario_fijo_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_inventario_fijo':id_inventario_fijo,
              'eqr':eqr,
              'eci':eci,
              'eproducto':eproducto,
              'emodelo':emodelo,
              'eserie':eserie,
              'emarca':emarca,
              'econdiciones':econdiciones
        },
        success:function(respuesta){

                $("#edit").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();
    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })

     //$("#edit").modal("show").reset();
    $("#id_inventario_fijo").val(id_inventario_fijo);
    $("#eqr").val(eqr);
    $("#eci").val(eci);
    $("#eproducto").val(eproducto);
    $("#emodelo").val(emodelo);
    $("#eserie").val(eserie);
    $("#emarca").val(emarca);
    $("#econdiciones").val(econdiciones);

  }
  


function UpdateInventarioFijo (id_inventario_fijo, eqr, eci, eproducto, emodelo, eserie, emarca, econdiciones)
{
      var id_inventario_fijo = $("#id_inventario_fijo").val();
      var eqr = $("#eqr").val();
      var eci = $("#eci").val();
      var eproducto = $("#eproducto").val();
      var emodelo = $("#emodelo").val();
      var eserie = $("#eserie").val();
      var emarca = $("#emarca").val();
      var econdiciones = $("#econdiciones").val();

     if (id_inventario_fijo == "" || eqr == ""  || eci == ""  || eproducto == ""  || emodelo == ""  || eserie == ""  || emarca == ""  || econdiciones == "")
      {
         swal(
                 'Incorrecto!',
                 'Los Campos Deben Estar Llenos!',
                 'warning'
               );
      }
    else {
      $.ajax({
        url:"../inventario_fijo/inventario_fijo_update.php",
        type:"POST",
        dateType:"html",
        data:{
                  'id_inventario_fijo':id_inventario_fijo,
                  'eqr':eqr,
                  'eci':eci,
                  'eproducto':eproducto,
                  'emodelo':emodelo,
                  'eserie':eserie,
                  'emarca':emarca,
                  'econdiciones':econdiciones
                 },
        success:function(respuesta){
         
            if (respuesta == "1")
             {
              llenarInventarioFijo();
               cerrarinventariofijo();
               iniciarInventarioFijo();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
             }
             else if (respuesta == "2")
              {

           
            swal(
                 'Incorrecto!',
                 'El QR ya existe!',
                 'warning'
               );
              }
               else if (respuesta == "3")
              {

           
            swal(
                 'Incorrecto!',
                 'El CI ya existe!',
                 'warning'
               );
              }

              else if (respuesta == "4") 
              {

            swal(
                 'Incorrecto!',
                 'El producto ya existe!',
                 'warning'
               );
              }
            else if (respuesta != "1" & respuesta != "2" & respuesta != "3")
           {
            
             alert("Error del sistema, disculpe" + id_inventario_fijo);
           }
            
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
  }
}

function cerrarinventariofijo()
{
  
  //$(this).removeData();
    $("#edit").modal("hide");
}


function MostrarDetallePrestamo (folio)
{
     $.ajax({
        url:"../prestamo_material_listado/prestamo_materialListado_Updatevista.php",
        type:"POST",
        dateType:"html",
        data:{
                  'folio':folio
                 },
        success:function(respuesta){
         
            if (respuesta == "1")
             {
              MostrarPrevia();
              llenarDetallePrestamo();
              llenarListaPrestamos();
              alertify.success('Ver Detalles',2);
             }
             else
              {
                OcultarPrevia();
                llenarListaPrestamos();
                alertify.error('Ocultar Detalles',2);

              }
            
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
  
}


function ObtenerTipoUsuario (id_tipo_usuario, enombre, edescripcion, departamentos, inventario_almacen, inventario_fijo, listado_prestamos,
  listado_salidas, listado_solicitudes, orden_salida, personas, prestamo_material, productos, productos_tipo, puestos, solicitud_material,
  sucursales, talleres, trabajadores, usuarios, usuarios_tipo)
{    
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../c_usuarios_tipo/usuarios_tipo_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_tipo_usuario':id_tipo_usuario,
              'enombre':enombre,
              'edescripcion':edescripcion,
              'departamentos':departamentos,
              'inventario_almacen':inventario_almacen,
              'inventario_fijo':inventario_fijo,
              'listado_prestamos':listado_prestamos,
              'listado_salidas':listado_salidas,
              'listado_solicitudes':listado_solicitudes,
              'orden_salida':orden_salida,
              'personas':personas,
              'prestamo_material':prestamo_material,
              'productos':productos,
              'productos_tipo':productos_tipo,
              'puestos':puestos,
              'solicitud_material':solicitud_material,
              'sucursales':sucursales,
              'talleres':talleres,
              'trabajadores':trabajadores,
              'usuarios':usuarios,
              'usuarios_tipo':usuarios_tipo
        },
        success:function(respuesta){

                $("#edit").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();
    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })

     //$("#edit").modal("show").reset();
    $("#id_tipo_usuario").val(id_tipo_usuario);
    $("#enombre").val(enombre);
    $("#edescripcion").val(edescripcion);
    $("#edepartamentos").val(departamentos);

  }
  


function UpdateTipoUsuario  (id_puesto,nombre, descripcion)
{
      var id_puesto = $("#id_puesto").val();
      var enombrepuesto = $("#enombrepuesto").val();
      var edescripcion = $("#edescripcion").val();
     if (enombrepuesto == "" || edescripcion == "")
      {
         swal(
                 'Incorrecto!',
                 'Los campos deben estar llenos!',
                 'warning'
               );
      }
    else {
      $.ajax({
        url:"../c_puestos/puestos_update.php",
        type:"POST",
        dateType:"html",
        data:{
                  'id_puesto':id_puesto,
                  'enombrepuesto':enombrepuesto,
                  'edescripcion':edescripcion
                 },
        success:function(respuesta){
         
            if (respuesta == "1")
             {
              llenarPuestos();
               cerrarpuestos();
               iniciarPuestos();
            
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
             }
             if (respuesta == "2")
              {

            alert("No se puede");
            swal(
                 'Incorrecto!',
                 'El puesto ya existe!',
                 'warning'
               );
              }

              if (respuesta == "3") 
              {
                llenarPuestos();
                cerrarpuestos();
                iniciarPuestos();
          
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
              }
            else if (respuesta != "1" & respuesta != "2" & respuesta != "3")
           {
            alert("Sin respuesta");
             swal(
                 'Incorrecto!',
                 'El puesto ya existe!',
                 'warning'
               );
           }
            
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
  }
}

function cerrartipousuario ()
{
  
  //$(this).removeData();
    $("#edit").modal("hide");
}

function FinalizarSolicitudMaterial()
{
 var speed='slow';
    $.ajax({
        url:"../solicitud_material/solicitud_material_insertsolicitud.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            if (respuesta == "1")
                {
                  ObtenerComentarioSolicitud();
                    $('#listaSolicitudProductos').slideUp(speed); 
                    $('#finalizarsolicitud').slideUp(speed); 
                    
                }

            else if (respuesta == "2")
                {
                  $('#listaSolicitudProductos').slideUp(speed); 
                    $('#finalizarsolicitud').slideUp(speed); 
                
                      swal(
                 'Incorrecto!',
                 'Agregue productos a la Solicitud!',
                 'warning');
                }
                
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function ObtenerComentarioSolicitud ()
{    
    swal({
      title: 'Casi Listo!',
      text: "¿Deseas Agregar Un Comentario?",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, Agregar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../solicitud_material/solicitud_material_modal_comentario.php",
        type:"POST",
        dateType:"html",
        data: {},
        success:function(respuesta){

                $("#editcomentario").modal("show");
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();
    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })

    //  //$("#edit").modal("show").reset();
    // $("#id_puesto").val(id_puesto);
    // $("#enombrepuesto").val(enombrepuesto);
    // $("#edescripcion").val(edescripcion);

  }

  function AgregarComentario (ecomentario)
{

      var ecomentario = $("#coment").val();
    // alert(ecomentario);
     if (ecomentario == "")
      {
        
         swal(
                 'Incorrecto!',
                 'Los campos deben estar llenos!',
                 'warning'
               );

          document.getElementById("coment").value = "";
          document.getElementById("coment").focus();
         
      }
    else {
      $.ajax({
        url:"../solicitud_material/solicitud_material_updatecomentario.php",
        type:"POST",
        dateType:"html",
        data:{
                  'ecomentario':ecomentario
                 },
        success:function(respuesta){
          
                swal(
                 'Listo!',
                 'Solicitud de Material Exitosa!',
                 'success');
              cerrarcomentario();
        
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
  }
}

function cerrarcomentario ()
{
  
  //$(this).removeData();
    $("#editcomentario").modal("hide");
}

function EliminarSolicitudCancelar()
{
    $.ajax({
        url:"../solicitud_material/solicitud_material_deletecancelar.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
        BtnDeshabilitarSolicitud();
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function MostrarDetalleSolicitud(folio, id_sucursal)
{
     $.ajax({
        url:"../solicitud_material_listado/solicitud_materialListado_Updatevista.php",
        type:"POST",
        dateType:"html",
        data:{
                  'folio':folio,
                  'id_sucursal':id_sucursal
                 },
        success:function(respuesta){
         
            if (respuesta == "1")
             {
              MostrarPrevia();
              llenarDetalleSolicitud();
             llenarListaSolicitudes();
              alertify.success('Ver Detalles',2);
             }
             else
              {
                OcultarPrevia();
               llenarListaSolicitudes();
                alertify.error('Ocultar Detalles',2);

              }
            
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
  
}



function ObtenerStatusSolicitud (id_solicitud, status, donante, comentario)
{    

    swal({
    title: '¿Estas Seguro?',
      text: "Deseas editar el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si Editar',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    $.ajax({
        url:"../solicitud_material_listado/solicitud_materialListado_modal.php",
        type:"POST",
        dateType:"html",
        data: {
              'id_solicitud':id_solicitud,
              'status':status,
              'donante':donante,
              'comentario':comentario
        },
        success:function(respuesta){
                $("#edit").modal("show");
                if (comentario == "") 
                {
                  document.getElementById("comentario").value = "";
                  document.getElementById("comentario").focus();
                }
              
                $('.modal').on('shown.bs.modal', function (e) {
                 $(this).find('input, textarea, select').filter(':visible:first').focus();
    });

               
        },
        error:function(xhr,status){
            alert(xhr);
        },
        
    }); 

  })

     //$("#edit").modal("show").reset();
    $("#id_solicitud").val(id_solicitud);
    $("#status").val(status);
    $("#donante").val(donante);
    $("#comentario").val(comentario);


  }
  


function UpdateStatusSolicitud (id_solicitud,status, comentario, donante)
{
      var id_solicitud = $("#id_solicitud").val();
      var status = $("#status").val();
      var comentario = $("#comentario").val();
      var donante = $("#donante").val();
      if (status == 1) 
      {
        if (comentario == "") 
        {
           alertify.error('Agregue una Respuesta',2);
           var falso = 1;
        }
        if (donante == "" || donante == 0 || donante == null) 
        {
            alertify.error('Seleccione la Extensión Donante',2);
             var falso = 1;
        }

        if (falso != 1) 
        {
          $.ajax({
        url:"../solicitud_material_listado/solicitud_materialListado_update.php",
        type:"POST",
        dateType:"html",
        data:{
                  'id_solicitud':id_solicitud,
                  'status':status,
                  'comentario':comentario,
                  'donante':donante
                 },
        success:function(respuesta){
                   cerrarSolicitud();
              // llenarModalAutorizacion();
                  $.ajax({
              url:"../solicitud_material_listado/solicitud_materialListado_modalautorizacion.php",
              type:"POST",
              dateType:"html",
              data: {}, 
              success:function(respuesta){
                $("#editparcial").modal("show");
                 },
              error:function(xhr,status){
                  alert(xhr);
              },
              
                 });
         
          
 
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
         
        }
          
      }
      if (status == 2 || status == 4 || status == 0)
      {
      $.ajax({
        url:"../solicitud_material_listado/solicitud_materialListado_update.php",
        type:"POST",
        dateType:"html",
        data:{
                  'id_solicitud':id_solicitud,
                  'status':status,
                  'comentario':comentario,
                  'donante':donante
                 },
        success:function(respuesta){
         
            
              cerrarSolicitud();
              llenarListaSolicitudes();
              // alert(donante);
            swal(
                 'Modificado!',
                 'El registro se ha modificado!',
                 'success'
               );
          
 
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
   }
}

function cerrarSolicitud()
{
  
  //$(this).removeData();
    $("#edit").modal("hide");
}

function cerrarmodalautorizada()
{
  
    $("#editparcial").modal("hide");
}

function FinalizarSolicitud()
{
  llenarListaSolicitudes();
  cerrarmodalautorizada();
}

function FinalizarOrdenSalida()
{
   if($('#donacion').prop('checked')) 
   {
     var destino = $("#destino").val();
     var comentario = $("#comentario").val();
   }
   else
   {
     var destino = 0;
   }
  
    $.ajax({
        url:"../orden_salida/orden_salida_insert_orden.php",
        type:"POST",
        dateType:"html",
        data:{
          'destino':destino,
          'comentario':comentario
        },
        success:function(respuesta){
            if (respuesta == "1")
                {
                    document.getElementById("btniniciar").disabled=false;;
                    $('#listaproductossalidos').slideUp(speed);
                    $('#finalizarordensaldia').slideUp(speed);
                    $('#altaordensalida').slideUp(speed);

                    
                swal(
                 'Listo!',
                 'Orden de Salida Exitosa!',
                 'success');
                }

            else if (respuesta == "2")
                {
                
                      swal(
                 'Incorrecto!',
                 'Agregue productos a la Solicitud!',
                 'warning');
                }
                else
                {
                  alert("Falla del Sistema. Disculpe las molestias");
                }
                
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function EliminarOrdenSalidaCancelar()
{
    $.ajax({
        url:"../orden_salida/orden_salida_deletecancelar.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
          document.getElementById("btniniciar").disabled=false;;
          $('#listaproductossalidos').slideUp(speed);
          $('#finalizarordensaldia').slideUp(speed);
          $('#altaordensalida').slideUp(speed);
          alertify.error('Orden Cancelada',2);
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}

function MostrarDetalleOrdenSalida (folio, id_sucursal)
{
     $.ajax({
        url:"../orden_salida_listado/orden_salidalistado_Updatevista.php",
        type:"POST",
        dateType:"html",
        data:{
                  'folio':folio,
                  'id_sucursal':id_sucursal
                 },
        success:function(respuesta){
         
            if (respuesta == "1")
             {
              MostrarDetallesOrden();
              llenarOrdenSalidaDetalles();
              llenarOrdenSalidaListado();
              alertify.success('Ver Detalles',2);
             }
             else
              {
               OcultarDetallesOrden();
               llenarOrdenSalidaListado();
                alertify.error('Ocultar Detalles',2);

              }
            
        },
        error:function(xhr,status){
            alert(xhr);
        },
    
    });
  
}

function AgregarCantidadAutorizada(id_detalle_solicitud)
{
     var cantidad = $("#cantidad"+id_detalle_solicitud).val();
    
    $.ajax({
        url:"../solicitud_material_listado/solicitud_materialListado_insert.php",
        type:"POST",
        dateType:"html",
        data:{
          'id_detalle_solicitud':id_detalle_solicitud,
          'cantidad':cantidad
      
        },
        success:function(respuesta){
        if (respuesta == "1") 
        {
         alertify.error('Cantidad Incorrecta',2);
        }
        else if (respuesta == "2") 
        {

          // llenarListadoInferiorPrestamo();
          // MostrarListadoInferiorPrestamo();
          alertify.success('Producto Agregado',2);
        }
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });
}