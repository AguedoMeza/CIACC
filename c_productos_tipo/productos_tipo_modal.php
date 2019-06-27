<head>
	<link href="../assets/css/bootstrap.css" rel="stylesheet" />
 	<link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
</head>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Tipo Producto</h4></center>
                </div>
                <div class="modal-body">
 <form id="frmNuevoTipoPago" method="post" class="form-vertical" action="">
                        <div class="panel panel-green">
                                <div class="panel-heading titulo">
                                  
                                </div>

                            <div class="panel-body">
                                <div class="row"> 
                                <input  style="display:none" name="id_tipo_producto" id="id_tipo_producto" value="">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="nombre" class="lbl">Nombre :</label>
                                           <div class="error">
                                               <input class="form-control" id="enombre" autofocus placeholder="Nombre del Tipo Producto" name="nombre" required>
                                            </div>
                                    </div>  
                                   </div>
                                   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="nombre" class="lbl">Descripcion :</label>
                                           <div class="error">
                                               <input class="form-control" id="edescripcion"  placeholder="Descripción del Tipo Producto" name="nombre" required>
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
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdateTipoProducto();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>

     <script src="../jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../js/modal.js"></script>
   
<!-- /.modal -->