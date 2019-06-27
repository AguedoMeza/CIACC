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
                    <center><h4 class="modal-title" id="myModalLabel">Editar Inventario</h4></center>
                </div>
                <div class="modal-body">
<form id="frmNuevoProductos" method="post" class="form-vertical" action="">
                  <div class="panel panel-green">
                        <div class="panel-heading titulo">
                          
                        </div>

                    <div class="panel-body">
                       <input  style="display:none" name="id_inventario" id="id_inventario" value="">
                        <div class="row">
                                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label class="lbl" for="estado">Producto:</label>
                                                <select  class="form-control" id="eproducto" disabled>
                                              <!--  <option>Seleccione el departamento</option> -->
                                                <?php
                                                 // mysqli_query("SET NAMES utf8"); 
                                              $consulta= "SELECT id_producto, nombre
                                                    FROM productos WHERE activo = 1
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
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Cantidad Actual:</label>
                                                <div class="error">
                                                    <input type="number" class="form-control" id="ecantidad" step="0.01" disabled name="cantidad" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Cantidad Agregar:</label>
                                                <div class="error">
                                                    <input type="number" class="form-control" id="eagregar" min="0" step="0.01" autofocus placeholder="Cantidad Agregar" name="eagregar" required>
                                                </div>
                                            </div>
                                        </div>
                                 </div>
                           </div>
                  </div> <br><br>
              </form>    
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdateInventarios();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>

     <script src="../jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../js/modal.js"></script>
   
<!-- /.modal -->