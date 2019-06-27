<head>
	<link href="../assets/css/bootstrap.css" rel="stylesheet" />
 	<link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
</head>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #530a6b; color: white; font-family: Verdana;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Inventario Fijo</h4></center>
                </div>
                <div class="modal-body">
<form id="frmNuevoInventarioFijo" method="post" class="form-vertical" action="">
                  <div class="panel panel-green">
                        <div class="panel-heading titulo">
                          
                        </div>

                    <div class="panel-body">
                      <input type="text" id="id_inventario_fijo" style="display: none;">
                               <div class="row">
                                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">QR:</label>
                                                <div class="error">
                                                    <input class="form-control" id="eqr"  autofocus placeholder="Agregue Código QR" name="qr" required>
                                                </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">C.I:</label>
                                                <div class="error">
                                                    <input type="text" class="form-control" id="eci" placeholder="Agregue C.I" name="ci" required>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Producto</label>
                                                <div class="error">
                                                    <input type="text" class="form-control" id="eproducto" placeholder="Descripción Producto" name="producto" required>
                                                </div>
                                            </div>
                                    </div>
                         </div>
                         <div class="row">
                                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Modelo:</label>
                                                <div class="error">
                                                    <input class="form-control" id="emodelo"   placeholder="Modelo del Producto" name="modelo" required>
                                                </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Serie:</label>
                                                <div class="error">
                                                    <input type="text" class="form-control" id="eserie" placeholder="Agregue la serie" name="serie" required>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Marca:</label>
                                                <div class="error">
                                                    <input type="text" class="form-control" id="emarca" placeholder="Marca Producto" name="marca" required>
                                                </div>
                                            </div>
                                    </div>
                                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Condiciones:</label>
                                                <div class="error">
                                                   <select class="form-control" name="econdiciones" id="econdiciones">
                                                    <option value="Bueno">Bueno</option>
                                                    <option value="Malo">Malo</option>
                                                   </select>
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
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdateInventarioFijo();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>

     <script src="../jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../js/modal.js"></script>
