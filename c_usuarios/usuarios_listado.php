<?php include("../configuracion/conexion.php")  ?>
<script type="text/javascript">

$(document).ready(function() {
    $('#tablaUsuarios').DataTable( {
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
height:30px; background-color: #0c7932;" class="btn btn-block" onclick="xclusuario();">EXCEL <i class='fa fa-clipboard'></i></a> 
</div>

<div  style="float: right;"> <font size="2"><b>Reportes: </b></font><a style="float: right; font-size:13px;font-family:Verdana,Helvetica;font-weight:bold;color:white;border:0px;width:100px;
height:30px; background-color: #e23e39;" class="btn btn-block" onclick="pdfSucursal();">PDF <i class='fa fa-file-pdf'></i></a> 
</div><br>
</section><br>
<table id="tablaUsuarios" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                              <thead style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr class="titulot">
                                                      <th>#</th>
                                                      <th>Nombre</th>
                                                      <th>Tipo Usuario</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                    <?php
 include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"]; 

 mysqli_set_charset($conexion, 'utf8');
 $consulta2= "SELECT id_usuario, tipo_usuario FROM usuarios WHERE id_usuario = '$s_idUsuario'";
  $qry2=mysqli_query($conexion,$consulta2) or die (mysqli_connect_error());
                    
  while ($row1=mysqli_fetch_row($qry2)) 
  {
  	 if ($row1[0] == "61" || $row1[0] == "62" || $row1[0] == "63" || $row1[0] == "64") 
  	 { 
		echo "<th>Reiniciar</th>";
	 } 

	 else
	 {
	 		
	 }
  }                  
?>                                                
                                                  </tr>
                                              </thead>
                                              <tfoot class="titulot" style="font-size: 15px; background-color: #530a6b; color: white;">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Nombre</th>
                                                      <th>Tipo Usuario</th>
                                                      <th>Activo</th>
                                                      <th>Editar</th>
                                                      <?php
 include("../global_seguridad/verificar_sesion.php");
 $s_idUsuario = $_SESSION["s_IdUser"];

 $consulta2= "SELECT id_usuario, tipo_usuario FROM usuarios WHERE id_usuario = '$s_idUsuario'";
  $qry2=mysqli_query($conexion,$consulta2) or die (mysqli_connect_error());
  while ($row1=mysqli_fetch_row($qry2)) 
  {
  	 if ($row1[0] == "61" || $row1[0] == "62" || $row1[0] == "63" || $row1[0] == "64")
  	 { 
		echo "<th>Reiniciar</th>";
	 } 

	 else
	 {
	 		
	 }
  }                  
?>                             
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
     $consulta= "SELECT u.id_usuario, u.nom_usuario, u.tipo_usuario, u.activo, u.id_persona, u.duplicado, ut.nombre FROM usuarios AS u
INNER JOIN usuarios_tipo AS ut ON u.tipo_usuario = ut.id_usuario_tipo WHERE id_user = '$s_idUsuario'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
}

if ($s_idUsuario == 65 || $s_idUsuario == 66 || $s_idUsuario == 1)
{
    mysqli_set_charset($conexion, 'utf8');
 $consulta= "SELECT u.id_usuario, u.nom_usuario, u.tipo_usuario, u.activo, u.id_persona, u.duplicado, ut.nombre FROM usuarios AS u
INNER JOIN usuarios_tipo AS ut ON u.tipo_usuario = ut.id_usuario_tipo";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
}
else if ($s_idUsuario >= 67)
{
  mysqli_set_charset($conexion, 'utf8');
 $consulta= "SELECT u.id_usuario, u.nom_usuario, u.tipo_usuario, u.activo, u.id_persona, u.duplicado, ut.nombre FROM usuarios AS u
INNER JOIN usuarios_tipo AS ut ON u.tipo_usuario = ut.id_usuario_tipo WHERE id_sucursal = '$s_IdSucursal'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
}
 
                  $n=1;
                  while ($row=mysqli_fetch_row($qry))
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
                                                        <?php echo $row[6] ?>
                                                      </td>

                                                      <td class="centrar">
                                                        <a onclick="statusUsuario(<?php echo $row[0]; ?>,<?php echo $row[3]; ?>);">
                                                          <?php echo $chStatus; ?>
                                                        </a>
                                                      </td>
                                                     <?php
                                                    if ($row[3]==0) { 

echo "<td><a onclick='javascript:NoEditar();'><i class='fa fa-edit fa-2x color-icono'></i></a></td>";
}   ?>

<?php
if ($row[3]==1){ 
echo "<td><a onclick=\"javascript:ConfirmarContraUsuario('$row[0]','$row[1]','$row[2]','$row[5]');\" ><i class='fa fa-edit fa-2x '></i></a></td>";
 }?>   

 
 <?php
  include '../configuracion/conexion.php';
 include("../global_seguridad/verificar_sesion.php");
 $s_idUsuario = $_SESSION["s_IdUser"];

 $consulta2= "SELECT id_usuario, tipo_usuario FROM usuarios WHERE id_usuario = '$s_idUsuario'";
  $qry2=mysqli_query($conexion,$consulta2) or die (mysqli_connect_error());
  while ($row1=mysqli_fetch_row($qry2)) 
  {
  	 if ($row1[0] == "61" || $row1[0] == "62" || $row1[0] == "63" || $row1[0] == "64") 
  	 { 
  	 	if ($row[3]==1) 
  	 	{
  	 		echo "<td><a onclick=\"javascript:ResetPassword('$row[0]');\" ><i class='fa fa-refresh fa-2x '></i></a></td>";
  	 	}

  	 	else
  	 	{
  	 	  echo "<td><a onclick='javascript:NoEditar();'><i class='fa fa-refresh fa-2x '></i></a></td>";
  	 	}
		
	 } 

	 else
	 {
	 		
	 }
  }                  
?>
  <?php 
                                                                        $n++;
                                                                          }
                                                         ?>


                                                  </tr>
                                                        
                                              </tbody>
</table>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
 crossorigin="anonymous"></script> -->
<script src="../js/modal.js"></script>
<script src="../js/status.js"></script>
