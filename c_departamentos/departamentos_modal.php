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
                    <center><h4 class="modal-title" id="myModalLabel">Editar Departamento</h4></center>
                </div>
                <div class="modal-body">
             <form>
                           
                            <input  style="display:none" name="id_departamento" id="id_departamento" value="">
                                <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Nombre :</label>
                                                <div class="error">
                                                    <input class="form-control" id="enombredepartamento" autofocus placeholder="Nombre del Departamento" name="enombredepartamento" required onkeyup="siglamodal(this.value)">
                                                </div>
                                            </div>
                                  </div>
                                   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Abreviatura :</label>
                                                <div class="error">
                                                    <input class="form-control" id="esiglas" class="c_mayus" autofocus name="esiglas" disabled>
                                                </div>
                                       </div>
                                    </div>
                                </div>
                            
                    </form>    
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-success" id="guardar" onclick="javascript:UpdateDepartamentos();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>


    <script src="../jquery-3.2.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../js/modal.js"></script>
    <script src="../js/departamentos_siglas.js"></script>