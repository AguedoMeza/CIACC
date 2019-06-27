<div class="modal fade" id="editarunidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" " style="background-color: #115686; color: white; font-family: Verdana;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel1">Agregar Unidad</h4></center>
                </div>
                <div class="modal-body">
              <form  method="post" class="form-vertical" action="">
                  <div class="panel panel-green">
                        <div class="panel-heading titulo">
                          
                        </div>

                    <div class="panel-body">
                      <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Unidad:</label>
                                                <div class="error">
                                                    <input class="form-control" id="tipouni" autofocus placeholder="Nueva Unidad" name="eunidad">
                                                </div>
                                            </div>
                                        </div>
                              </div>
                  </div>

              </form> 
               <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="agregar" onclick="javascript:AgregarUnidad();">Agregar</a>
                </div>   
               </div>
          </div>
    </div>
 </div>
