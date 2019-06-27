<?php include("../configuracion/conexion.php") ?>
<script type="text/javascript">

$(document).ready(function() {

    $('#tablaPuestos').DataTable( {
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
<section>
<div><a style="float: right;font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #0c7932;" class="btn btn-block" onclick="xcltaller();">EXCEL <i class='fa fa-clipboard'></i></a> 
</div>

<div  style="float: right;"> <font size="2"><b>Reportes: </b></font><a style="float: right; font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #e23e39;" class="btn btn-block" onclick="pdfSucursal();">PDF <i class='fa fa-file-pdf'></i></a> 
</div><br>
</section><br>

<table id="tablaPuestos" class="table-striped table-bordered" width="100%" cellspacing="0">
                                              <thead style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Nombre</th>
                                                      <th>Descripción</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Nombre</th>
                                                      <th>Descripción</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody style="font-size: 15px">
<?php 
mysqli_set_charset($conexion, 'utf8');
$consulta= "SELECT id_puesto,nom_puesto, activo, descripcion FROM puestos";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                  // $consulta=mysqli_query($conexion,"SELECT nom_puesto, activo FROM puestos") or die (mysqli_error());
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                    if ($row[2]==0) {
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
                                                      <td id="nom" class="<?php echo $status; ?>"><?php echo $row[1]?></td>
                                                      <td id="descr" class="<?php echo $status; ?>"><?php echo $row[3]?></td>
                                                  	<td class="<?php echo $status; ?> centrar">
                                                        <a onclick="statusPuesto(<?php echo $row[0]; ?>,<?php echo $row[2]; ?>);"><?php echo $chStatus; ?>
                                                        </a>
                                                      </td>
                                                    <?php
                                                    if ($row[2]==0) { 

echo "<td><a onclick='javascript:NoEditar();'><i class='fa fa-edit fa-2x color-icono'></i></a></td>";
}   ?>

<?php
if ($row[2]==1){ 
echo "<td><a onclick=\"javascript:ObtenerPuestos('$row[0]','$row[1]','$row[3]');\" ><i class='fa fa-edit fa-2x color-icono'></i></a></td>";
 }?>                               
                                                  </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>


<!--  echo "<td><a onclick='javascript:ObtenerPuestos($row[0], $row[1]);'><i class='fa fa-edit fa-2x color-icono'></i></a></td>";}   --> 

<!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
 crossorigin="anonymous"></script> -->
 
<!--  <script src="../jquery-3.2.1.min.js"></script> -->

<script src="../js/modal.js"></script>
<script src="../js/status.js"></script>

<!-- FORMATO PARA EL DATATABLE -->
