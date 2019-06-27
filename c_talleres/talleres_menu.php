<?php 
include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_Name = $_SESSION["s_Persona"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
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
			       <form id="frmNuevoTalleres" method="post" class="form-vertical" action="">
			            <div class="panel panel-primary">
				                <div class="panel-heading titulo">
				                  ALTA DE TALLERES
				                </div>

				            <div class="panel-body">
				                <div class="row">
				                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Nombre:</label>
                                                <div class="error">
                                                    <input class="form-control" id="nombre" autofocus placeholder="Nombre del Taller" name="nombre" required>
                                                </div>
                                            </div>
                                  </div>
                                   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				                    <div class="form-group">
                                                    <label class="lbl" for="tallerista">Tallerista :</label>
                                                <select  class="form-control" id="tallerista" required>
                                           <!--     <option>Seleccione el puesto</option> -->
                                                <?php
                                               mysqli_set_charset($conexion, 'utf8');
                                                if ($s_idUsuario == 1) 
                                                {
                                                	$consulta= "SELECT p.id_persona, CONCAT(p.nombre, ' ', p.ap_paterno, ' ', p.ap_materno) as Persona, t.id_sucursal
												FROM personas AS p  INNER JOIN trabajadores AS t
												ON p.id_persona = t.id_persona
												WHERE t.activo = 1 AND p.estrabajador = 1 AND p.activo=1 AND t.id_sucursal != 0";

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    }
                                                }
                                                else
                                                {
                                                	$consulta= "SELECT p.id_persona, CONCAT(p.nombre, ' ', p.ap_paterno, ' ', p.ap_materno) as Persona, t.id_sucursal
												FROM personas AS p  INNER JOIN trabajadores AS t
												ON p.id_persona = t.id_persona
												WHERE t.activo = 1 AND p.estrabajador = 1 AND p.activo=1
												 AND t.id_sucursal = '$s_IdSucursal'";

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    }
                                                }
                                              

                                                 
                                                ?>
                                               </select>
                                     </div>       
				                   </div>
                                   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Descripción:</label>
                                                <div class="error">
                                                    <input class="form-control" id="descripcion"   placeholder="Descripcion del Taller" name="descripcion" required >
                                                </div>
                                       </div>
                                    </div>
                                    
				            </div>
			   							<br>
			   				   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				            	<input type="submit" value="Guardar" class="btn btn-primary pull-right btn-block" >
				          </div>
				           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				          	 <input value="Cancelar" onclick="iniciarTalleres();" class="btn btn-warning pull-right btn-block">
				           </div>
			       	    </div> <br>
			        </form>    
			    </div>
			</section>



			<section id="listatalleres">
				<?php include("talleres_listado.php") ?>
			</section>
    </div>
</div>
        <?php include("talleres_modal.php") ?>
	
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
	$("#talleres").addClass("active-menu"); 
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
