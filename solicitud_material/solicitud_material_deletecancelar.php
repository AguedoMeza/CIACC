<?php  
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

$qry0 = "SELECT s.id_sucursal, s.contador_solicitud FROM sucursales AS s WHERE s.id_sucursal = '$s_IdSucursal'";
$consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());       
$row = mysqli_fetch_array($consulta0);
$IdSucursal = $row[0];
$Contador = $row[1];
$Folio= $s_IdSucursal . $s_idUsuario . $Contador;
    // echo $Folio;

	$consultaA= "SELECT id_solicitud_material_detalle FROM solicitud_material_detalle WHERE id_sucursal = '$s_IdSucursal' AND folio_solicitud= '$Folio'";
    $qryA=mysqli_query($conexion,$consultaA) or die (mysqli_connect_error());
    $rowA = mysqli_fetch_array($qryA);
    $IdSolicitudDetalle = $rowA[0];;

 
$consulta1= "DELETE FROM solicitud_material_detalle WHERE folio_solicitud = '$Folio'";
$qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());

?>