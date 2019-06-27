<?php
include("configuracion/conexion.php");
include("global_seguridad/verificar_sesion.php");
$s_IdSucursal = $_SESSION["s_IdSucursal"];
mysqli_set_charset($conexion, 'utf8');
$consulta= "SELECT id_persona, CONCAT(nombre, ' ', ap_paterno, ' ', ap_materno) as PERSONA
FROM personas WHERE activo = 1 AND estrabajador= 0 AND id_sucursal = '$s_IdSucursal'";
  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
  while ($row=mysqli_fetch_row($qry))
                   {
                        echo "<option value=\"$row[0]\">$row[1]</option>";

                   }
?>
