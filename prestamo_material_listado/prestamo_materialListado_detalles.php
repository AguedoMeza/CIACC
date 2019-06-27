<?php include("../configuracion/conexion.php");
include'../global_seguridad/verificar_sesion.php';
$s_IdSucursal = $_SESSION["s_IdSucursal"];
mysqli_set_charset($conexion, 'utf8');
$consulta0= "SELECT pd.id_detalle_prestamo, pd.folio_prestamo, p.nombre, pt.nombre_tipo_producto, p.consumible, u.unidad, pd.cantidad
FROM
prestamo_material_detalle AS pd
INNER JOIN productos AS p
ON p.id_producto = pd.id_producto
INNER JOIN productos_tipo AS pt
ON pt.id_tipo_producto = p.id_tipo_producto
INNER JOIN unidades_medida AS u
ON u.id_unidad = p.id_unidad
INNER JOIN prestamo_material AS m
ON m.folio_prestamo = pd.folio_prestamo
WHERE m.vista != 0 AND m.id_sucursal = '$s_IdSucursal'";
                     $qry0=mysqli_query($conexion,$consulta0) or die (mysqli_connect_error()); 
                     
                     

                     ?>
                     <script type="text/javascript">

$(document).ready(function() {

    $('#tablaInferior').DataTable( {
        "language": {
           // "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            "url": "plugins/datatables/langauge/Spanish.json"
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
height:30px; background-color: #e23e39;" class="btn btn-block" onclick="pdfPrestamoMaterial();">Reporte <i class='fa fa-file-pdf'></i></a> </div> <br><br>
<table id="tablaInferior" class="table table-striped table-bordered" width="100%" cellspacing="0" style="font-size: 15px; font-weight: bold;">
                                              <thead style="background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Tipo Producto</th>
                                                      <th>Consumible</th>
                                                      <th>Cantidad</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Producto</th>
                                                      <th>Tipo Producto</th>
                                                      <th>Consumible</th>
                                                      <th>Cantidad</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php   

     
                  $n=1;
                  while ($row=mysqli_fetch_row($qry0))
                  {
                  	 $folio = $row[1];
                     $consumible=$row[4];
                     if ($consumible == 0) 
                     {
                       $consumible = "No Consumible";
                     }
                     else
                     {
                      $consumible = "Consumible";
                     }
                    
 ?>  
                                                     <tr align="center">
                                                      <td>
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td id="producto"><?php echo $row[2]?></td>
                                                      <td id="tipo"><?php echo $row[3]?></td>
                                                      <td id="consumible"><?php echo $consumible?></td>
                                                      <td id="cantidad"><?php echo $row[6]?></td>
                                                      </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>
 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
 <?php 

   echo "<input value='Cerrar' onclick=\"javascript:MostrarDetallePrestamo('$folio');\" class='btn btn-warning pull-right btn-block'>"; 

?>
</div>
