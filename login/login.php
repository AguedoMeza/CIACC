<?php session_start();  
include ("../configuracion/conexion.php");
?>
<html>
<head>
 <link rel="Shortcut Icon" href="../assets/img/favicon.ico" type="image/x-icon" />
  <meta charset="utf-8">
  <title>- LOGIN- ALEASFOT DEVELOPMENT -</title>

  <link rel="stylesheet" type="text/css" href="../plugins/sweetalert2-master/dist/sweetalert2.css">
 

   

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="../assets/css/style.css">  
  <script src="../jquery-3.2.1.min.js"></script>
  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
</head>
<style>
	* {
margin: 0;
}
html, body {
height: 100%;
}
.wrapper {
min-height: 100%;
height: auto !important;
height: 100%;
margin: 0 auto -4em;
}
.footer, .push {
height: 4em;
}
</style>

<body bgcolor="#2a033d">
<div class="wraper">
<div class="container">
  <div class="info">
    <h1 style="color: white; font-family: Verdana;">-LOGIN-</h1>
  </div>
</div>
<section id="s_login">
<div class="form">
  <div ><img style="height: 150px; width: 200px;" src="../assets/img/logociacclogin.png"/></div>
  <form id="login" method="POST">
    <input type="text" placeholder="Usuario" name="usuario" id="usuario" autofocus/>
    <input type="password" placeholder="Contraseña" id="contrasena" name="contrasena"/>

     <input style="position: relative; right: 140px; " type="checkbox" id="cambio"> <div style="position: relative; left: 80px; margin-top:-28px; font-size: 15px;"> Cambiar Contraseña</div><br>
    <button>LOGIN</button>
  </form>
</div>
</section>


<section id="s_cambia_contra">
<div class="form">
  <div ><img style="height: 150px; width: 200px;" src="../assets/img/logociacclogin.png"/></div>
  <form id="frmNuevaContrasena" method="POST">
    <input type="password" placeholder="Cambiar contraseña" name="nuevacontra" id="nuevacontra" required autofocus/>
    <input type="password" placeholder="Verifica contraseña" id="confirmarcontra" required name="confirmarcontra"/>
   <!--   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3"> -->
    <button type="submit" id="btncambiarcontra">Cambiar Contraseña</button>
     <!-- </div> -->
    <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
    <input value="Cancelar" class="btn btn-danger pull-right" onclick="iniciarNuevaContra();">
    </div> -->
                   
              
                
                    
                  
    <!-- <br><br> <a href="#s_login">Cancelar</a> -->
  </form>
</div>
</section>
</div>  

<div class="footer"><br><br>
	<div class="row">
	    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img src="../images/Logo_EstadarteG.png" width="300px" height="150px" alt="" name="imagen">
             <img class="pull-right" src="../images/sds_logo.png" width="300px" height="150px" alt="" name="imagen">
      </div>
    </div>
</div>

<script>
      $('#s_login').show();  
      $('#s_cambia_contra').hide();
  </script>

<script type="text/javascript">
var speed='slow';
$(document).ready(function() {
  $('#login').submit(function(e) {
    e.preventDefault();
    $.ajax({
       type: "POST",
       url: 'validalogin.php',
       data: $(this).serialize(),
       success: function(respuesta)
       { 
          if (respuesta == '1') 
          {    
            if($('#cambio').prop('checked')) 
                {
                    $('#s_cambia_contra').slideDown(speed);  
                    $('#s_login').slideUp(speed);
                    // $('#s_login').hide();  
                    // $('#s_cambia_contra').show();
                    document.getElementById("nuevacontra").focus();
                }
            else
                {
                    window.location = '../inicio/inicio_menu.php';   
                }

          }
          else if( respuesta== '3')
          {
               $('#s_cambia_contra').slideDown(speed);  
               $('#s_login').slideUp(speed);
              document.getElementById("nuevacontra").focus();
          }
          else if (respuesta == "4") 
          {
          	if($('#cambio').prop('checked')) 
                {
                    $('#s_cambia_contra').slideDown(speed);  
                    $('#s_login').slideUp(speed);
                    document.getElementById("nuevacontra").focus();
                }
            else
                {
                    window.location = '../punto_venta/ventas_inicio.php';   
                }
          }
          else
           {
           	document.getElementById("usuario").value=null;
            document.getElementById("contrasena").value=null;
            document.getElementById("usuario").focus();
            document.getElementById("cambio").checked = false;
             swal(
                 'Incorrecto!',
                 'Usuario y/o contraseña incorrectos!',
                 'warning'
               );


          


           }
       }
   });
 });
});
</script>

<script src="../plugins/pace/pace.js"></script>
 
  <script src="../plugins/alertifyjs/alertify.js"></script>
  <script src="../plugins/jquery-validation/dist/jquery.validate.js"></script>
  <script src="../plugins/jquery-validation/messages_es.js"></script>
  <script src="../plugins/sweetalert2-master/dist/sweetalert2.js"></script>
  <script src="../plugins/pace/pace.js"></script>
  <script src="../plugins/alertifyjs/alertify.js"></script>
  <script src="../plugins/bootstrap/js/bootstrap.js"></script>
  <script src="../js/usuarios_updatecontra.js"></script>
<script src="../jquery-3.2.1.min.js"></script>
<script src="../js/iniciar.js"></script>
  
</body>

</html>
