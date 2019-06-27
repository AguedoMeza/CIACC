<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="background: #530a6b; color: white; font-family: ArialBack; ">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Status Orden</h4></center>
                </div>
                <div class="modal-body">
 <form id="frmNuevoTipoPago" method="post" class="form-vertical" action="">
                        
                               
                            
                                <div class="row" align="center"> 
                                <input  style="display:none" name="id_prestamo" id="id_prestamo" value="">
                                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="lbl" for="status">Estado del Prestamo:</label>
                                              <select  class="form-control" id="status">
                                                <option value="1">Completada</option> 
                                                <option value="2">Cancelada</option>
                                               <!--  <option value="3">Incompleta</option>  -->
                                              </select>
                                       </div>
                                   </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="cancelacion">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Comentario:</label>
                                                <div class="error">
                                                    <input class="form-control" id="comentario"   placeholder="Comentario" name="comentario">
                                                </div>
                                       </div>
                                   </div>
                                </div>
                           
                         
                    </form>    
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdateStatusPrestamo();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>
   