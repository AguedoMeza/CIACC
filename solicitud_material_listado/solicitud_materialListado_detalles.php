<?php include("../configuracion/conexion.php");
include'../global_seguridad/verificar_sesion.php';
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
$id_sucursal=$_POST["asucursal"]; 
if ($s_idUsuario >= 67) {
mysqli_set_charset($conexion, 'utf8');
$consulta0= "SELECT CONCAT(sd.producto,' ',sd.descripcion), sd.cantidad, u.unidad, s.folio_solicitud, sd.cantidad_autorizada
FROM
solicitud_material_detalle AS sd
INNER JOIN unidades_medida AS u
ON u.id_unidad = sd.unidad
INNER JOIN solicitud_material AS s
ON s.folio_solicitud = sd.folio_solicitud
WHERE s.vista != 0 AND s.id_sucursal = '$s_IdSucursal'
ORDER BY sd.producto ASC";
                     $qry0=mysqli_query($conexion,$consulta0) or die (mysqli_connect_error());
?>
   <div id='titulov'> <h2 style='color: Black;'>DETALLES DE LA SOLICITUD</h2> </div>
 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="float: right;">   
 <a style="float: right;font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #e23e39;" class="btn btn-block" onclick="pdfSolicitudMaterial();">Reporte <i class='fa fa-file-pdf'></i></a> </div> <br><br>
<?php 
}
if ($s_idUsuario < 67) 
{
 mysqli_set_charset($conexion, 'utf8');
$consulta0= "SELECT CONCAT(sd.producto,' ',sd.descripcion), sd.cantidad, u.unidad, s.folio_solicitud
FROM
solicitud_material_detalle AS sd
INNER JOIN unidades_medida AS u
ON u.id_unidad = sd.unidad
INNER JOIN solicitud_material AS s
ON s.folio_solicitud = sd.folio_solicitud
WHERE s.vista != 0 AND s.id_sucursal = '$id_sucursal'
ORDER BY sd.producto ASC";
$qry0=mysqli_query($conexion,$consulta0) or die (mysqli_connect_error()); 
}
                     
                     

                     ?>
<br><br>
<table id="tablaInferior" class="table table-striped table-bordered" width="100%" cellspacing="0" style="font-size: 15px; font-weight: bold;">
                                              <thead style="background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Cant. Solicitada</th>
                                                      <th>Unidad</th>
                                                      <th>Cant. Autorizada</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Cant. Solicitada</th>
                                                      <th>Unidad</th>
                                                      <th>Cant. Autorizada</th>
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
                                                      <td id="autorizada"><?php echo $row[4]?></td>
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
   echo "<input value='Cerrar' onclick=\"javascript:MostrarDetalleSolicitud('$folio', '$id_sucursal');\" class='btn btn-warning pull-right btn-block'>";
 }
 if ($s_idUsuario >= 67) 
 {
   echo "<input value='Cerrar' onclick=\"javascript:MostrarDetalleSolicitud('$folio', '$s_IdSucursal');\" class='btn btn-warning pull-right btn-block'>"; 
 }
?>
</div>