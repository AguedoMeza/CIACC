<script type="text/javascript">

$(document).ready(function() {
    $('#tablaPersonas').DataTable( {
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
<?php include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];?>

<section>
<div><a style="float: right;font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #0c7932;" class="btn btn-block" onclick="xclpersona();">EXCEL <i class='fa fa-clipboard'></i></a> 
</div>

<div  style="float: right;"> <font size="2"><b>Reportes: </b></font><a style="float: right; font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #e23e39;" class="btn btn-block" onclick="pdfPersona();">PDF <i class='fa fa-file-pdf'></i></a> 
</div><br>
</section><br>

<table id="tablaPersonas" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                              <thead>
                                                  <tr class="titulot" style="background-color: #530a6b; color: white;">
                                                      <th>#</th>
                                                      <th>Nombre</th>
                                                      <th>Correo</th>
                                                      <th>Telefono</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Nombre</th>
                                                      <th>Correo</th>
                                                      <th>Telefono</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php 
                  // mysqli_query("SET NAMES utf8");
                mysqli_set_charset($conexion, 'utf8');
								$qry= "SELECT personas.id_persona,
                                          CONCAT(nombre, ' ', ap_paterno, ' ', ap_materno) as PERSONA,
                                          nombre,
                                          ap_paterno,
                                          ap_materno,
                                          correo,
                                          telefono,
                                          activo,
                                          ecivil,
                                          colonia,
                                          calle,
                                          numero,
                                          estado,
                                          municipio
                                          FROM
                                          personas
                                          WHERE id_sucursal = '$s_IdSucursal'";
                     $consulta=mysqli_query($conexion,$qry) or die (mysqli_connect_error());
                  // $consulta=mysqli_query($conexion,"SELECT nom_puesto, activo FROM puestos") or die (mysqli_error());
                  $n=1;
                  while ($row=mysqli_fetch_row($consulta))
                  {
                    if ($row[7]==0) {
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
                                                        <?php echo $row[5] ?>
                                                      </td>
                                                      <td class="<?php echo $status; ?> centrar">
                                                        <?php echo $row[6] ?>
                                                      </td>
                                                      <td class="centrar">
                                                        <a onclick="statusPersona(<?php echo $row[0]; ?>,<?php echo $row[7]; ?>);">
                                                          <?php echo $chStatus; ?>
                                                        </a>
                                                      </td>
                                                      <?php
                                                    if ($row[7]==0) { 

echo "<td><a onclick='javascript:NoEditar();'><i class='fa fa-edit fa-2x color-icono'></i></a></td>";
}   ?>

<?php
if ($row[7]==1){

echo "<td><a onclick=\"javascript:ObtenerPersonas('$row[0]','$row[2]','$row[3]','$row[4]','$row[8]','$row[6]','$row[5]','$row[9]','$row[10]','$row[11]', '$row[12]', '$row[13]');\" ><i class='fa fa-edit fa-2x color-icono'></i></a></td>";
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
