<?php  include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$pMotivo=$_POST["motivo"];
$pSolicitante=$_POST["solicitante"];
$pTaller=$_POST["taller"];
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
date_default_timezone_set('America/Monterrey');
    $fecha = date('Y-m-d');
    $hora = date('H:i:s');

    $consultaw= "SELECT id_sucursal, contador FROM sucursales WHERE id_sucursal = '$s_IdSucursal'";
    $qryw=mysqli_query($conexion,$consultaw) or die (mysqli_connect_error());
    $row0 = mysqli_fetch_array($qryw);
    $contador = $row0[1];
    $Folio = $s_IdSucursal . $contador . $s_idUsuario;

    $consultaf= "SELECT id_detalle_prestamo FROM prestamo_material_detalle WHERE folio_prestamo = '$Folio'";
    $qryf=mysqli_query($conexion,$consultaf) or die (mysqli_connect_error());
    $rowf = mysqli_fetch_array($qryf);
    $num = mysqli_num_rows($qryf);
mysqli_set_charset($conexion, 'utf8');


if ($num >= 1) 
{
$consulta= "INSERT INTO prestamo_material (
                           id_trabajador,
                           folio_prestamo,
                           motivo,
                           id_usuario,
                           id_sucursal,
                           id_taller,
                           fecha_registro,
                           hora_registro,
                           estado,
                           vista
                        )
                        VALUES
                            (
                                '$pSolicitante',
                                '$Folio',
                                '$pMotivo',
                                '$s_idUsuario',
                                '$s_IdSucursal',
                                '$pTaller',
                                '$fecha',
                                '$hora',
                                '0',
                                '0'
                            )";
$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());

 $consulta1= "SELECT contador FROM sucursales WHERE id_sucursal = '$s_IdSucursal'";
$qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
$row1 = mysqli_fetch_array($qry1);
$contador= $row1[0];
$ContadorNuevo= $contador + 1;

$consulta3= "UPDATE sucursales SET contador = '$ContadorNuevo' WHERE id_sucursal = '$s_IdSucursal'";
$qry3=mysqli_query($conexion,$consulta3) or die (mysqli_connect_error());

  echo "1";

}
else 
{
  echo "2";
}


?>