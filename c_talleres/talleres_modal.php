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
                    <center><h4 class="modal-title" id="myModalLabel">Editar Taller</h4></center>
                </div>
                <div class="modal-body">
 <form id="frmNuevoTalleres" method="post" class="form-vertical" action="">
                        <div class="panel panel-green">

                            <div class="panel-body">
                            <input  style="display:none" name="id_taller" id="id_taller" value="">
                                <div class="row">
                                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Nombre:</label>
                                                <div class="error">
                                                    <input class="form-control" id="enombre" autofocus placeholder="Nombre del Taller" name="enombre" required>
                                                </div>
                                            </div>
                                  </div>
                                   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="form-group">
                                                    <label class="lbl" for="etallerista">Tallerista :</label>
                                                <select  class="form-control" id="etallerista" required>
                                           <!--     <option>Seleccione el puesto</option> -->
                                                <?php
                                                 // mysqli_query("SET NAMES utf8"); 
                                              $consulta= "SELECT p.id_persona, CONCAT(p.nombre, ' ', p.ap_paterno, ' ', p.ap_materno) as Persona, t.id_sucursal
                                                FROM personas AS p  INNER JOIN trabajadores AS t
                                                ON p.id_persona = t.id_persona
                                                WHERE t.activo = 1 AND p.estrabajador = 1 AND p.activo=1
                                                 AND t.id_sucursal = '$s_IdSucursal'";

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    }

                                                 
                                                ?>
                                               </select>
                                     </div>       
                                   </div>
                                   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Descripción:</label>
                                                <div class="error">
                                                    <input class="form-control" id="edescripcion"   placeholder="Descripcion del Taller" name="edescripcion" required >
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
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdateTalleres();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>

     <script src="../jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../js/modal.js"></script>
   
<!-- /.modal -->