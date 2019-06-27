<head>
	<link href="../assets/css/bootstrap.css" rel="stylesheet" />
 	<link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
</head>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #115686; color: white; font-family: Verdana;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Puesto</h4></center>
                </div>
                <div class="modal-body">
                    <form id="frmNuevoTrabajadores" method="post" class="form-vertical" action="">
                        <div class="panel panel-green">
                                <div class="panel-heading titulo">
                                  
                                </div>

                            <div class="panel-body">
                            <input  style="display:none" name="id_puesto" id="id_puesto" value="">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="nombre" class="lbl">Nombre:</label>
                                           <div class="error">
                                               <input class="form-control" id="enombrepuesto" autofocus placeholder="Nombre Puesto" name="enombrepuesto"  required>
                                            </div>
                                    </div>  
                                   </div>
                                   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="nombre" class="lbl">Descripción:</label>
                                           <div class="error">
                                               <input class="form-control" id="edescripcion" autofocus placeholder="Descripción Puesto" name="edescripcion"  required>
                                            </div>
                                    </div>  
                                   </div>
                                </div>
                            </div>
                        </div> 
                    </form> 
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdatePuestos();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>

     <script src="../jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../js/modal.js"></script>
   
<!-- /.modal -->