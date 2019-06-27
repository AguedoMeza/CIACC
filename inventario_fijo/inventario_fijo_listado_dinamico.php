<?php include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
$id_sucursal=$_POST["asucursal"]; ?>
<script type="text/javascript">

$(document).ready(function() {
   $("#inventariof").addClass("active-menu"); 
   $("#inventario").addClass("active-menu"); 
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
                                                      <th>Condiciones</th>                                                  </tr>
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
WHERE i.id_sucursal = '$id_sucursal' AND salida = 0
ORDER BY i.qr ASC";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                  // $consulta=mysqli_query($conexion,"SELECT nom_puesto, activo FROM puestos") or die (mysqli_error());
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                   

 ?>  
                                                  <tr align="center">
                                                      <td >
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td >
                                                        <?php echo $row[1] ?>
                                                      </td>
                                                      <td >
                                                        <?php echo $row[2] ?>
                                                      </td>
                                                      <td >
                                                        <?php echo $row[3] ?>
                                                      </td>
                                                      <td >
                                                        <?php echo $row[4] ?>
                                                      </td>
                                                      <td >
                                                        <?php echo $row[5] ?>
                                                      </td>
                                                      <td >
                                                        <?php echo $row[6] ?>
                                                      </td>
                                                      <td >
                                                        <?php echo $row[7] ?>
                                                      </td>
                                                  </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>
 <script src="../js/status.js"></script>
 <script src="../js/modal.js"></script>
