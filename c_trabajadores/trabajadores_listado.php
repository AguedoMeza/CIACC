<?php 
include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"]; ?>

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
height:30px; background-color: #0c7932;" class="btn btn-block" onclick="xcltrabajador();">EXCEL <i class='fa fa-clipboard'></i></a> 
</div>

<div  style="float: right;"> <font size="2"><b>Reportes: </b></font><a style="float: right; font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #e23e39;" class="btn btn-block" onclick="pdfTrabajador();">PDF <i class='fa fa-file-pdf'></i></a> 
</div><br>
</section><br>
<table id="tablaPuestos" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                              <thead style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Nombre</th>
                                                      <th>Departamento</th>
                                                      <th>Puesto</th>
                                                      <th>Extensión/Área</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Nombre</th>
                                                      <th>Departamento</th>
                                                      <th>Puesto</th>
                                                      <th>Extensión/Área</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                  </tr>
                                              </tfoot>
                                            <tbody>
<?php 
include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"]; 

if ($s_idUsuario == 61 || $s_idUsuario == 62 || $s_idUsuario == 63 || $s_idUsuario == 64) 
{
		mysqli_set_charset($conexion, 'utf8');
// if ($s_idUsuario == 1) {
            $consulta= "SELECT
  t.id_trabajador AS ID,
  CONCAT(
    p.nombre,
    ' ',
    p.ap_paterno,
    ' ',
    p.ap_materno
  ) AS Persona,
  d.nom_departamento AS Departamento,
  pu.nom_puesto AS Puesto,
  t.activo,
  t.fecha_ingreso,
  t.num_empleado,
  t.id_departamento,
  t.id_puesto,
  t.id_sucursal,
  t.area,
  s.nombre
FROM
  trabajadores AS t
INNER JOIN personas AS p ON t.id_persona = p.id_persona
INNER JOIN departamentos AS d ON t.id_departamento = d.id_departamento
INNER JOIN puestos AS pu ON t.id_puesto = pu.id_puesto
INNER JOIN sucursales AS s ON s.id_sucursal = t.id_sucursal
WHERE t.id_puesto != 83 AND t.id_puesto != 86 AND t.id_puesto != 87 AND t.id_usuario = '$s_idUsuario'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());       # code...
}

if ($s_idUsuario == 65 || $s_idUsuario == 66 || $s_idUsuario == 1)
{
		mysqli_set_charset($conexion, 'utf8');
// if ($s_idUsuario == 1) {
            $consulta= "SELECT
  t.id_trabajador AS ID,
  CONCAT(
    p.nombre,
    ' ',
    p.ap_paterno,
    ' ',
    p.ap_materno
  ) AS Persona,
  d.nom_departamento AS Departamento,
  pu.nom_puesto AS Puesto,
  t.activo,
  t.fecha_ingreso,
  t.num_empleado,
  t.id_departamento,
  t.id_puesto,
  t.id_sucursal,
  t.area,
  s.nombre
FROM
  trabajadores AS t
INNER JOIN personas AS p ON t.id_persona = p.id_persona
INNER JOIN departamentos AS d ON t.id_departamento = d.id_departamento
INNER JOIN puestos AS pu ON t.id_puesto = pu.id_puesto
INNER JOIN sucursales AS s ON s.id_sucursal = t.id_sucursal 
WHERE  t.id_puesto != 83 AND t.id_puesto != 86 AND t.id_puesto != 87";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());   
}
else if ($s_idUsuario >= 67)
{
	mysqli_set_charset($conexion, 'utf8');
            $consulta= "SELECT
  t.id_trabajador AS ID,
  CONCAT(
    p.nombre,
    ' ',
    p.ap_paterno,
    ' ',
    p.ap_materno
  ) AS Persona,
  d.nom_departamento AS Departamento,
  pu.nom_puesto AS Puesto,
  t.activo,
  t.fecha_ingreso,
  t.num_empleado,
  t.id_departamento,
  t.id_puesto,
  t.id_sucursal,
  t.area,
  s.nombre
FROM
  trabajadores AS t
INNER JOIN personas AS p ON t.id_persona = p.id_persona
INNER JOIN departamentos AS d ON t.id_departamento = d.id_departamento
INNER JOIN puestos AS pu ON t.id_puesto = pu.id_puesto
INNER JOIN sucursales AS s ON s.id_sucursal = t.id_sucursal
WHERE t.id_puesto != 83 AND t.id_puesto != 86 AND t.id_puesto != 87 AND t.id_sucursal = '$s_IdSucursal'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());       # code
}

                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
                  {
                    if ($row[4]==0) {
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
                                                      <?php if ($row[8] != 82) { ?>
                                                         <td class="<?php echo $status; ?> centrar">
                                                              <?php echo $row[11] ?>
                                                         </td>
                                                    <?php  }  ?>
                                                   <?php  if ($row[8] == 82) { ?>
                                                        <?php  if ($row[10] == 1) { ?>
                                                          <td class="<?php echo $status; ?> centrar">
                                                              <?php echo "Área 1" ?>
                                                         </td>
                                                         <?php }  ?>
                                                         <?php  if ($row[10] == 2) { ?>
                                                          <td class="<?php echo $status; ?> centrar">
                                                              <?php echo "Área 2" ?>
                                                         </td>
                                                         <?php }  ?>
                                                         <?php  if ($row[10] == 3) { ?>
                                                          <td class="<?php echo $status; ?> centrar">
                                                              <?php echo "Área 3" ?>
                                                         </td>
                                                         <?php }  ?>
                                                   <?php }  ?>
                                                      <td class="centrar">
                                                        <a onclick="statusTrabajador(<?php echo $row[0]; ?>,<?php echo $row[4]; ?>);">
                                                          <?php echo $chStatus; ?>
                                                        </a>
                                                      </td>
                                                      <?php
                                                    if ($row[4]==0) { 

echo "<td><a onclick='javascript:NoEditar();'><i class='fa fa-edit fa-2x color-icono'></i></a></td>";
}   ?>

<?php
if ($row[4]==1){ 
echo "<td><a onclick=\"javascript:ObtenerTrabajadores('$row[0]','$row[7]','$row[8]','$row[5]','$row[6]','$row[9]','$row[10]');\" ><i class='fa fa-edit fa-2x color-icono'></i></a></td>";
 }?>                               
                                                  </tr>
                                                        <?php 
                                                                        $n++;
                                                                          }
                                                         ?>
                                              </tbody>
</table>
 <script src="../js/status.js"></script>
 <script src="../js/modal.js"></script>
