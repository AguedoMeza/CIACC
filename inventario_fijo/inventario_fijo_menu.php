<?php 
include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_Name = $_SESSION["s_Persona"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
date_default_timezone_set('America/Monterrey');
$s_IdArea = $_SESSION["s_IdArea"];
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
    <!-- <link rel="stylesheet" href="../barcode.css">     CSS PARA CÓDIGO DE BARRAS -->
   <!--  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
     crossorigin="anonymous"></script> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../plugins/pace/themes/pace-theme-minimal.css">
 	<link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
	<link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../plugins/select2-3.5.4/select2.css">

   <meta charset="utf-8" />
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>UT-MART</title>

</head>

<body>
    <div id="wrapper">
    <?php include("../menu/menu.php"); ?>
        <!-- /. NAV SIDE  -->

<div id="page-wrapper" >
   <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <div style="font-size: 20px;" class="pull-right">Bienvenido(a): <?php echo$s_Name;?></div></h2>  
            </div>
        </div> <br>
        <?php if ($s_idUsuario < 67) 
        { ?>
       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label class="lbl" for="asucursal">Extensión:</label>
                                <select  class="form-control" id="asucursal" onchange="llenarInventarioFijoSucursal();" style="font-size: 18px;">
                                  <option>Seleccione Extensión</option>
                                                                                                       <?php
                                                if ($s_idUsuario == 62 || $s_idUsuario == 63 || $s_idUsuario == 64) 
                                                  {
                                                              mysqli_set_charset($conexion, 'utf8');
                                                             $consulta11= "SELECT id_sucursal, nombre
                                                                  FROM sucursales WHERE activo = 1 AND area = '$s_IdArea'";
                                                             $qry11=mysqli_query($conexion,$consulta11) or die (mysqli_connect_error());
                                                  }

                                                  if ($s_idUsuario == 65 || $s_idUsuario == 66 || $s_idUsuario == 1 || $s_idUsuario == 61 )
                                                  {
                                                                         mysqli_set_charset($conexion, 'utf8');
                                                                    $consulta11= "SELECT id_sucursal, nombre
                                                                        FROM sucursales WHERE activo = 1";
                                                                   $qry11=mysqli_query($conexion,$consulta11) or die (mysqli_connect_error());
                                                  }
                                                  else if ($s_idUsuario >= 67)
                                                  {
                                                                  mysqli_set_charset($conexion, 'utf8');
                                                              $consulta11= "SELECT id_sucursal, nombre
                                                                  FROM sucursales WHERE activo = 1 AND id_sucursal = '$s_IdSucursal'";
                                                             $qry11=mysqli_query($conexion,$consulta11) or die (mysqli_connect_error()); # code
                                                  }

                                                   while ($row11=mysqli_fetch_row($qry11))
                                                    { 
                                                       echo "<option value=\"$row11[0]\">$row11[1]</option>";
                                                    }
                                                ?>                                        
                                               </select>
                                       </div>
          </div><br><br>
          <section id="listadinamica">
       <?php include("../inventario_fijo/inventario_fijo_listado_dinamico.php"); ?>
      </section>
        <?php }  ?>

      
      <?php if ($s_idUsuario >= 67)
                                                  { ?>
  
           <section id="altasucursales">
			     <div class="col-lg-12">
			        <form id="frmNuevoInventarioFijo" method="post" class="form-vertical" action="">
                  <div class="panel panel-primary">
                        <div class="panel-heading titulo">
                           INVENTARIO FIJO
                        </div>

                    <div class="panel-body">
                        <div class="row">
                                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">QR:</label>
                                                <div class="error">
                                                    <input class="form-control" id="qr"  autofocus placeholder="Agregue Código QR" name="qr" required>
                                                </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">C.I:</label>
                                                <div class="error">
                                                    <input type="text" class="form-control" id="ci" placeholder="Agregue C.I" name="ci" required>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Producto</label>
                                                <div class="error">
                                                    <input type="text" class="form-control" id="producto" placeholder="Descripción Producto" name="producto" required>
                                                </div>
                                            </div>
                                    </div>
                         </div>
                         <div class="row">
                                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Modelo:</label>
                                                <div class="error">
                                                    <input class="form-control" id="modelo"   placeholder="Modelo del Producto" name="modelo" required>
                                                </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Serie:</label>
                                                <div class="error">
                                                    <input type="text" class="form-control" id="serie" placeholder="Agregue la serie" name="serie" required>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Marca:</label>
                                                <div class="error">
                                                    <input type="text" class="form-control" id="marca" placeholder="Marca Producto" name="marca" required>
                                                </div>
                                            </div>
                                    </div>
                                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Condiciones:</label>
                                                <div class="error">
                                                   <select class="form-control" name="condiciones" id="condiciones">
                                                   	<option value="Bueno">Bueno</option>
                                                   	<option value="Malo">Malo</option>
                                                   </select>
                                                </div>
                                            </div>
                                    </div>
                         </div>
                      <br>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                      <input type="submit" value="Guardar" class="btn btn-primary pull-right btn-block" >
                    </div>
                   <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                     <input value="Cancelar" onclick="iniciarInventarioFijo();" class="btn btn-warning pull-right btn-block">
                   </div>
                   <!--   <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" align="right">                            
                             <input value="Reporte General" onclick="pdfSucursal();" class="btn btn-success pull-right btn-block">
                           </div> -->
                  </div> 
              </form>    
            
			    </div>
			</section>
      <section id="listaInventarioFijo">
        <?php include("inventario_fijo_listado.php"); ?>
      </section>
<?php } ?>

			
    </div>
</div>

  <?php include("inventario_fijo_modal.php"); ?>
  
    
		</div>
   

	</body>
</html>
 <script src="../jquery-3.2.1.min.js"></script>
 <script src="../plugins/select2-3.5.4/select2.js"></script>
 <script src="../assets/js/bootstrap.min.js"></script>
 <script src="../assets/js/jquery.metisMenu.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../assets/js/Spanish.json"></script>
<script src="../js/acomodo.js"></script>

<!-- FORMATO PARA EL DATATABLE -->
<script type="text/javascript">

$(document).ready(function() {
   $("#inventariof").addClass("active-menu"); 
   $("#inventario").addClass("active-menu"); 
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
