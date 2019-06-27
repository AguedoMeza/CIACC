<head>
	<link href="../assets/css/bootstrap.css" rel="stylesheet" />
 	<link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
</head>

<div class="modal fade" id="editcontra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Confirmar Contraseña</h4></center>
                </div>
                <div class="modal-body">
 <form id="frmContraUsuarios" method="post" class="form-vertical" action="">
                        <div class="panel panel-green">
                                <div class="panel-heading titulo">
                                   <h2>Ingrese la contraseña actual</h2>
                                </div>
                <input  style="display:none" name="id_usuariocontra" id="id_usuariocontra" value="">
                <input  style="display:none" name="cnombreusuario" id="cnombreusuario" value="">
                <input  style="display:none" name="contrareal" id="contrareal" value="">
                 <select style="display:none" class="form-control" id="ctipousuario" required>
                                              <!--  <option>Seleccione el departamento</option> -->
                                                <?php
                                                mysqli_set_charset($conexion, 'utf8');
                                              $consulta= "SELECT id_usuario_tipo, nombre
                                                    FROM usuarios_tipo WHERE activo = 1
                                                    ";

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    }

                                                 
                                                ?>
                                               </select>

                
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="nombre" class="lbl">Contraseña :</label>
                                           <div class="error">
                                               <input type="password" class="form-control" id="contrasena1" autofocus placeholder="Contraseña" name="contrasena1" required>
                                            </div>
                                    </div>
                                    </div>
                                  
                                  
                                </div>
                            </div>
                         </div> 
                    </form>   
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="iniciarUsuariosModal1();iniciarUsuarios();"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="guardar" onclick="javascript:VerificarContraUsuario();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Usuario</h4></center>
                </div>
                <div class="modal-body">
 <form id="frmEditarUsuarios" method="post" class="form-vertical" action="">
                        <div class="panel panel-green">
                                <div class="panel-heading titulo">
                                   <h2>Registra la información solicitada</h2>
                                </div>
								<input  style="display:none" name="id_usuario" id="id_usuario" value="">
                            <div class="panel-body">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="nombre" class="lbl">Nombre :</label>
                                           <div class="error">
                                               <input class="form-control" id="enombreusuario" autofocus placeholder="Nombre del Usuario" name="enombreusuario" maxlength="8" required>
                                            </div>
                                    </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                     <div class="form-group">
                                                <label class="lbl">Tipo Usuario:</label>
                                                 <select  class="form-control" id="etipousuario" required>
                                              <!--  <option>Seleccione el departamento</option> -->
                                                <?php
                                                mysqli_set_charset($conexion, 'utf8');
                                              $consulta= "SELECT id_usuario_tipo, nombre
                                                    FROM usuarios_tipo WHERE activo = 1
                                                    ";

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    }

                                                 
                                                ?>
                                               </select>
                                              </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="nombre" class="lbl">Contraseña :</label>
                                   <div class="error">
                                       <input type="password" class="form-control" id="econtrasena" autofocus placeholder="Contraseña" name="econtrasena" required>
                                    </div>
                            </div>
                            </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="form-group">
                                <label for="nombre" class="lbl">Confirmar Contraseña :</label>
                                   <div class="error">
                                       <input type="password" class="form-control" id="econfirmarcontra" autofocus placeholder="Confirmar Contraseña" name="econfirmarcontra" required>
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
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdateUsuarios();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>

     <script src="../jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../js/modal.js"></script>
    <script src="../js/iniciar.js"></script>
   
<!-- /.modal -->