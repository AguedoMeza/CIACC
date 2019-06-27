<?php  include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

$consulta0= "SELECT id_sucursal, contador_orden FROM sucursales WHERE id_sucursal = '$s_IdSucursal'";
                     $qry0=mysqli_query($conexion,$consulta0) or die (mysqli_connect_error());
                     $row0 = mysqli_fetch_array($qry0);
                     $IDSucursal= $row0[0];
                     $contador= $row0[1];
                     $Folio= $IDSucursal . $contador . $s_idUsuario;
?>

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
    <h2 style="color: Black;">Productos Agregados</h2>
                             
<table id="tablaProductos" class="table table-striped table-bordered" width="100%" cellspacing="0" style="font-size: 15px;">
                                              <thead style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Cantidad</th>
                                                      <th>Motivo</th>
                                                      <th>Eliminar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Cantidad</th>
                                                      <th>Motivo</th>
                                                      <th>Eliminar</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php       
mysqli_set_charset($conexion, 'utf8');    
$consulta= "SELECT od.id_orden_salida_detalle, od.id_producto, od.nombre_producto, od.cantidad, od.motivo_salida, od.productofijo
FROM
orden_salida_detalle AS od
WHERE folio_orden_salida = '$Folio'
ORDER BY od.nombre_producto ASC";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                  
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                    
 ?>  
                                                     <tr align="center">
                                                      <td>
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td id="producto"><?php echo $row[2]?></td>
                                                      <td id="tipo"><?php echo $row[3]?></td>
                                                      <td id="tipo"><?php echo $row[4]?></td>
                                                      <td><a onclick="EliminarProductoOrdenSalida(<?php echo $row[0]; ?>, <?php echo $row[5]; ?>);"><i class="fa fa-trash-o fa-2x"></i></a></td>
                                                 </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>