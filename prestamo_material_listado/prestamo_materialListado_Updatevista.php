<?php  include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

$PFolio=$_POST["folio"];
mysqli_set_charset($conexion, 'utf8');

 $consulta01= "SELECT vista FROM prestamo_material WHERE folio_prestamo = '$PFolio' AND id_sucursal = '$s_IdSucursal'";
               $qry01=mysqli_query($conexion,$consulta01) or die (mysqli_connect_error());
                $row01 = mysqli_fetch_array($qry01);
                $Vista= $row01[0];

if ($Vista == $PFolio) 
{
	 $consultaup= "UPDATE prestamo_material
                SET vista = 0
                WHERE
                 folio_prestamo = '$PFolio' AND id_sucursal = '$s_IdSucursal' ";
          $qryup=mysqli_query($conexion,$consultaup) or die (mysqli_connect_error());

          echo "2";
}

else
{
	$consultaup= "UPDATE prestamo_material
                SET vista = '$PFolio'
                WHERE
                 folio_prestamo = '$PFolio' AND id_sucursal = '$s_IdSucursal' ";
          $qryup=mysqli_query($conexion,$consultaup) or die (mysqli_connect_error());

          echo "1";
}

?>