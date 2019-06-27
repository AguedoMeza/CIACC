<?php include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"]; ?>
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
                    <center><h4 class="modal-title" id="myModalLabel">Editar Trabajador</h4></center>
                </div>
                <div class="modal-body">
<form id="frmNuevoTrabajadores" method="post" class="form-vertical" action="">
                        <div class="panel panel-green">
                                <div class="panel-heading titulo">
                                  
                                </div>

                            <div class="panel-body">
                            <input  style="display:none" name="id_trabajador" id="id_trabajador" value="">
                                <div class="row">
                                         <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                          <div class="form-group">
                                                          <label class="lbl" for="estado">Puesto :</label>
                                                      <select  class="form-control" id="epuesto" onchange="HabilitarNumeroEmpleadoModal();">
                                                     <option>Seleccione el puesto</option>
                                                      <?php
                                                       // mysqli_query("SET NAMES utf8"); 
                                                    $consulta= "SELECT id_puesto, nom_puesto
                                                          FROM puestos WHERE activo = 1
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
                                                            <label class="lbl" for="estado">Departamento :</label>
                                                        <select  class="form-control" id="edepartamento" name="edepartamento">
                                                      <option>Selecciona el departamento</option>
                                                        <?php
                                                    
                                                       
                                                       
                                                         // mysqli_query("SET NAMES utf8"); 
                                                      $consulta= "SELECT id_departamento, nom_departamento
                                                  FROM departamentos WHERE activo = 1";

                                                          $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                           while ($row=mysqli_fetch_row($qry))
                                                            {
                                                               echo "<option value=\"$row[0]\">$row[1]</option>";
                                                            }

                                                         
                                                        ?>
                                                       </select>
                                             </div>       
                  
                                           </div>
                                         
                                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="eextension">
                                          <div class="form-group">
                                                          <label class="lbl" for="estado">Extensión :</label>
                                                      <select  class="form-control" id="esucursal">
                                                     <option>Seleccione la Extensión</option>
                                                      <?php
                                                         $consulta= "SELECT id_sucursal, nombre
                                                          FROM sucursales WHERE activo = 1
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
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="enumero">
                                    <div class="form-group">
                                        <label for="nombre" class="lbl">Número Empleado:</label>
                                           <div class="error">
                                               <input class="form-control" id="enumempleado" autofocus placeholder="Número de Empleado" name="enumempleado"  required>
                                            </div>
                                    </div>  
                                   </div>
                                   <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                                  <label class="lbl" for="fechaing">Fecha de Ingreso:</label>
                                                  <div class="error">
                                                  <input type="date" class="form-control" id="efechaing" name="efechaing" value="<?php echo $fecha;?>"  min="<?php echo $fecha;?>" >
                                                  </div>
                                            </div>   
                                   </div>
                                   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" id="eareas">
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
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdateTrabajadores();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>

  <script src="../jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
  <script src="../js/modal.js"></script>
  <script src="../js/acomodo.js"></script>
   
<!-- /.modal -->