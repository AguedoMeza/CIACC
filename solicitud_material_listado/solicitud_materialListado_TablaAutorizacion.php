<?php include("../configuracion/conexion.php");
include'../global_seguridad/verificar_sesion.php';
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
$id_sucursal1=$_POST["id_sucursal0"]; 
$id_solicitud1=$_POST["id_solicitud_post0"]; 

if ($s_idUsuario < 67) 
{
 mysqli_set_charset($conexion, 'utf8');
$consulta0= "SELECT CONCAT(sd.producto,' ',sd.descripcion), sd.cantidad, u.unidad, s.folio_solicitud, sd.cantidad_autorizada
FROM
solicitud_material_detalle AS sd
INNER JOIN unidades_medida AS u
ON u.id_unidad = sd.unidad
INNER JOIN solicitud_material AS s
ON s.folio_solicitud = sd.folio_solicitud
WHERE s.folio_solicitud = '$id_solicitud1' 
ORDER BY sd.producto ASC";
$qry0=mysqli_query($conexion,$consulta0) or die (mysqli_connect_error()); 
}
                  
                     

                     ?>
<table id="tablaInferior" class="table table-striped table-bordered" width="100%" cellspacing="0" style="font-size: 15px; font-weight: bold;">
                                              <thead style="background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Cantidad Solicitada</th>
                                                      <th>Unidad</th>
                                                      <th>Cantidad Autorizada</th>
                                                      <th>Listo</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Cantidad Solicitada</th>
                                                      <th>Unidad</th>
                                                      <th>Cantidad Autorizada</th>
                                                      <th>Listo</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php   

     
                  $n=1;
                  while ($row=mysqli_fetch_row($qry0))
                  {
                    $folio = $row[3];
 ?>  
                                                     <tr align="center">
                                                      <td>
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td id="producto"><?php echo $row[0]?></td>
                                                      <td id="consumible"><?php echo $row[1]?></td>
                                                      <td id="cantidad"><?php echo $row[2]?></td>
                                                      <td ><input type="number" min="0.01" step="0.01"></td>
                                                     <?php 
                                                     if ($row[4]==0) 
                                                              {  
                                                              echo "<td><a onclick='javascript:llenarModalAutorizacionTabla('$id_solicitud1');'><i class='fa fa-times fa-2x'></i></a></td>";
                                                              } 
                                                      else
                                                      {
                                                         echo "<td><a onclick='javascript:llenarModalAutorizacionTabla('id_solicitud1');'><i class='fa fa-check fa-2x'></i></a></td>";
                                                      }
                                                      ?>
                                                      </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>