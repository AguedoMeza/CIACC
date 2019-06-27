<head>
	<link href="../assets/css/bootstrap.css" rel="stylesheet" />
 	<link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
</head>
<div class="modal fade" id="editarunidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #530a6b; color: white; font-family: Verdana;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Agregar Unidad</h4></center>
                </div>
                <div class="modal-body">
              <form id="frmNuevoUnidades" method="post" class="form-vertical" action="">
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
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="guardar" onclick="javascript:AgregarUnidad();">Agregar</a>
                </div>   
               </div>
          </div>
    </div>
 </div>
     <script src="../jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../js/modal.js"></script>
    <script src="../js/refrescar.js"></script>
     <script src="../assets/js/bootstrap.min.js"></script>
<!-- <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script> -->


   
<!-- /.modal -->