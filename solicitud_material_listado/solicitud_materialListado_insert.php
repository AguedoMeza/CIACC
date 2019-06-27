<?php  include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");

$pIdDetalle=$_POST["id_detalle_solicitud"]; 
$PCantidad=$_POST["cantidad"];

date_default_timezone_set('America/Monterrey');
  $fecha = date('Y-m-d');
  $hora = date('H:i:s');
mysqli_set_charset($conexion, 'utf8');


if ($PCantidad <= 0) 
{
  echo "1";
}

else if ($PCantidad > 0)
{	
   $consultaup= "UPDATE solicitud_material_detalle
                SET cantidad_autorizada = '$PCantidad'
                WHERE
                 id_solicitud_material_detalle = '$pIdDetalle'";
          $qryup=mysqli_query($conexion,$consultaup) or die (mysqli_connect_error());   

    echo "2";      
}
?>