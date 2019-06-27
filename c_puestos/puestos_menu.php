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
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
 <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="../plugins/sweetalert2-master/dist/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
    <link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <link href='https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css' />
      <link href='https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css' />
     

<!--     <link href="../assets/css/bootstrap.css" rel="stylesheet" /> -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />

	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../plugins/pace/themes/pace-theme-minimal.css"> -->
 	<!-- <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/default.css"> -->
   <!--  <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
	<link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css"> -->

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
                <h2 class="h2a" > <div style="font-size: 20px;" class="pull-right">Bienvenido(a): <?php echo$s_Name;?></div></h2>  
            </div>
        </div> <br>
           <section id="altapuestos">
			     <div class="col-lg-12">
			       <form id="frmNuevoPuestos" method="post" class="form-vertical" action="">
			            <div class="panel panel-primary">
				                <div class="panel-heading titulo">
				                  ALTA DE PUESTOS
				                </div>

				            <div class="panel-body">
				                <div class="row">
				                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				                    <div class="form-group">
				                        <label for="nombre" class="lbl">Nombre :</label>
				                           <div class="error">
				                               <input class="form-control" id="nombre" autofocus placeholder="Nombre del Puesto" name="nombre" required>
				                            </div>
				                    </div> 
				                   </div> 
				                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				                    <div class="form-group">
				                        <label for="nombre" class="lbl">Descripción :</label>
				                           <div class="error">
				                               <input class="form-control" id="descripcion" autofocus placeholder="Descripción del Puesto" name="descripcion" required>
				                            </div>
				                    </div>  
				                   </div>
				            </div>
			   							<br>
			   				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				            	<input type="submit" value="Guardar" class="btn btn-primary pull-right btn-block" >
				            </div>
				           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				          	 <input value="Cancelar" onclick="iniciarPuestos();" class="btn btn-warning pull-right btn-block">
				           </div>
                   <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="float: right;" >                            
                             <input  value="Reporte General" onclick="pdfPuesto();" class="btn btn-success  btn-block">
                           </div> -->
			       	    </div>
			        </form>    
			    </div>
			</section>



			<section id="listapuestos">
				<?php include("../c_puestos/puestos_listado.php") ?>
			</section>

<?php include("puestos_modal.php"); ?>




    </div>
</div>

			
		</div>
	</body>
</html>

<!-- <script src="../assets/js/bootstrap.min.js"></script> -->
<!-- <script src="../assets/js/jquery.metisMenu.js"></script>
<script src="../assets/js/custom.js"></script> -->
<script src="../jquery-3.2.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.metisMenu.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../js/acomodo.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $("#puestos").addClass("active-menu"); 
    $('#tablaPuestos').DataTable( {
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
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../js/alta.js"></script>
<script src="../js/iniciar.js"></script>
<script src="../js/refrescar.js"></script>
<script src="../js/status.js"></script>
<script src="../js/modal.js"></script>
<script src="../js/reportes.js"></script>
<script src="../plugins/alertifyjs/alertify.js"></script>
<script src="../plugins/sweetalert2-master/dist/sweetalert2.js"></script>


<!--  <script src="../assets/js/jquery.metisMenu.js"></script> -->
     <!-- MORRIS CHART SCRIPTS -->
    <!--  <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script> -->
      <!-- CUSTOM SCRIPTS -->
    <!-- <script src="../assets/js/custom.js"></script>
 -->
<!-- <script src="../plugins/jquery-validation/dist/jquery.validate.js"></script>
<script src="../plugins/jquery-validation/messages_es.js"></script> -->

<!-- <script src="../plugins/alertifyjs/alertify.js"></script> -->
<!-- <script src="../plugins/bootstrap/js/bootstrap.js"></script> -->
<!-- <script src="../plugins/alertifyjs/alertify.js"></script> -->
<!-- <script src="../plugins/jquery-validation/dist/jquery.validate.js"></script>
<script src="../plugins/jquery-validation/messages_es.js"></script> -->
<!-- <script src="../plugins/sweetalert2-master/dist/sweetalert2.js"></script> -->
<!-- <script src="../plugins/alertifyjs/alertify.js"></script> -->
<!-- <script src="../plugins/bootstrap/js/bootstrap.js"></script> -->
</body>
</html>
