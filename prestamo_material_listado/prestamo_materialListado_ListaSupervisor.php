﻿<script type="text/javascript">

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
         stateSave: true
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

<table id="tablaPrestamos" class="table table-bordered" width="100%" cellspacing="0" style="font-size: 15px;">
                                              <thead style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Folio</th>
                                                      <th>Solicitante</th>
                                                      <th>Motivo</th>
                                                      <th>Fecha Registro</th>
                                                      <th>Status</th>
                                                      <th>Visualizar</th>
                                                      <th>Editar Status</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Folio</th>
                                                      <th>Solicitante</th>
                                                      <th>Motivo</th>
                                                      <th>Fecha Registro</th>
                                                      <th>Status</th>
                                                      <th>Visualizar</th>
                                                      <th>Editar Status</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php 
include("../configuracion/conexion.php"); 
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];  

$qry0 = "SELECT p.vista FROM prestamo_material AS p WHERE p.vista != 0 AND id_sucursal = '$s_IdSucursal'";
$consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());                   
$row0 = mysqli_fetch_array($consulta0);
$num = mysqli_num_rows($consulta0);  
mysqli_set_charset($conexion, 'utf8');

$consulta= "SELECT
  p.id_prestamo,
  p.folio_prestamo,
  p.id_trabajador,
  p.motivo,
  p.fecha_registro,
  p.estado,
  CONCAT(
    ps.nombre,
    ' ',
    ps.ap_paterno,
    ' ',
    ps.ap_materno
  ) AS Solicitante,
  p.vista
FROM
  prestamo_material AS p
INNER JOIN trabajadores AS t ON t.id_trabajador = p.id_trabajador
INNER JOIN personas AS ps ON ps.id_persona = t.id_persona
WHERE p.id_sucursal = '$s_IdSucursal'
ORDER BY
  p.fecha_registro DESC";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                  
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                    $originalDate = $row[4];
                    $newDate = date("d/m/Y", strtotime($originalDate));
                   if ($row[5]== "0")
                     {
                        $status="Pendiente";
                     } 
                   else if ($row[5]== "2")
                    {
                        $status="Cancelada";
                    }
                   else if ($row[5]== "1")
                    {
                        $status="Completada";
                    }

                    
 ?>  
                                                     <tr align="center">
                                                      <td class="<?php echo $status; ?>">
                                                        <?php echo $n ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?>" id="numorden">
                                                      <?php echo $row[1]?>
                                                      </td>
                                                      <td class="<?php echo $status; ?>" id="proveedor">
                                                      <?php echo $row[6]?>
                                                      </td>
                                                      <td class="<?php echo $status; ?>" id="fecharegistro">
                                                      <?php echo $row[3]?>
                                                      </td>
                                                      <td class="<?php echo $status; ?>" id="descripcion">
                                                      <?php echo $newDate?>
                                                      </td>
                                                      <td class="<?php echo $status; ?>" id="estado">
                                                      <?php echo $status?>
                                                      </td>
                                                      <?php 
                                                      if ($num >= 1) 
                                                      	{
	                                                      	if ($row[7]==0) 
	                                                        {  
															echo "<td class= $status><a onclick='javascript:NoVisualizar();'><i class='fa fa-eye-slash fa-2x color-icono'></i></a></td>";
														    }    

														    if ($row[7]!=0)
														    { 
															echo "<td class= $status ><a onclick=\"javascript:MostrarDetallePrestamo('$row[1]');\" ><i class='fa fa-eye fa-2x color-icono'></i></a></td>";
															}
                                                      	}
                                                      else
		                                                {
		                                                    echo "<td class= $status ><a a onclick=\"javascript:MostrarDetallePrestamo('$row[1]');\" ><i class='fa fa-eye-slash fa-2x color-icono'></i></a></td>";
		                                                }
                                                      ?>    
                                                <?php 
                                                if ($row[5] == 1 || $row[5] == 2) {
                                                  echo "<td class='$status'><a onclick=javascript:NoEditarStatus();><i class='fa fa-edit fa-2x'></i></a></td>"; 
                                                }
                                                else
                                                {
                                                 echo "<td class='$status'><a onclick=\"javascript:ObtenerStatusPrestamo('$row[0]', '$row[5]');\"><i class='fa fa-edit fa-2x'></i></a></td>";  
                                                }
                                                ?>
		                                             
		                                             
                                                 </tr>

                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>
<script src="../js/modal.js"></script>
<script src="../js/status.js"></script>
<script src="../js/reportes.js"></script>