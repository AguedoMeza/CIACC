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

    $('#tablaInferiorSolicitud').DataTable( {
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

   <h2 style="color: Black;">Materiales Solicitados</h2>
                             
<table id="tablaInferiorSolicitud" class="table table-striped table-bordered" width="100%" cellspacing="0" style="font-size: 15px;">
                                              <thead style="background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Cantidad</th>
                                                       <th>Unidad</th>
                                                      <th>Eliminar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Producto</th>                                                     
                                                      <th>Cantidad</th>
                                                       <th>Unidad</th>
                                                      <th>Eliminar</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php   
 include("../configuracion/conexion.php");  
$qry0 = "SELECT s.id_sucursal, s.contador_solicitud FROM sucursales AS s WHERE s.id_sucursal = '$s_IdSucursal'";
$consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());       
$row0 = mysqli_fetch_array($consulta0);
$IdSucursal = $row0[0];
$Contador = $row0[1];
$Folio= $s_IdSucursal . $s_idUsuario . $Contador;   
 mysqli_set_charset($conexion, 'utf8');   
$consulta= "SELECT sd.id_solicitud_material_detalle, CONCAT(sd.producto,' ',sd.descripcion), sd.cantidad, um.unidad
FROM
solicitud_material_detalle AS sd 
INNER JOIN unidades_medida AS um
ON um.id_unidad = sd.unidad  
WHERE sd.folio_solicitud = '$Folio'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                  
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                    
 ?>  
                                                     <tr align="center">
                                                      <td>
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td id="producto"><?php echo $row[1]?></td>
                                                      <td id="cantidad"><?php echo $row[2]?></td>
                                                       <td id="unidad"><?php echo $row[3]?></td>
                                                      <td><a onclick="EliminarProductoSolicitud(<?php echo $row[0]; ?>);"><i class="fa fa-trash-o fa-2x"></i></a></td>
                                                 </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>

