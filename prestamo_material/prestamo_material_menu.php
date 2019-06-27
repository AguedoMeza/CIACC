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
    <!-- <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css"> -->
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="../barcode.css">     CSS PARA CÓDIGO DE BARRAS -->
   <!--  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
     crossorigin="anonymous"></script> -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="../plugins/pace/themes/pace-theme-minimal.css">
 	<link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
	<link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../plugins/select2-3.5.4/select2.css">
       <link rel="stylesheet" href="../plugins/reportes_datatables/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../plugins/reportes_datatables/jquery.dataTables.min.css">


   <meta charset="utf-8" />
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>UT-MART</title>

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
               <div style="font-size: 20px;" class="pull-right">Bienvenido(a): <?php echo$s_Name;?></div>
            </div>
        </div> <br>
      <section id="altasucursales">

			       <form id="frmOrdenCompras" method="post" class="form-vertical" action="">
			            <div class="panel panel-primary">
			            	<div class="panel-heading titulo">
				                  PRESTAMO DE MATERIAL
				                </div>

				       <div class="row"><br>
				       	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label class="lbl" for="solicitante">Solicitante:</label>
                                			   <select  class="form-control" id="solicitante">
                                               		<?php 
                                               		mysqli_set_charset($conexion, 'utf8');
                                               		$consulta= "SELECT t.id_trabajador, CONCAT(p.nombre, ' ', p.ap_paterno, ' ', p.ap_materno) as Persona, t.id_sucursal
												FROM personas AS p  INNER JOIN trabajadores AS t
												ON p.id_persona = t.id_persona
												WHERE t.activo = 1 AND p.estrabajador = 1 AND p.activo=1 AND t.id_sucursal = '$s_IdSucursal'";

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    } ?>
                                               </select>
                                       </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label class="lbl" for="taller">Taller:</label>
                                               <select  class="form-control" id="taller">
                                                    <?php 
                                                    mysqli_set_charset($conexion, 'utf8');
                                                    $consulta= "SELECT id_taller, nombre
                                                                FROM talleres 
                                                                WHERE activo = 1 AND id_sucursal = '$s_IdSucursal'";

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    } ?>
                                               </select>
                                       </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                         	<div class="form-group">
                              <label class="lbl" for="descrip">Motivo:</label>
                           	  <input class="form-control" id="motivo" autofocus placeholder="Motivo Prestamo" name="motivo" required>
                            </div>
                         </div><br>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                    	<div class="form-group">
                                    	  <input value="Iniciar" class="btn btn-warning" onclick="BtnHabilitarPrestamo();" required>
                            			</div>
                                    </div>
				       </div>
			       	    </div> <br><br>
			        </form>  
			</section>



			<section id="listaProductos" hidden>

				<?php include("prestamo_material_listado_productos.php"); ?>
			</section>

			 <section id="listaprestamoinferior" hidden>
             <?php include("prestamo_material_listadoinferior.php"); ?>
         	</section>

         	<section id="finalizar" hidden>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><input value="Finalizar" class="btn btn-primary" onclick="FinalizarPrestamo();" ><input value="Cancelar" class="btn btn-warning pull-right" onclick="EliminarPrestamoCancelar();"></div>
            </section>
    </div>
</div>
</body>
</html>
 <script src="../jquery-3.2.1.min.js"></script>
 <script src="../plugins/select2-3.5.4/select2.js"></script>
 <script src="../assets/js/bootstrap.min.js"></script>
 <script src="../assets/js/jquery.metisMenu.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../plugins/reportes_datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/reportes_datatables/dataTables.buttons.min.js"></script>
<script src="../plugins/reportes_datatables/jszip.min.js"></script>
<script src="../plugins/reportes_datatables/pdfmake.min.js"></script>
<script src="../plugins/reportes_datatables/vfs_fonts.js"></script>
<script src="../plugins/reportes_datatables/buttons.html5.min.js"></script>
<script src="../js/acomodo.js"></script>
<script type="text/javascript">

$(document).ready(function() {

    $('#tablaProductos').DataTable( {
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
<script type="text/javascript">

$(document).ready(function() {
    $("#prestamo").addClass("active-menu"); 
    $('#tablaInferior').DataTable( {
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
<script>
$(document).ready(function() {
$('#tipoproducto').select2();
$('#consumible').select2();
$('#unidad').select2();
} );
</script>
<script src="../js/alta.js"></script>
<script src="../js/iniciar.js"></script>
<script src="../js/refrescar.js"></script>
<!-- <script src="../js/status.js"></script> -->
<script src="../js/modal.js"></script>
<script src= "../js/reportes.js"></script>
<script src="../plugins/alertifyjs/alertify.js"></script>
<script src="../plugins/sweetalert2-master/dist/sweetalert2.js"></script>
</body>
</html>
