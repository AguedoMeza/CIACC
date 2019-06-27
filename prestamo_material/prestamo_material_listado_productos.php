<?php  include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
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
    <h2 style="color: Black;">Productos Almacén</h2>
                             
<table id="tablaProductos" class="table table-striped table-bordered" width="100%" cellspacing="0" style="font-size: 15px;">
                                              <thead style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Tipo Producto</th>
                                                      <th>Unidad</th>
                                                      <th>Cantidad</th>
                                                      <th>Agregar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Tipo Producto</th>
                                                      <th>Unidad</th>
                                                      <th>Cantidad</th>
                                                      <th>Agregar</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php       
mysqli_set_charset($conexion, 'utf8');    
$consulta= "SELECT i.id_inventario, i.id_producto, p.nombre, i.cantidad_almacen, i.cantidad_total, i.activo, p.descripcion_producto, tp.nombre_tipo_producto,
CONCAT(p.nombre,' ',p.descripcion_producto), u.unidad
FROM inventario_almacen AS i
INNER JOIN productos AS p 
ON p.id_producto = i.id_producto 
INNER JOIN productos_tipo AS tp
ON p.id_tipo_producto = tp.id_tipo_producto
INNER JOIN unidades_medida AS u
ON p.id_unidad = u.id_unidad
WHERE i.id_sucursal = '$s_IdSucursal' AND i.cantidad_almacen >= 1 AND i.activo = 1 AND p.activo = 1
ORDER BY tp.nombre_tipo_producto ASC";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                  
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                    
 ?>  
                                                     <tr align="center">
                                                      <td>
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td id="producto"><?php echo $row[8]?></td>
                                                      <td id="tipo"><?php echo $row[7]?></td>
                                                      <td id="tipo"><?php echo $row[9]?></td>
                                                      <td>
                                                        <input type="text" size="5" class="form-control" id="cantidad<?php echo $row[1]?>">  </td>
                                                      
                                                      <td><a onclick="AgregarPrestamo(<?php echo $row[1]; ?>);"><i class="fa fa-plus fa-2x"></i></a></td>
                                                 </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>