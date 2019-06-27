<?php  include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

$PFolio=$_POST["folio"];
$PIdSucursal=$_POST["id_sucursal"];

mysqli_set_charset($conexion, 'utf8');
if ($s_idUsuario >= 67) 
{
   $consulta01= "SELECT vista FROM orden_salida WHERE folio_orden_salida = '$PFolio' AND id_sucursal = '$s_IdSucursal'";
                 $qry01=mysqli_query($conexion,$consulta01) or die (mysqli_connect_error());
                  $row01 = mysqli_fetch_array($qry01);
                  $Vista= $row01[0];

  if ($Vista == $PFolio) 
  {
  	 $consultaup= "UPDATE orden_salida
                  SET vista = 0
                  WHERE
                   folio_orden_salida = '$PFolio' AND id_sucursal = '$s_IdSucursal' ";
            $qryup=mysqli_query($conexion,$consultaup) or die (mysqli_connect_error());

            echo "2";
  }

  else
  {
  	$consultaup= "UPDATE orden_salida
                  SET vista = '$PFolio'
                  WHERE
                   folio_orden_salida = '$PFolio' AND id_sucursal = '$s_IdSucursal' ";
            $qryup=mysqli_query($conexion,$consultaup) or die (mysqli_connect_error());

            echo "1";
  }
}
if ($s_idUsuario < 67) 
{
   $consulta01= "SELECT vista FROM orden_salida WHERE folio_orden_salida = '$PFolio' AND id_sucursal = '$PIdSucursal'";
                 $qry01=mysqli_query($conexion,$consulta01) or die (mysqli_connect_error());
                  $row01 = mysqli_fetch_array($qry01);
                  $Vista= $row01[0];

  if ($Vista == $PFolio) 
  {
     $consultaup= "UPDATE orden_salida
                  SET vista = 0
                  WHERE
                   folio_orden_salida = '$PFolio' AND id_sucursal = '$PIdSucursal' ";
            $qryup=mysqli_query($conexion,$consultaup) or die (mysqli_connect_error());

            echo "2";
  }

  else
  {
    $consultaup= "UPDATE orden_salida
                  SET vista = '$PFolio'
                  WHERE
                   folio_orden_salida = '$PFolio' AND id_sucursal = '$PIdSucursal' ";
            $qryup=mysqli_query($conexion,$consultaup) or die (mysqli_connect_error());

            echo "1";
  }
}

?>