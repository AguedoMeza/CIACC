<div class="modal fade" id="editcomentario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" " style="background-color: #530a6b; color: white; font-family: Verdana;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Agregar Comentario</h4></center>
                </div>
                <div class="modal-body">
              <form method="post" class="form-vertical" action="">
                  <div class="panel panel-green">
                        <div class="panel-heading titulo">
                          
                        </div>

                    <div class="panel-body">
                      <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Comentario:</label>
                                                <div class="error">
                                                    <input class="form-control" id="coment" autofocus placeholder="Nueva Unidad" name="coment">
                                                </div>
                                            </div>
                                        </div>
                              </div>
                  </div>

              </form> 
               <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="guardar" onclick="javascript:AgregarComentario();">Agregar</a>
                </div>   
               </div>
          </div>
    </div>
 </div>
 
<!-- <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script> -->


   
<!-- /.modal -->