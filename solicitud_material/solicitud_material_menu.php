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
			     <div class="col-lg-12">
			        <form id="frmNuevoSolicitudMaterial" method="post" class="form-vertical" action="">
                  <div class="panel panel-primary">
                        <div class="panel-heading titulo">
                           SOLICITUD DE MATERIAL
                        </div>

                    <div class="panel-body">
                        <div class="row" id="AgregarProductos">
                                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Producto:</label>
                                                <div class="error">
                                                    <input class="form-control" id="producto"  autofocus placeholder="Agregue Producto" name="producto" required>
                                                </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Descripción Producto:</label>
                                                <div class="error">
                                                    <input type="text" class="form-control" id="descripcion" placeholder="Agregue Desccripción" name="descripcion" required>
                                                </div>
                                            </div>
                                    </div>
                                   
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Cantidad:</label>
                                                <div class="error">
                                                    <input type="number" min="0.01" step="0.01" class="form-control" id="cantidad" placeholder="Cantidad" name="cantidad" required>
                                                </div>
                                            </div>
                                    </div>

                                     <div id="combounidad" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                        <div id="cbounidad" class="form-group">

                                            <label class="lbl" for="estado">Unidad:</label> <!-- <i title="Agregar Unidad" onclick="AbrirModalUnidad();" class="fa fa-plus fa-3x" style="position: relative; left: 205px; top: 10px;  font-size: 25px; cursor: pointer; color: #e49115;"></i> -->
                                                <select  class="form-control" id="unidad">
                                                <?php
                                              $consulta= "SELECT id_unidad, unidad
                                                    FROM unidades_medida WHERE id_sucursal = '$s_IdSucursal'
                                                    ";
                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    }
                                                ?>
                                               </select>

                                       </div>
                                    </div>
                         </div>
                      
                      <br>
                <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                      <input type="submit" value="Iniciar" class="btn btn-primary pull-right btn-block" >
                    </div>
                   <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                     <input value="Cancelar" onclick="IniciarSolicitudMaterial();" class="btn btn-warning pull-right btn-block">
                   </div>
                  </div> 
                  </div> 
              </form>    
            
			    </div>
			</section>
<?php 
include ('../configuracion/conexion.php');
$qry0 = "SELECT s.id_sucursal, s.contador_solicitud FROM sucursales AS s WHERE s.id_sucursal = '$s_IdSucursal'";
$consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());       
$row0 = mysqli_fetch_array($consulta0);
$IdSucursal = $row0[0];
$Contador = $row0[1];
$Folio= $s_IdSucursal . $s_idUsuario . $Contador;
$qry01 = "SELECT sd.id_solicitud_material_detalle 
FROM
solicitud_material_detalle AS sd 
WHERE sd.folio_solicitud = '$Folio' AND sd.id_sucursal = '$s_IdSucursal'";
$consulta01 = mysqli_query($conexion,$qry01) or die  (mysqli_connect_errno());       
$row01 = mysqli_fetch_array($consulta01);
$num01 = mysqli_num_rows($consulta01);

if ($num01 >= 1)
{?>
  <section id="listaSolicitudProductos">
          <?php include("solicitud_material_listado.php"); ?>
  </section>
   <section id="finalizarsolicitud">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><input value="Finalizar" class="btn btn-primary" onclick="FinalizarSolicitudMaterial();" ><input value="Cancelar" onclick="EliminarSolicitudCancelar();" class="btn btn-warning pull-right"></div>
  </section>

<?php 
}
else
{?>
  <section id="listaSolicitudProductos" hidden>
          <?php include("solicitud_material_listado.php"); ?>
  </section>
   <section id="finalizarsolicitud" hidden>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"><input value="Finalizar" class="btn btn-primary" onclick="FinalizarSolicitudMaterial();" ><input onclick="EliminarSolicitudCancelar();" value="Cancelar" class="btn btn-warning pull-right"></div>
   </section>
<?php  
} 
 ?>

  <?php include("solicitud_material_modal_comentario.php"); ?>



 </div>
</div>

 <script src="../jquery-3.2.1.min.js"></script>
 <script src="../assets/js/bootstrap.min.js"></script>
 <script src="../assets/js/jquery.metisMenu.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../js/modal.js"></script>
<script src="../js/acomodo.js"></script>
<script src="../js/alta.js"></script>
<script src="../js/iniciar.js"></script>
<script src="../js/refrescar.js"></script>
<script src= "../js/reportes.js"></script>
<script src="../plugins/alertifyjs/alertify.js"></script>
<script src="../plugins/sweetalert2-master/dist/sweetalert2.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $("#solicitud").addClass("active-menu"); 
} );

</script>
 </div>
</body>
</html>
