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
	<link rel="stylesheet" href="../assets/css/chkbox.css">
	<link rel="stylesheet" href="../assets/css/radiobutons.css">
	 <link rel="stylesheet" type="text/css" href="../plugins/select2-3.5.4/select2.css">
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
        </div>
        <section id="menusuperior"><br>
        	<div class="panel panel-primary">
        		 <div class="panel-heading titulo">
				                MOTIVO DE LA ORDEN DE SALIDA
				 </div>
				 <div class="panel-body">
        			 <div class="row">
				          		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
								     <div class="form-check"> 
								     <label for="">Motivo de Sálida:</label>
									  <label class="contenedor">Donación
										  <input id="donacion" type="radio" checked="checked" name="radio" onchange="BtnHablitarDestino();">
										  <span class="radiobtn"></span>
									   </label>
									 </div>
								      <div class="form-check">
									  <label class="contenedor">Otro
										  <input id="otro" type="radio"  name="radio" onchange="BtnHablitarDestino();">
										  <span class="radiobtn"></span>
									   </label>
									 </div>
							     </div>
							     	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3" id="sucursal">
                                        <div class="form-group">
                                            <label class="lbl" for="solicitante">Destino:</label>
                                			   <select  class="form-control" id="destino">
                                               		<?php 
                                               		mysqli_set_charset($conexion, 'utf8');
                                               		$consulta= "SELECT s.id_sucursal, s.nombre FROM sucursales AS s WHERE s.activo = 1";

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    } ?>
                                               </select>
                                       </div>
                         </div>
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-2" id="comentariogeneral">
                              <div class="form-group">
                              <label class="lbl" for="descrip">Comentario General:</label>
                              <input type="text" class="form-control" id="comentario" autofocus placeholder="Comentario General" name="comentario">
                            </div>        
                         </div><br>
							      <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3">
                                    	<div class="form-group">
                                    	 <!--  <input value="Iniciar Orden" class="btn btn-primary" onclick="BtnHabilitarPrestamo();" required> -->
                                    	 <a href="#" id="btniniciar" class="btn btn-primary" onclick="BtnHabilitarOrdenSalida();"><span class="fa fa-arrow-circle-right" style="font-size: 18px;"> Iniciar</span></a>
                            			</div>
                                    </div>
							 </div>
					</div>
        		</div>
        </section><br>
      <section id="altaordensalida" hidden>
			<form id="frmNuevoOrdenSalida" method="post" class="form-vertical" action="">
                  <div class="panel panel-primary">
                     <div class="panel-heading titulo">
                         ORDEN DE SALIDA (AGREGUE SUS PRODUCTOS)
                        </div>
               <div class="panel-body">
               <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                     <div class="form-check">
                     <label for="">Producto de:</label>
                    <label class="contenedor">Almacén
                      <input id="almacen" type="radio" checked="checked" name="radio" onchange="HabilitarFijoyAlmacen();">
                      <span class="radiobtn"></span>
                     </label>
                   </div>
                   <div class="form-check">
                    <label class="contenedor">Inventario Fijo
                      <input id="fijo" type="radio" name="radio" onchange="HabilitarFijoyAlmacen();">
                      <span class="radiobtn"></span>
                     </label>
                   </div>
             </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3" id="dealmacen">
                                        <div class="form-group">
                                            <label class="lbl" for="solicitante">Productos Almacén:</label>
                                         <select  class="form-control" id="productoalmacen">
                                                  <?php 
                                                  mysqli_set_charset($conexion, 'utf8');
                                                  $consulta= "SELECT p.id_producto, CONCAT(p.nombre, ' ', p.descripcion_producto) FROM productos AS p WHERE p.id_sucursal = '$s_IdSucursal' ORDER BY p.nombre ASC";

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    } ?>
                                               </select>
                                       </div>
                         </div>
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3" id="defijo" hidden>
                                        <div class="form-group" id="cbofijo">
                                            <label class="lbl" for="solicitante">Productos Inventario Fijo:</label>
                                         <select  class="form-control" id="productofijo">
                                                  <?php 
                                                  mysqli_set_charset($conexion, 'utf8');
                                                  $consulta= "SELECT i.id_inventario_fijo, CONCAT(i.qr,' ',i.nombre_producto)
                                FROM inventario_fijo AS i WHERE i.salida = 0 AND i.id_sucursal = '$s_IdSucursal'";

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    } ?>
                                               </select>
                                       </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-2" id="cantidadproducto">
                              <div class="form-group">
                              <label class="lbl" for="descrip">Cantidad:</label>
                              <input type="number" min="1" step="0.1" class="form-control" id="cantidad" placeholder="Cantidad" name="cantidad">
                            </div>        
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                          <div class="form-group">
                              <label class="lbl" for="descrip">Motivo:</label>
                              <input class="form-control" id="motivo"  placeholder="Motivo Sálida" name="motivo">
                            </div>
                         </div><br>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2">
                                      <div class="form-group">
                                       <!--  <input type="submit" value="Iniciar" class="btn btn-primary pull-right btn-block" > -->
                                        <button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i> Agregar</button>
                                  </div>
                                    </div>
               </div>
               </div>
               </div> <br><br>
            </form>  
			</section>

		<section id="listaproductossalidos" hidden><?php include("../orden_salida/orden_salida_listado.php"); ?></section>
     <section id="finalizarordensaldia" hidden>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <button onclick="FinalizarOrdenSalida();" class="btn btn-primary" style="font-size: 15px;"><i class="fa fa-check-circle"></i> Finalizar</button>   <button onclick="EliminarOrdenSalidaCancelar();" class="btn btn-warning" style="font-size: 15px;"><i class="fa fa-window-close"></i> Cancelar</button></div>
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
         stateSave: true
    } );
} );

</script>
<script type="text/javascript">

$(document).ready(function() {

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
         stateSave: true
    } );
} );

</script>
<script>
$(document).ready(function() {
$('#productofijo').select2();
$('#productoalmacen').select2();
$('#destino').select2();
} );
</script>
<script src="../js/acomodo.js"></script>
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
