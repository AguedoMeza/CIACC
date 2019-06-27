 <?php 
include'../configuracion/conexion.php';
include'../global_seguridad/verificar_sesion.php';
$Idusuario=$_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];  ?>
<head>
	<link href="../assets/css/bootstrap.css" rel="stylesheet" />
 	<link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
</head>
<div class="modal fade" id="editproductos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Producto</h4></center>
                </div>
                <div class="modal-body">
<form id="frmNuevoProductos" method="post" class="form-vertical" action="">
                  <div class="panel panel-green">
                        <div class="panel-heading titulo">
                          
                        </div>

                    <div class="panel-body">
                      <input  style="display:none" name="id_producto" id="id_producto" value="">
                        <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Nombre:</label>
                                                <div class="error">
                                                    <input class="form-control" id="enombre" autofocus placeholder="Nombre del Producto" name="enombre" required>
                                                </div>
                                            </div>
                                        </div>
                                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Descripcion:</label>
                                                <div class="error">
                                                    <input class="form-control" id="edescripcion"   placeholder="Descripción del Producto" name="edescripcion" required>
                                                </div>
                                       </div>
                                    </div>
                                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label class="lbl" for="estado">Tipo Producto :</label>
                                                <select  class="form-control" id="etipoproducto" required>
                                              <!--  <option>Seleccione el departamento</option> -->
                                                <?php
                                                mysqli_set_charset($conexion, 'utf8');
                                              $consulta= "SELECT id_tipo_producto, nombre_tipo_producto
                                                    FROM productos_tipo WHERE activo = 1 AND id_sucursal = '$s_IdSucursal'
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
                              </div>
                             <div class="row">
                                       <div id="cboconsumibles" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label class="lbl" for="estado">El producto es :</label>
                                                <select  class="form-control" id="econsumible">
                                                  <option value="1">Consumible</option>
                                                  <option value="0">No Consumible</option>
                                                ?>
                                               </select>
                                       </div>
                                    </div>
                                     <div id="ecbounidad" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Unidad:</label>
                                                <div class="error">
                                                   <select  class="form-control" id="idunidad">
                                                <?php
                                              $consulta= "SELECT id_unidad, unidad
                                                    FROM unidades_medida WHERE id_sucursal = '$s_IdSucursal'
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
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                         <div class="form-group">
                                                <label for="nombre" class="lbl">Stock Minimo:</label>
                                                <div class="error">
                                                    <input class="form-control" id="eminimo" type="number" min="0.01" step="0.01" placeholder="Cantidad Minima" name="eminimo" required>
                                                </div>
                                            </div>
                                    </div>
                                  </div>
                  </div> <br><br>
              </form>    
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdateProductos();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>

     <script src="../jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../js/modal.js"></script>
   
<!-- /.modal -->