
<head>
	<link href="../assets/css/bootstrap.css" rel="stylesheet" />
 	<link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../plugins/select2-3.5.4/select2.css">
</head>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"  style="background-color: #530a6b; color: white; font-family: Verdana;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Persona</h4></center>
                </div>
                <div class="modal-body">
                <form method="POST">
                <div class="panel-body">
                <div class="form-group">
                                <input  style="display:none" name="id_persona" id="id_persona" value="">
                            </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="nombre" class="lbl">Nombre :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="enombre" autofocus placeholder="Coloca el nombre" name="enombre" required>
                                                    </div>
                                                </div>               
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">       
                                                <div class="form-group">
                                                    <label class="lbl" for="paterno">Apellido Paterno :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="epaterno" placeholder="Coloca el primer apellido" name="epaterno" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"> 
                                                <div class="form-group">
                                                    <label class="lbl" for="materno">Apellido Materno :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="ematerno" placeholder="Coloca el segundo apellido" name="ematerno" required>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="row">  
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                              <div class="form-group">
                                                <label class="lbl">Estado Civil:</label>
                                                <select name="ecivil" class="form-control select2" style="width: 100%;" id="ecivil">
                                                  <option required selected="selected" value="Soltero(a)">Soltero(a)</option>  
                                                  <option value="Casado(a)">Casado(a)</option>
                                                  <option value="Viudo(a)">Viudo(a)</option>
                                                  <option value="Divorciado(a)">Divorciado(a)</option>
                                                  <option value="Union Libre">Union Libre</option>
                                                  <option value="No especificado">No especificado</option>
                                                </select>
                                              </div><!-- /.form-group -->              
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="form-group">    
                                                    <label class="lbl" for="telefono">Telefono :</label>
                                                    <div class="error">
                                                    <input  class="form-control"  id="etelefono" placeholder="Casa o Celular" name="etelefono" required>
                                                    </div>
                                                </div>               
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <div class="error">
                                                    <label class="lbl" for="correo">Email :</label>
                                                    <input class="form-control" id="ecorreo" placeholder="Correo" name="ecorreo" required>
                                                    </div>
                                                </div>               
                                            </div>
                                        </div>  
                                     <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                                <div class="form-group">    
                                                    <label class="lbl" for="colonia">Colonia :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="ecolonia" placeholder="Colonia" name="ecolonia" required>
                                                    </div>
                                                </div>               
                                            </div>
                                              <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                                <div class="form-group">    
                                                    <label class="lbl" for="calle">Calle :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="ecalle" placeholder="Calle" name="ecalle" required>
                                                    </div>
                                                </div>               
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                                <div class="form-group">    
                                                    <label class="lbl" for="numero">Numero :</label>
                                                    <div class="error">
                                                    <input class="form-control caja" min="0" id="enumero" placeholder="Numero" name="enumero" required>
                                                    </div>
                                                </div>               
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <label class="lbl" for="estado">Estado :</label>
                                                <select  onchange="seleccionadomodal(this.value, 0, true);" class="form-control" id="eestado">
                                         <?php
                                                $consulta= "SELECT id_estado, estado
                                                    FROM estados
                                                    ";

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                      
                                                       // echo "<option value=\"$row[0]\">$row[1]</option>";
                                                      echo "<option value=\"$row[0]\"> $row[1] </option>";
                                                    }

                                                 
                                                ?>
                                               </select>
                                                </div>               
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                              <div class="form-group">
                                                <label for="municipio">Municipio :</label>
                                                 <select id="municipioselec" class="selectpicker form-control">
                                         
                                                </select>
                                              </div>            
                                            </div>
                                        </div>

                                   
                                </div>
                            </form> 
               </div> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdatePersonas();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>


    <script src="../js/modal.js"></script>
<script src="../plugins/select2-3.5.4/select2.js"></script>
   <script>
$(document).ready(function() {
$('#ecivil').select2();
} );
</script>
<!-- /.modal -->