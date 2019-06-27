<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="background: #530a6b; color: white; font-family: ArialBack; ">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Status Solicitud</h4></center>
                </div>
                <div class="modal-body">
 <form id="frmNuevoTipoPago" method="post" class="form-vertical" action="">
                        
                               
                            
                                <div class="row" align="center"> 
                                <input  style="display:none" name="id_solicitud" id="id_solicitud" value="">
                                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="lbl" for="status">Estado de la Solicitud:</label>
                                              <select  class="form-control" id="status" onchange="ExtensionDonante();">
                                                <option value="1">Autorizada</option> 
                                                <option value="4">En proceso</option>
                                                <option value="0">Pendiente</option>
                                                <option value="2">Cancelada</option>
                                              </select>
                                       </div>
                                   </div>
                                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="cancelacion">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Respuesta:</label>
                                                <div class="error">
                                                    <input class="form-control" id="comentario"   placeholder="Respuesta" name="comentario">
                                                </div>
                                       </div>
                                   </div>
                              
                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" hidden id="extdonante">
                                        <div class="form-group">
                                            <label class="lbl" for="asucursal">Extensión Donante:</label>
                                           <select  class="form-control" id="donante">
                                             <?php  include '../configuracion/conexion.php';
                                                    mysqli_set_charset($conexion, 'utf8');
                                                    $consulta11= "SELECT id_sucursal, nombre
                                                    FROM sucursales WHERE activo = 1";
                                                    $qry11=mysqli_query($conexion,$consulta11) or die (mysqli_connect_error());
                                                    while ($row11=mysqli_fetch_row($qry11))
                                                      { 
                                                         echo "<option value=\"$row11[0]\">$row11[1]</option>";
                                                      }
                                             ?>
                                           </select>
                                </div>
                              </div>
                             </div>
                         
                    </form>    
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdateStatusSolicitud();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>
 <script src="../js/acomodo.js"></script>
   