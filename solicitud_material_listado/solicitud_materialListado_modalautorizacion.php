<link rel="stylesheet" href="../assets/css/checkboxmodal.css">
<div class="modal fade" id="editparcial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background: #530a6b; color: white; font-family: ArialBack; ">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Cantidad de Material Autorizado</h4></center>
                </div>
<div class="modal-body" id="contenedorp">
<?php include("../configuracion/conexion.php");
include'../global_seguridad/verificar_sesion.php';
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
$id_sucursal1=$_POST["id_sucursal0"]; 
$id_solicitud1=$_POST["id_solicitud_post0"]; 

if ($s_idUsuario < 67) 
{
 mysqli_set_charset($conexion, 'utf8');
$consulta0= "SELECT CONCAT(sd.producto,' ',sd.descripcion), sd.cantidad, u.unidad, s.folio_solicitud, sd.cantidad_autorizada, sd.id_solicitud_material_detalle
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
<br><br>
<section id="tablamodal">
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
                                                      <td><input id="cantidad<?php echo $row[5]?>" type="number" min="0.01" step="0.01"></td>
                                                      <td><a onclick="AgregarCantidadAutorizada(<?php echo $row[5]; ?>);"><i class="fa fa-plus fa-2x"></i></a></td>
                                                      </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>
</section>
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="guardar" onclick="javascript:FinalizarSolicitud();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>
 <script src="../js/acomodo.js"></script>