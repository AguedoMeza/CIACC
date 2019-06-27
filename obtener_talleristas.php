<?php
include("configuracion/conexion.php");
include("global_seguridad/verificar_sesion.php");
$s_IdSucursal = $_SESSION["s_IdSucursal"];
mysqli_set_charset($conexion, 'utf8');
  $consulta= "SELECT p.id_persona, CONCAT(p.nombre, ' ', p.ap_paterno, ' ', p.ap_materno)
FROM personas AS p
INNER JOIN trabajadores AS t
ON 
t.id_persona= p.id_persona
WHERE p.activo = 1 AND t.activo=1 AND p.esusuario=0 AND p.estrabajador = 1";
  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
  while ($row=mysqli_fetch_row($qry))
                   {
                        echo "<option value=\"$row[0]\">$row[1]</option>";

                   }
?>