<?php include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"]; ?>
<script type="text/javascript">

$(document).ready(function() {

    $('#tablaProductos').DataTable( {
        "language": {
           // "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            "url": "plugins/datatables/langauge/Spanish.json"
        },
        "order": [[ 0, "desc" ]],
       "paging":   true,
        "ordering": true,
        "info":     false,
        "searching": true,
         stateSave: true,
         "language": idioma_español
    } );
} );
var idioma_español = {
  "sProcessing":     "Procesando...",
  "sLengthMenu":     "Mostrar _MENU_ registros",
  "sZeroRecords":    "No se encontraron resultados",
  "sEmptyTable":     "Ningún dato disponible en esta tabla",
  "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
  "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
  "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
  "sInfoPostFix":    "",
  "sSearch":         "Buscar:",
  "sUrl":            "",
  "sInfoThousands":  ",",
  "sLoadingRecords": "Cargando...",
  "oPaginate": {
    "sFirst":    "Primero",
    "sLast":     "Último",
    "sNext":     "Siguiente",
    "sPrevious": "Anterior"
  },
  "oAria": {
    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
  }
}
</script>
<section>
<div><a style="float: right;font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #0c7932;" class="btn btn-block" onclick="xclinventariofijo();">EXCEL <i class='fa fa-clipboard'></i></a> 
</div>

<div  style="float: right;"> <font size="2"><b>Reportes: </b></font><a style="float: right; font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #e23e39;" class="btn btn-block" onclick="pdfPersona();">PDF <i class='fa fa-file-pdf'></i></a> 
</div><br>
</section><br>

<table id="tablaProductos" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                              <thead style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>QR</th>
                                                      <th>CI</th>
                                                      <th>Producto</th>
                                                      <th>Modelo</th>
                                                      <th>Serie</th>
                                                      <th>Marca</th>
                                                      <th>Condiciones</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr>
                                                     <th>#</th>
                                                      <th>QR</th>
                                                      <th>CI</th>
                                                      <th>Producto</th>
                                                      <th>Modelo</th>
                                                      <th>Serie</th>
                                                      <th>Marca</th>
                                                      <th>Condiciones</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php 
include("../configuracion/conexion.php");
$s_IdSucursal = $_SESSION["s_IdSucursal"];
mysqli_set_charset($conexion, 'utf8');
$consulta= "SELECT i.id_inventario_fijo, i.qr, i.ci, i.nombre_producto, i.modelo, i.serie, i.marca, i.condiciones, i.activo
FROM
inventario_fijo AS i
WHERE i.id_sucursal = '$s_IdSucursal' AND salida = 0
ORDER BY i.qr ASC";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                  // $consulta=mysqli_query($conexion,"SELECT nom_puesto, activo FROM puestos") or die (mysqli_error());
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                    if ($row[8]==0) {
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
                                                        <?php echo $row[2] ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[3] ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[4] ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[5] ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[6] ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[7] ?>
                                                      </td>
                                                      <td><a onclick="statusInventarioFijo(<?php echo $row[0]; ?>,<?php echo $row[8]; ?>);">
                                                          <?php echo $chStatus; ?>
                                                        </a>
                                                      </td>
                                                         <?php
                                                    if ($row[8]==0) { 

echo "<td><a onclick='javascript:NoEditar();'><i class='fa fa-edit fa-2x color-icono'></i></a></td>";
}   ?>

<?php
if ($row[8]==1){ 
echo "<td><a onclick=\"javascript:ObtenerInventarioFijo('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]');\" ><i class='fa fa-edit fa-2x color-icono'></i></a></td>";
 }?>                               
                                                  </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
 crossorigin="anonymous"></script> -->
 <script src="../js/status.js"></script>
 <script src="../js/modal.js"></script>
