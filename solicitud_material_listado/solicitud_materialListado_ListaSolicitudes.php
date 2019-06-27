<script type="text/javascript">

$(document).ready(function() {

    $('#tablaPrestamos').DataTable( {
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
<script type="text/javascript">
  $(document).ready(function() {
    $('#tablaSolicitudes').DataTable( {
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
height:30px; background-color: #0c7932;" class="btn btn-block" onclick="xclprestamosmaterial();">EXCEL <i class='fa fa-clipboard'></i></a> 
</div>

<div  style="float: right;"> <font size="2"><b>Reportes: </b></font><a style="float: right; font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #e23e39;" class="btn btn-block" onclick="pdfSucursal();">PDF <i class='fa fa-file-pdf'></i></a> 
</div><br>
</section><br>


                                              
<?php 
include("../configuracion/conexion.php"); 
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];  
$id_sucursal=$_POST["asucursal"]; 



if ($s_idUsuario == 61 || $s_idUsuario == 62 || $s_idUsuario == 63 || $s_idUsuario == 64 || $s_idUsuario == 65 || $s_idUsuario == 66 || $s_idUsuario == 1) 
{
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
         stateSave: true,
         "language": idioma_español
    } );
} );

</script>
<?php  
$qry0 = "SELECT s.vista FROM solicitud_material AS s WHERE s.vista != 0 AND s.id_sucursal = '$id_sucursal'";
$consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());                   
$row0 = mysqli_fetch_array($consulta0);
$num = mysqli_num_rows($consulta0);  
mysqli_set_charset($conexion, 'utf8');
$consulta= "SELECT s.folio_solicitud, s.fecha_registro, s.comentario, s.estatus, s.vista, s.id_solicitud_material, s.id_sucursal_donante, s.respuesta
FROM
solicitud_material AS s
WHERE s.id_sucursal = '$id_sucursal'
ORDER BY s.fecha_registro ASC";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
  ?>       
  <table id="tablaPrestamos" class="table table-bordered" width="100%" cellspacing="0" style="font-size: 15px; font-weight: bold;">
                                            <thead style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Folio</th>
                                                      <th>Fecha Solicitud</th>
                                                      <th>Comentario</th>
                                                      <th>Status</th>
                                                      <th>Editar Status</th>
                                                      <th>Visualizar</th>
                                                  </tr>
                                              </thead>
                                              <?php    
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                    $originalDate = $row[1];
                    $newDate = date("d/m/Y", strtotime($originalDate));
                  if ($row[3]== "0")
                     {
                        $status="Pendiente";
                        $icono = "pendiente.png";
                     } 
                   else if ($row[3]== "2")
                    {
                        $status="Cancelada";
                        $icono = "cancelado.png";
                    }
                   else if ($row[3]== "1")
                    {
                        $status="Completada";
                        $icono = "completado.png";
                    }
                    else if ($row[3]== "4")
                    {
                        $status="Proceso";
                        $icono = "proceso.png";
                    }
                   if ($respuesta== "")
                    {
                        $respuesta="Sin Respuesta";
                    }
                     ?>
                                              <tbody>   
                                                     <tr align="center">
                                                      <td >
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td  id="numorden">
                                                      <?php echo $row[0]?>
                                                      </td>
                                                      <td  id="proveedor">
                                                      <?php echo $newDate?>
                                                      </td>
                                                      <td  id="fecharegistro">
                                                      <?php echo $row[2]?>
                                                      </td>
                                                      <td class="<?php echo $status; ?>" id="descripcion">
                                                     <?php echo "<img src='../assets/img/$icono' style='width: 30px; height: 30px;'>" ?>
                                                      </td>
                                                      <?php 
                                                   
                                                           echo "<td><a onclick=\"javascript:ObtenerStatusSolicitud('$row[5]', '$row[3]', '$row[6]', '$row[7]'); llenarModalAutorizacion('$row[0]', '$id_sucursal');\"><i class='fa fa-edit fa-2x'></i></a></td>";  
                                                       ?> 
                                                 <?php 
                                                      if ($num >= 1) 
                                                        {
                                                              if ($row[4]==0) 
                                                              {  
                                                              echo "<td><a onclick='javascript:NoVisualizar();'><i class='fa fa-eye-slash fa-2x color-icono'></i></a></td>";
                                                              }    

                                                              if ($row[4]!=0)
                                                              { 
                                                                echo "<td><a onclick=\"javascript:MostrarDetalleSolicitud('$row[0]', '$id_sucursal');\" ><i class='fa fa-eye fa-2x color-icono'></i></a></td>";
                                                              }
                                                        }
                                                        else
                                                      {
                                                          echo "<td><a onclick=\"javascript:MostrarDetalleSolicitud('$row[0]', '$id_sucursal');\" ><i class='fa fa-eye-slash fa-2x color-icono'></i></a></td>";
                                                      }
                                                      ?>   
                                                     
                                                 </tr>
          <?php $n++; } ?>
                                              </tbody>

                                              <tfoot class="titulot" style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Folio</th>
                                                      <th>Fecha Solicitud</th>
                                                      <th>Comentario</th>
                                                      <th>Status</th>
                                                      <th>Editar Status</th>
                                                      <th>Visualizar</th>
                                                  </tr>
                                              </tfoot>         
                                        </table>
<?php } ?>  


<?php 
if ($s_idUsuario >= 67)
{
 $qry0 = "SELECT s.vista FROM solicitud_material AS s WHERE s.vista != 0 AND s.id_sucursal = '$s_IdSucursal'";
$consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());                   
$row0 = mysqli_fetch_array($consulta0);
$num = mysqli_num_rows($consulta0);  
mysqli_set_charset($conexion, 'utf8');
$consulta= "SELECT s.folio_solicitud, s.fecha_registro, s.respuesta, s.estatus, s.vista, s.id_solicitud_material
FROM
solicitud_material AS s
WHERE s.id_sucursal = '$s_IdSucursal'
ORDER BY s.fecha_registro ASC";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
  ?>      
  <table id="tablaSolicitudes" class="table table-bordered" width="100%" cellspacing="0" style="font-size: 15px; font-weight: bold;">   
   <thead style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Folio</th>
                                                      <th>Fecha Solicitud</th>
                                                      <th>Respuesta</th>
                                                      <th>Status</th>
                                                      <th>Visualizar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Folio</th>
                                                      <th>Fecha Solicitud</th>
                                                      <th>Respuesta</th>
                                                      <th>Status</th>
                                                      <th>Visualizar</th>
                                                  </tr>
                                              </tfoot>
                                             
<?php    
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                    $respuesta = $row[2];
                    $originalDate = $row[1];
                    $newDate = date("d/m/Y", strtotime($originalDate));
                   if ($row[3]== "0")
                     {
                        $status="Pendiente";
                        $icono = "pendiente.png";
                     } 
                   else if ($row[3]== "2")
                    {
                        $status="Cancelada";
                        $icono = "cancelado.png";
                    }
                   else if ($row[3]== "1")
                    {
                        $status="Completada";
                        $icono = "completado.png";
                    }
                    else if ($row[3]== "4")
                    {
                        $status="Proceso";
                        $icono = "proceso.png";
                    }
                   if ($respuesta== "")
                    {
                        $respuesta="Sin Respuesta";
                    }
 ?>
                                                <tbody>   
                                                     <tr align="center">
                                                      <td >
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td  id="numorden">
                                                      <?php echo $row[0]?>
                                                      </td>
                                                      <td  id="proveedor">
                                                      <?php echo $newDate?>
                                                      </td>
                                                      <td  id="fecharegistro">
                                                      <?php echo $respuesta?>
                                                      </td>
                                                      <td class="<?php echo $status; ?>" id="descripcion">
                                                      <?php echo "<img src='../assets/img/$icono' style='width: 30px; height: 30px;'>" ?>
                                                      </td>
                                                      <?php 
                                                      if ($num >= 1) 
                                                        {
                                                          if ($row[4]==0) 
                                                          {  
                                                            echo "<td><a onclick='javascript:NoVisualizar();'><i class='fa fa-eye-slash fa-2x color-icono'></i></a></td>";
                                                              }    

                                                              if ($row[4]!=0)
                                                              { 
                                                            echo "<td><a onclick=\"javascript:MostrarDetalleSolicitud('$row[0]');\" ><i class='fa fa-eye fa-2x color-icono'></i></a></td>";
                                                            }
                                                        }
                                                      else
                                                    {
                                                        echo "<td><a a onclick=\"javascript:MostrarDetalleSolicitud('$row[0]');\" ><i class='fa fa-eye-slash fa-2x color-icono'></i></a></td>";
                                                    }
                                                      ?>
                                                
                                                 </tr>

                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>
<?php } ?>  
<?php if ($s_idUsuario < 67) 
{
  $qry0 = "SELECT s.vista, s.folio_solicitud FROM solicitud_material AS s WHERE s.vista != 0 AND s.id_sucursal = '$id_sucursal'";
  $consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());                   
  $row0 = mysqli_fetch_array($consulta0);
  $num = mysqli_num_rows($consulta0);  
  if ($num >= 1) 
  {
  	echo " <div id='titulov'> <h2 style='color: Black;'>DETALLES DE LA SOLICITUD</h2> </div>";
    echo "<section id='listaprevia'>";
    include("solicitud_materialListado_detalles.php");
    echo "</section>";
  }
  else
  {
    echo "<section id='listaprevia' hidden>";
    include("solicitud_materialListado_detalles.php");
    echo "</section>";
  } 
}
?>
<script src="../js/modal.js"></script>
<script src="../js/status.js"></script>
<script src="../js/reportes.js"></script>
<script src="../js/acomodo.js"></script>