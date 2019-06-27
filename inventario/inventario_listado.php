<link type="text/css" href="../assets/css/custom.css" rel="stylesheet">
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
         stateSave: true
    } );
} );

</script>
<section>
<div><a style="float: right;font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #0c7932;" class="btn btn-block" onclick="xclinventario();">EXCEL <i class='fa fa-clipboard'></i></a> 
</div>

<div  style="float: right;"> <font size="2"><b>Reportes: </b></font><a style="float: right; font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #e23e39;" class="btn btn-block" onclick="pdfSucursal();">PDF <i class='fa fa-file-pdf'></i></a> 
</div><br>
</section><br>
<table id="tablaProductos" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                              <thead style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Tipo Producto</th>
                                                      <th>Cantidad Almacén</th>
                                                      <th>Total</th>
                                                      <th>Stock Minimo</th>
                                                      <th>Activo</th>
                                                      <th>Agregar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr>
                                                     <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Tipo Producto</th>
                                                      <th>Cantidad Almacén</th>
                                                      <th>Total</th>
                                                      <th>Stock Minimo</th>
                                                      <th>Activo</th>
                                                      <th>Agregar</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php 
mysqli_set_charset($conexion, 'utf8');
$consulta= "SELECT i.id_inventario, i.id_producto, p.nombre, i.cantidad_almacen, i.cantidad_total, i.activo, p.descripcion_producto, tp.nombre_tipo_producto,
CONCAT(p.nombre,' ',p.descripcion_producto), p.stock_minimo
FROM inventario_almacen AS i
INNER JOIN productos AS p 
ON p.id_producto = i.id_producto 
INNER JOIN productos_tipo AS tp
ON p.id_tipo_producto = tp.id_tipo_producto
WHERE i.id_sucursal = '$s_IdSucursal'
ORDER BY tp.nombre_tipo_producto ASC";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                  // $consulta=mysqli_query($conexion,"SELECT nom_puesto, activo FROM puestos") or die (mysqli_error());
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                    if ($row[5]==0) {
                        $status="inactivo";
                        $chStatus="<i class='fa fa-square-o fa-2x'></i>";
                     } 
                      if ($row[5]==1) {
                        $status="activo";
                        $chStatus="<i class='fa fa-check-square-o fa-2x'></i>";
                    }
                    if ($row[4] == $row[9])
                     {
                        $statustock="#d6d369b0";
                     } 
                    if ($row[4] < $row[9])
                    {
                        $statustock="#d44545ad";
                    }
                     if ($row[4] > $row[9])
                    {
                        $statustock="";
                    }
                   

 ?>  
                                                  <tr align="center">
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[8] ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[7] ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[3] ?>
                                                      </td>
                                                      <td style="background-color: <?php echo $statustock; ?>" class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[4] ?>
                                                      </td>
                                                      <td  class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[9] ?>
                                                      </td>
                                                      <td><a  onclick="statusInventario(<?php echo $row[0]; ?>,<?php echo $row[5]; ?>);">
                                                          <?php echo $chStatus; ?>
                                                        </a>
                                                      </td>
                                                         <?php
                                                    if ($row[5]==0) { 

echo "<td><a onclick='javascript:NoEditar();'><i class='fa fa-plus fa-2x color-icono'></i></a></td>";
}   ?>

<?php
if ($row[5]==1){ 
echo "<td><a onclick=\"javascript:ObtenerInventarios('$row[0]','$row[1]','$row[3]');\" ><i class='fa fa-plus fa-2x color-icono'></i></a></td>";
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
