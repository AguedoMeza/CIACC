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
                    <center><h4 class="modal-title" id="myModalLabel">Editar Sucursal</h4></center>
                </div>
                <div class="modal-body">
 <form id="frmNuevoSucursales" method="post" class="form-vertical" action="">
                        <div class="panel panel-green">

                            <div class="panel-body">
                            <input  style="display:none" name="id_sucursal" id="id_sucursal" value="">
                                <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Nombre:</label>
                                                <div class="error">
                                                    <input class="form-control" id="enombresucursal" autofocus placeholder="Nombre de la Sucursal" name="enombresucursal">
                                                </div>
                                            </div>
                                        </div>
                                   <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Dirección:</label>
                                                <div class="error">
                                                    <input class="form-control" id="edireccion"  autofocus placeholder="Dirección de la Sucursal" name="edireccion" >
                                                </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Correo Electrónico:</label>
                                                <div class="error">
                                                    <input class="form-control" id="ecorreo"   placeholder="Email de la Sucursal" name="ecorreo" required>
                                                </div>
                                       </div>
                                    </div>
                                </div>
                                <div class="row">
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Telefono:</label>
                                                <div class="error">
                                                    <input class="form-control" id="etelefono"   placeholder="Teléfono de la Sucursal" name="etelefono" required >
                                                </div>
                                       </div>
                                    </div>
                                     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Descripcion:</label>
                                                <div class="error">
                                                    <input class="form-control" id="edescripcion"   placeholder="Descripción de la Sucursal" name="edescripcion" required>
                                                </div>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Área:</label>
                                                <div class="error">
                                                    <select class="form-control" name="earea" id="earea">
                                                    <option value="1">Área #1</option>
                                                    <option value="2">Área #2</option>
                                                    <option value="3">Área #3</option>
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
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdateSucursales();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>

     <script src="../jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../js/modal.js"></script>
   
<!-- /.modal -->