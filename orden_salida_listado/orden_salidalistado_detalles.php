<script type="text/javascript">

$(document).ready(function() {
  // $ .fn.dataTableExt.sErrMode = 'throw';
  $("#tablaInferior").dataTable().fnDestroy();
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
<?php 
include("../configuracion/conexion.php");
include'../global_seguridad/verificar_sesion.php';
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
$id_sucursal=$_POST["asucursal"]; 

if ($s_idUsuario >= 67) 
{
mysqli_set_charset($conexion, 'utf8');
$consulta1= "SELECT o.folio_orden_salida, o.id_sucursal FROM orden_salida AS o WHERE o.vista != 0 AND o.id_sucursal = '$s_IdSucursal'";
$qry1 = mysqli_query($conexion,$consulta1) or die  (mysqli_connect_errno()); 
$row1 = mysqli_fetch_array($qry1);
$Folio = $row1[0];

$consulta= "SELECT  od.nombre_producto, od.cantidad, od.motivo_salida
FROM
orden_salida_detalle AS od
WHERE od.folio_orden_salida = '$Folio'";
$qry = mysqli_query($conexion,$consulta) or die  (mysqli_connect_errno()); 
?>
<div id='titulov'> <h2 style='color: Black;'>DETALLES DE LA ORDEN</h2> </div>
 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="float: right;">   
 <a style="float: right;font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #e23e39;" class="btn btn-block" onclick="pdfOrdenSalida();">Reporte <i class='fa fa-file-pdf'></i></a> </div> <br><br>
<?php 
}

if ($s_idUsuario < 67) 
{
mysqli_set_charset($conexion, 'utf8');
$consulta1= "SELECT o.folio_orden_salida, o.id_sucursal FROM orden_salida AS o WHERE o.vista != 0 AND o.id_sucursal = '$id_sucursal'";
$qry1 = mysqli_query($conexion,$consulta1) or die  (mysqli_connect_errno()); 
$row1 = mysqli_fetch_array($qry1);
$Folio = $row1[0];

$consulta= "SELECT  od.nombre_producto, od.cantidad, od.motivo_salida
FROM
orden_salida_detalle AS od
WHERE od.folio_orden_salida = '$Folio'";
$qry = mysqli_query($conexion,$consulta) or die  (mysqli_connect_errno()); 
}
                     
                     

                     ?><br><br>
<table id="tablaInferior" class="table table-striped table-bordered" width="100%" cellspacing="0" style="font-size: 15px; font-weight: bold;">
                                              <thead style="background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Cantidad</th>
                                                      <th>Motivo</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Cantidad</th>
                                                      <th>Motivo</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php   
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
?>  
                                                     <tr align="center">
                                                      <td>
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td id="producto"><?php echo $row[0]?></td>
                                                      <td id="tipo"><?php echo $row[1]?></td>
                                                      <td id="cantidad"><?php echo $row[2]?></td>
                                                      </tr>
                                                        <?php 
                                                                        $n++;
                  }
                                                         ?>
                                              </tbody>
</table>
  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
 <?php 
 if ($s_idUsuario < 67) 
 {
   echo "<input value='Cerrar' onclick=\"javascript:MostrarDetalleOrdenSalida('$Folio', '$id_sucursal');\" class='btn btn-warning pull-right btn-block'>";
 }
 if ($s_idUsuario >= 67) 
 {
   echo "<input value='Cerrar' onclick=\"javascript:MostrarDetalleOrdenSalida('$Folio', '$s_IdSucursal');\" class='btn btn-warning pull-right btn-block'>"; 
 }
?>
</div>
