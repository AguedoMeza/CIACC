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
			     <div class="col-lg-12">
			       <form id="frmNuevoProductos" method="post" class="form-vertical" action="">
			            <div class="panel panel-primary">
				                <div class="panel-heading titulo">
				                   ALTA DE PRODUCTOS DE ALMACÉN
				                </div>

				            <div class="panel-body">
				                <div class="row">
				                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Nombre:</label>
                                                <div class="error">
                                                    <input class="form-control" id="nombre" autofocus placeholder="Nombre del Producto" name="nombre" required>
                                                </div>
                                            </div>
                           </div>
                                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Descripcion:</label>
                                                <div class="error">
                                                    <input class="form-control" id="descripcion"   placeholder="Descripción del Producto" name="descripcion" required>
                                                </div>
                                       </div>
                                    </div>
                                    
                                      <div id="combounidad" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div id="cbounidad" class="form-group">

                                            <label class="lbl" for="estado">Unidad :</label>          <i title="Agregar Unidad" onclick="AbrirModalUnidad();" class="fa fa-plus fa-3x" style="color: #e49115; position: relative; left: 300px; top: 8px;  font-size: 25px; cursor: pointer;"></i>
                                                <select  class="form-control" id="unidad">
                                                <?php
                                                mysqli_set_charset($conexion, 'utf8');
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
                                   <!--  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                                <div class="error">
                                                   <div><input style="cursor: pointer;" onclick="habilitarfolio();" class="form-control" type="checkbox" id="fijo" name="fijo" value="1"></div> <div style="position: relative; left: 10px; margin-top:-28px; font-size: 15px;">Inventario Fijo</div><br>
                                                </div>
                                       </div>
                                    </div> -->
                        </div>
                                <div id="contenedor" class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label class="lbl" for="estado">Tipo Producto :</label>
                                                <select  class="form-control" id="tipoproducto" required>
                                              <!--  <option>Seleccione el departamento</option> -->
                                                <?php
                                                 // mysqli_query("SET NAMES utf8"); 
                                              $consulta= "SELECT id_tipo_producto, nombre_tipo_producto
                                                    FROM productos_tipo WHERE activo = 1 AND id_sucursal = '$s_IdSucursal'
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

                                       <div id="cboconsumible" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label class="lbl" for="estado">El producto es :</label>
                                                <select  class="form-control" id="consumible" required>
                                                  <option value="1">Consumible</option>
                                                  <option value="0">No Consumible</option>
                                                ?>
                                               </select>
                                       </div>
                                    </div>

                                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                         <div class="form-group">
                                                <label for="nombre" class="lbl">Stock Minimo:</label>
                                                <div class="error">
                                                    <input class="form-control" id="minimo" type="number" min="0.01" step="0.01" placeholder="Cantidad Minima" name="minimo" required>
                                                </div>
                                            </div>
                                    </div>
                              </div>
                              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				            	<input type="submit" value="Guardar" class="btn btn-primary pull-right btn-block" >
				            </div>
				           <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				          	 <input value="Cancelar" onclick="iniciarProductos();" class="btn btn-warning pull-right btn-block">
				           </div>
                          </div>
			       	    </div> <br><br>
			        </form>    
            
			    </div>
			</section>



			<section id="listaProductos">
				<?php include("productos_listado.php"); ?>
			</section>
    </div>
</div>

     <?php include("productos_modal.php"); ?>
  
    
		</div>
    <section id="listaunidades"> 
      <?php include("productos_modal_unidad.php");?>
    </section>

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
    $("#productos").addClass("active-menu"); 
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
