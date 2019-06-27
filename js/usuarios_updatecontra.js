$("#frmNuevaContrasena").submit(function(e){
  
    var nuevacontra = document.getElementById("nuevacontra").value;
    var confirmarcontra = document.getElementById("confirmarcontra").value;
  
  if (nuevacontra==confirmarcontra) 
  {
       $.ajax({
        url:"../c_usuarios/usuarios_updatecontra.php",
        type:"POST",
        dateType:"html",
        data:{
                'nuevacontra': nuevacontra

            },
        success:function(respuesta){
            
         
        window.location='../inicio/inicio_menu.php';
        },
        error:function(xhr,status){
            //no se encontro el archivo donde se procesa la peticion Ajax
            alert("no se muestra");
        }
    });
  }

  else  
  {
    document.getElementById("nuevacontra").value=null;
            document.getElementById("confirmarcontra").value=null;
            document.getElementById("nuevacontra").focus();

    swal(
                 'Incorrecto!',
                 'Contraseñas No Coinciden!',
                 'warning'
               );

  }
 
    e.preventDefault();
    return false;
});