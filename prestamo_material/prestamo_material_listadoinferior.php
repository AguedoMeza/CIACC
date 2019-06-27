<?php  include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

$consulta0= "SELECT id_sucursal, contador FROM sucursales WHERE id_sucursal = '$s_IdSucursal'";
                     $qry0=mysqli_query($conexion,$consulta0) or die (mysqli_connect_error());
                     $row0 = mysqli_fetch_array($qry0);
                     $IDSucursal= $row0[0];
                     $contador= $row0[1];
                     $Folio= $IDSucursal . $contador . $s_idUsuario;
?>

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
         stateSave: true,
         "language": idioma_español
    } );
} );

</script>
   <h2 style="color: Black;">Listado Prestamo</h2>
                             
<table id="tablaInferior" class="table table-striped table-bordered" width="100%" cellspacing="0" style="font-size: 15px;">
                                              <thead style="background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Tipo Producto</th>
                                                      <th>Unidad</th>
                                                      <th>Cantidad Almacen</th>
                                                      <th>Cantidad</th>
                                                      <th>Eliminar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Tipo Producto</th>
                                                      <th>Unidad</th>
                                                      <th>Cantidad Almacen</th>
                                                      <th>Cantidad</th>
                                                      <th>Eliminar</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php   
 include("../configuracion/conexion.php");     
 mysqli_set_charset($conexion, 'utf8');   
$consulta= "SELECT pr.id_detalle_prestamo, pr.id_producto, p.nombre , tp.nombre_tipo_producto, u.unidad, pr.cantidad, i.cantidad_almacen
FROM 
prestamo_material_detalle AS pr
INNER JOIN productos AS p
ON pr.id_producto = p.id_producto
INNER JOIN productos_tipo AS tp
ON tp.id_tipo_producto = p.id_tipo_producto
INNER JOIN unidades_medida AS u
ON u.id_unidad = p.id_unidad
INNER JOIN inventario_almacen AS i
ON i.id_producto = pr.id_producto
WHERE pr.folio_prestamo = '$Folio'
ORDER BY pr.cantidad DESC";
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
                                                      <td id="unidad"><?php echo $row[4]?></td>
                                                      <td id="cantidad"><?php echo $row[6]?></td>
                                                      <td id="cantidad"><?php echo $row[5]?></td>
                                                      <td><a onclick="EliminarProductoPrestamo(<?php echo $row[0]; ?>);"><i class="fa fa-trash-o fa-2x"></i></a></td>
                                                 </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>

                        