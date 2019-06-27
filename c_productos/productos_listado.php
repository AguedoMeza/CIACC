<?php include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"]; ?>
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
<section>
<div><a style="float: right;font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #0c7932;" class="btn btn-block" onclick="xclproducto();">EXCEL <i class='fa fa-clipboard'></i></a> 
</div>

<div  style="float: right;"> <font size="2"><b>Reportes: </b></font><a style="float: right; font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #e23e39;" class="btn btn-block" onclick="pdfSucursal();">PDF <i class='fa fa-file-pdf'></i></a> 
</div><br>
</section><br>
<table id="tablaProductos" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                              <thead style="background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Nombre</th>
                                                      <th>Tipo Producto</th>
                                                      <th>Stock Minimo</th>
                                                      <th>Consumible</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="background-color: #530a6b; color: white;">
                                                  <tr>
                                                     <th>#</th>
                                                      <th>Nombre</th>
                                                      <th>Tipo Producto</th>
                                                      <th>Stock Minimo</th>
                                                      <th>Consumible</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php 
mysqli_set_charset($conexion, 'utf8');
$consulta= "SELECT p.id_producto, CONCAT(p.nombre,' ',p.descripcion_producto) AS Nombre, p.nombre, tp.nombre_tipo_producto, p.activo, p.id_tipo_producto, p.consumible, p.id_unidad, 
p.descripcion_producto, p.stock_minimo
FROM productos AS p 
INNER JOIN productos_tipo AS tp
ON p.id_tipo_producto = tp.id_tipo_producto
WHERE p.id_sucursal = '$s_IdSucursal'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                  // $consulta=mysqli_query($conexion,"SELECT nom_puesto, activo FROM puestos") or die (mysqli_error());
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                    if ($row[4]==0) {
                        $status="inactivo";
                        $chStatus="<i class='fa fa-square-o fa-2x'></i>";
                     } 
                    if ($row[4]==1) {
                        $status="activo";
                        $chStatus="<i class='fa fa-check-square-o fa-2x'></i>";
                    }
                    if ($row[6]==0) {
                        $consumible="NO";
                    }
                    if ($row[6]==1) {
                        $consumible="SI";
                    }

 ?>  
                                                  <tr align="center">
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[1] ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[3] ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[9] ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $consumible ?>
                                                      </td>
                                                      <td><a onclick="statusProducto(<?php echo $row[0]; ?>,<?php echo $row[4]; ?>);">
                                                          <?php echo $chStatus; ?>
                                                        </a>
                                                      </td>
                                                         <?php
                                                    if ($row[4]==0) { 

echo "<td><a onclick='javascript:NoEditar();'><i class='fa fa-edit fa-2x color-icono'></i></a></td>";
}   ?>

<?php
if ($row[4]==1){ 
echo "<td><a onclick=\"javascript:ObtenerProductos('$row[0]', '$row[2]', '$row[5]','$row[6]', '$row[7]', '$row[8]', '$row[9]');\" ><i class='fa fa-edit fa-2x color-icono'></i></a></td>";
 }?>                               
                                                  </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
 crossorigin="anonymous"></script> -->
 <script src="../js/status.js"></script>
 <script src="../js/modal.js"></script>
