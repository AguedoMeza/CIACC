<?php
include("configuracion/conexion.php");
  $consulta= "SELECT id_sucursal, nombre
FROM sucursales WHERE activo = 1";
  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
  while ($row=mysqli_fetch_row($qry))
                   {
                        echo "<option value=\"$row[0]\">$row[1]</option>";

                   }
?>
