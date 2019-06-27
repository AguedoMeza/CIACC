<?php 
include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_Name = $_SESSION["s_Persona"];
date_default_timezone_set('America/Monterrey');
$fecha = date("Y-m-d"); 
$dia =  date("d"); 
$numero_dia = date('N', strtotime($dia)); 
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="../plugins/sweetalert2-master/dist/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
    <link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
   <!--  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
     crossorigin="anonymous"></script> -->
	
	<link rel="stylesheet" type="text/css" href="../plugins/pace/themes/pace-theme-minimal.css">
 	<link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
	<link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">

   <meta charset="utf-8" />
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CIACC</title>

</head>
<body>
    <div id="wrapper">
        
           <!-- /. NAV TOP  -->
                 <?php include("../menu/menu.php"); ?>
        <!-- /. NAV SIDE  -->

<div id="page-wrapper" >
   <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2a" ><div style="font-size: 20px;" class="pull-right">Bienvenido(a): <?php echo$s_Name;?></div></h2>  
            </div>
        </div> <br>
           <section id="altasucursales">
			     <div class="col-lg-12">
			       <form id="frmNuevoSucursales" method="post" class="form-vertical" action="">
			            <div class="panel panel-primary">
				                <div class="panel-heading titulo">
				                 ALTA DE EXTENSIONES
				                </div>

				            <div class="panel-body">
				                <div class="row">
				                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Nombre:</label>
                                                <div class="error">
                                                    <input class="form-control" id="sucursal" autofocus placeholder="Nombre de la Sucursal" name="sucursal" required>
                                                </div>
                                            </div>
                                        </div>
                                   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Dirección:</label>
                                                <div class="error">
                                                    <input class="form-control" id="direccion"   placeholder="Dirección de la Sucursal" name="direccion" required >
                                                </div>
                                       </div>
                                    </div>
                                     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Correo Electrónico:</label>
                                                <div class="error">
                                                    <input class="form-control" id="correo"   placeholder="Email de la Sucursal" name="correo" required>
                                                </div>
                                       </div>
                                    </div>
				            </div>
				            <div class="row">
				            	 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Telefono:</label>
                                                <div class="error">
                                                    <input class="form-control" id="telefono"   placeholder="Teléfono de la Sucursal" name="telefono" required >
                                                </div>
                                       </div>
                                    </div>
                                     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Descripcion:</label>
                                                <div class="error">
                                                    <input class="form-control" id="descripcion"   placeholder="Descripción de la Sucursal" name="descripcion" required>
                                                </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Área:</label>
                                                <div class="error">
                                                    <select class="form-control" name="area" id="area">
                                                    <option value="1">Área #1</option>
                                                    <option value="2">Área #2</option>
                                                    <option value="3">Área #3</option>
                                                    </select>
                                                </div>
                                       </div>
                                    </div>
				            </div>
			   							<br>
			   				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				            	<input type="submit" value="Guardar" class="btn btn-primary pull-right btn-block" >
				            </div>
				           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				          	 <input value="Cancelar" onclick="iniciarSucursales();" class="btn btn-warning pull-right btn-block">
				           </div>
			       	    </div> 
			        </form>    
			    </div>
			</section>



			<section id="listasucursales">
				<?php include("../c_sucursales/sucursales_listado.php") ?>
			</section>
    </div>
</div>
        <?php include("sucursales_modal.php") ?>
			
		</div>
	</body>
</html>
 <script src="../jquery-3.2.1.min.js"></script>
 <script src="../assets/js/bootstrap.min.js"></script>
 <script src="../assets/js/jquery.metisMenu.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../js/acomodo.js"></script>

<!-- FORMATO PARA EL DATATABLE -->
<script type="text/javascript">

$(document).ready(function() {
    $("#sucursales").addClass("active-menu"); 
    $('#tablaSucursales').DataTable( {
        "language": {
           // "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            "url": "plugins/datatables/langauge/Spanish.json"
        },
        "order": [[ 0, "desc" ]],
       "paging":   true,
        "ordering": true,
        "info":     false,
        "searching": true,
         stateSave: true,
         "language": idioma_español
    } );
} );

</script>
<script src="../js/alta.js"></script>
<script src="../js/iniciar.js"></script>
<script src="../js/refrescar.js"></script>
<script src="../js/status.js"></script>
<script src="../js/modal.js"></script>
<script src= "../js/reportes.js"></script>
<script src="../plugins/alertifyjs/alertify.js"></script>
<script src="../plugins/sweetalert2-master/dist/sweetalert2.js"></script>
</body>
</html>
