<?php  include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
?>

<script type="text/javascript">

$(document).ready(function() {
    // $ .fn.dataTableExt.sErrMode = 'throw';
$("#tablaProductos").dataTable().fnDestroy();
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
<section>
<div><a style="float: right;font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #0c7932;" class="btn btn-block" onclick="xclprestamosmaterial();">EXCEL <i class='fa fa-clipboard'></i></a> 
</div>

<div  style="float: right;"> <font size="2"><b>Reportes: </b></font><a style="float: right; font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #e23e39;" class="btn btn-block" onclick="pdfSucursal();">PDF <i class='fa fa-file-pdf'></i></a> 
</div><br>
</section><br>
<?php 
include("../configuracion/conexion.php"); 
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];  
$id_sucursal=$_POST["asucursal"]; 



if ($s_idUsuario == 61 || $s_idUsuario == 62 || $s_idUsuario == 63 || $s_idUsuario == 64 || $s_idUsuario == 65 || $s_idUsuario == 66 || $s_idUsuario == 1) 
{
?>
<?php 
$qry0 = "SELECT o.vista FROM orden_salida AS o WHERE o.vista != 0 AND id_sucursal = '$id_sucursal'";
$consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());                   
$row0 = mysqli_fetch_array($consulta0);
$num = mysqli_num_rows($consulta0);  
mysqli_set_charset($conexion, 'utf8');
?>
<table id="tablaProductos" class="table table-striped table-bordered" width="100%" cellspacing="0" style="font-size: 15px;">
                                              <thead style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Folio</th>
                                                      <th>Fecha Registro</th>
                                                      <th>Motivo</th>
                                                      <th>Visualizar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Cantidad</th>
                                                      <th>Motivo</th>
                                                      <th>Visualizar</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php       
mysqli_set_charset($conexion, 'utf8');    
$consulta= "SELECT
  o.id_orden_salida,
  o.folio_orden_salida,
  o.fecha_registro,
  o.comentario,
  o.id_sucursal,
  o.destino,
  o.vista
FROM
  orden_salida AS o
WHERE o.id_sucursal = '$id_sucursal'
ORDER BY o.folio_orden_salida DESC";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                  
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                    $originalDate = $row[2];
                    $newDate = date("d/m/Y", strtotime($originalDate));
 ?>  
                                                     <tr align="center">
                                                      <td>
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td id="producto"><?php echo $row[1]?></td>
                                                      <td id="tipo"><?php echo $newDate?></td>
                                                      <td id="tipo"><?php echo $row[3]?></td>
                                                       <?php 
                                                      if ($num >= 1) 
                                                        {
                                                          if ($row[6]==0) 
                                                          {  
                                                            echo "<td><a onclick='javascript:NoVisualizar();'><i class='fa fa-eye-slash fa-2x color-icono'></i></a></td>";
                                                          }    

                                                          if ($row[6]!=0)
                                                          { 
                                                            echo "<td><a onclick=\"javascript:MostrarDetalleOrdenSalida('$row[1]', '$id_sucursal');\" ><i class='fa fa-eye fa-2x color-icono'></i></a></td>";
                                                          }
                                                        }
                                                     else
                                                        {
                                                            echo "<td><a a onclick=\"javascript:MostrarDetalleOrdenSalida('$row[1]', '$id_sucursal');\" ><i class='fa fa-eye-slash fa-2x color-icono'></i></a></td>";
                                                        } 
                                                      ?>    
                                                
                                                 </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>
<?php } ?>  

<?php  
if ($s_idUsuario >= 67)
{
?>
<?php 
$qry0 = "SELECT o.vista FROM orden_salida AS o WHERE o.vista != 0 AND id_sucursal = '$s_IdSucursal'";
$consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());                   
$row0 = mysqli_fetch_array($consulta0);
$num = mysqli_num_rows($consulta0);  
mysqli_set_charset($conexion, 'utf8');
?>
<table id="tablaProductos" class="table table-striped table-bordered" width="100%" cellspacing="0" style="font-size: 15px;">
                                              <thead style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Folio</th>
                                                      <th>Fecha Registro</th>
                                                      <th>Motivo</th>
                                                      <th>Visualizar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Cantidad</th>
                                                      <th>Motivo</th>
                                                      <th>Visualizar</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php       
mysqli_set_charset($conexion, 'utf8');    
$consulta= "SELECT
  o.id_orden_salida,
  o.folio_orden_salida,
  o.fecha_registro,
  o.comentario,
  o.id_sucursal,
  o.destino,
  o.vista
FROM
  orden_salida AS o
WHERE o.id_sucursal = '$s_IdSucursal'
ORDER BY o.folio_orden_salida DESC";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                  
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                    $originalDate = $row[2];
                    $newDate = date("d/m/Y", strtotime($originalDate));
 ?>  
                                                     <tr align="center">
                                                      <td>
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td id="producto"><?php echo $row[1]?></td>
                                                      <td id="tipo"><?php echo $newDate?></td>
                                                      <td id="tipo"><?php echo $row[3]?></td>
                                                       <?php 
                                                      if ($num >= 1) 
                                                        {
                                                          if ($row[6]==0) 
                                                          {  
                                                            echo "<td><a onclick='javascript:NoVisualizar();'><i class='fa fa-eye-slash fa-2x color-icono'></i></a></td>";
                                                          }    

                                                          if ($row[6]!=0)
                                                          { 
                                                            echo "<td><a onclick=\"javascript:MostrarDetalleOrdenSalida('$row[1]');\" ><i class='fa fa-eye fa-2x color-icono'></i></a></td>";
                                                          }
                                                        }
                                                     else
                                                        {
                                                            echo "<td><a a onclick=\"javascript:MostrarDetalleOrdenSalida('$row[1]');\" ><i class='fa fa-eye-slash fa-2x color-icono'></i></a></td>";
                                                        } 
                                                      ?>    
                                                
                                                 </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>
<?php } ?>  
<?php if ($s_idUsuario < 67) 
{
  $qry0 = "SELECT o.vista, o.folio_orden_salida FROM orden_salida AS o WHERE o.vista != 0 AND o.id_sucursal = '$id_sucursal'";
  $consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());                   
  $row0 = mysqli_fetch_array($consulta0);
  $num = mysqli_num_rows($consulta0);  
  if ($num >= 1) 
  {
    echo " <div id='titulov'> <h2 style='color: Black;'>DETALLES DE LA ORDEN</h2> </div>";
    echo "<section id='listadetallesorden'>";
    include("orden_salidalistado_detalles.php");
    echo "</section>";
  }
  else
  {
    echo "<section id='listadetallesorden' hidden>";
    include("orden_salidalistado_detalles.php");
    echo "</section>";
  } 
}
?>
<script src="../js/modal.js"></script>
<script src="../js/status.js"></script>
<script src="../js/reportes.js"></script>
<script src="../js/acomodo.js"></script>