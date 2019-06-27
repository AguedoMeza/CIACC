<?php  include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
date_default_timezone_set('America/Monterrey');
    $fecha = date('Y-m-d');
    $hora = date('H:i:s');

    $consultaw= "SELECT id_sucursal, contador_solicitud FROM sucursales WHERE id_sucursal = '$s_IdSucursal'";
    $qryw=mysqli_query($conexion,$consultaw) or die (mysqli_connect_error());
    $row0 = mysqli_fetch_array($qryw);
    $contador = $row0[1];
    $Folio= $s_IdSucursal . $s_idUsuario . $contador;

    $consultaf= "SELECT id_solicitud_material_detalle FROM solicitud_material_detalle WHERE folio_solicitud = '$Folio'";
    $qryf=mysqli_query($conexion,$consultaf) or die (mysqli_connect_error());
    $rowf = mysqli_fetch_array($qryf);
    $num = mysqli_num_rows($qryf);
mysqli_set_charset($conexion, 'utf8');


if ($num >= 1) 
{
$consulta= "INSERT INTO solicitud_material (
                           fecha_registro,
                           hora_registro,
                           estatus,
                           id_usuario,
                           id_sucursal,
                           folio_solicitud,
                           vista,
                           id_sucursal_donante

                        )
                        VALUES
                            (
                                '$fecha',
                                '$hora',
                                '0',
                                '$s_idUsuario',
                                '$s_IdSucursal',
                                '$Folio',
                                '0',
                                '0'
                            )";
$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());

 $consulta1= "SELECT contador_solicitud FROM sucursales WHERE id_sucursal = '$s_IdSucursal'";
$qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
$row1 = mysqli_fetch_array($qry1);
$contador= $row1[0];
$ContadorNuevo= $contador + 1;

$consulta3= "UPDATE sucursales SET contador_solicitud = '$ContadorNuevo' WHERE id_sucursal = '$s_IdSucursal'";
$qry3=mysqli_query($conexion,$consulta3) or die (mysqli_connect_error());

  echo "1";

}
else 
{
  echo "2";
}


?>