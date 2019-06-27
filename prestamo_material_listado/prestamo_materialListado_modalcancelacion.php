<?php 
include("../configuracion/conexion.php"); 
$pId=$_POST["id_prestamo"]; ?>
<head>
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/chkbox.css">
    <script src="../jquery-3.2.1.min.js"></script>
</head>
<script src="../js/iniciar.js"></script>
<!-- <script>
  $(document).ready(function() {
  $(".modal").on("hidden.bs.modal", function() {
    $("#contenedorp").empty();
  });
});
</script> -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<!--   <a data-controls-modal="editar" data-backdrop="static" data-keyboard="false" href="#"> -->
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header" style="background: #2a6496; color: white; font-family: ArialBack; ">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Status Orden</h4></center>
                </div>
                <div class="modal-body">
 <form id="frmCancelacionPrestamo" method="post" class="form-vertical" action="">
                        
                               
                            
                                <div class="productos" id="contenedorp"> 
                                  <?php 
                                    include'../configuracion/conexion.php';  
                                    $s_IdSucursal = $_SESSION["s_IdSucursal"];
                                    mysqli_set_charset($conexion, 'utf8');
                                    $consulta2="SELECT p.nombre
                                    FROM
                                    prestamo_material_detalle AS pd
                                    INNER JOIN prestamo_material AS pm
                                    ON pm.folio_prestamo = pd.folio_prestamo
                                    INNER JOIN productos AS p 
                                    ON p.id_producto = pd.id_producto
                                    WHERE pm.proceso_cancelacion = 1 AND pm.id_sucursal = '$s_IdSucursal'";
                                    $qry2=mysqli_query($conexion,$consulta2) or die (mysqli_connect_error());
                                    $row2=mysqli_fetch_row($qry2); 
                                    $Producto=$row2[0]; 
                                  do {
                                          $Producto=$row2[0];   ?>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                      <div class="form-check">
                                      <label class="container"><?php echo $Producto ?>
                                        <input type="checkbox" id="epersonas" value="1">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                  </div>
                                 <?php } while ($row2=mysqli_fetch_row($qry2)); ?>
                                </div>

                           
                         
                    </form>    
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdateStatusPrestamo();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>
