﻿<?php include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"]; ?>
<script type="text/javascript">

$(document).ready(function() {

    $('#tablaProductosTipo').DataTable( {
        "language": {
           // "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            "url": "../plugins/datatables/langauge/Spanish.json"
        },
        "order": [[ 0, "desc" ]],
       "paging":   true,
        "ordering": true,
        "info":     false,
        "searching": true,
         stateSave: true
    } );
} );

</script>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="float: right;">   
 <a style="float: right;font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px;" class="btn btn-success btn-block" onclick="pdfTipoProducto();">Reportes <i class='fa fa-clipboard'></i></a>                         
                             
  </div> <br><br>
<table id="tablaProductosTipo" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                              <thead style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Nombre</th>
                                                      <th>Descripcion</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Nombre</th>
                                                      <th>Descripcion</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php 
                  mysqli_set_charset($conexion, 'utf8');
								$qry= "SELECT id_tipo_producto, nombre_tipo_producto, descripcion, activo, descripcion  FROM productos_tipo WHERE id_sucursal = '$s_IdSucursal'";
                     $consulta=mysqli_query($conexion,$qry) or die (mysqli_connect_error());
                  // $consulta=mysqli_query($conexion,"SELECT nom_puesto, activo FROM puestos") or die (mysqli_error());
                  $n=1;
                  while ($row=mysqli_fetch_row($consulta))
                  {
                    if ($row[3]==0) {
                        $status="inactivo";
                        $chStatus="<i class='fa fa-square-o fa-2x'></i>";
                     } 
                    else{
                        $status="activo";
                        $chStatus="<i class='fa fa-check-square-o fa-2x'></i>";
                    }

 ?>  
                                                  <tr align="center">
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $n ?>
                                                      </td>
                                                     
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[1] ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[4] ?>
                                                      </td>
                                                      <td class="centrar">
                                                        <a onclick="statusTipoProducto(<?php echo $row[0]; ?>,<?php echo $row[3]; ?>);">
                                                          <?php echo $chStatus; ?>
                                                        </a>
                                                      </td>
                                                      <?php
                                                    if ($row[3]==0) { 

echo "<td><a onclick='javascript:NoEditar();'><i class='fa fa-edit fa-2x color-icono'></i></a></td>";
}   ?>

<?php
if ($row[3]==1){ 
echo "<td><a onclick=\"javascript:ObtenerTipoProducto('$row[0]','$row[1]','$row[2]');\" ><i class='fa fa-edit fa-2x color-icono'></i></a></td>";
 }?>                               
                                                  </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>
<script src="../js/modal.js"></script>
<script src="../js/status.js"></script>