<?
//se manda llamar la conexion
include('../configuracion/conexion.php');
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
$pComentario=$_POST["ecomentario"];

 $consultaw= "SELECT id_sucursal, contador_solicitud FROM sucursales WHERE id_sucursal = '$s_IdSucursal'";
    $qryw=mysqli_query($conexion,$consultaw) or die (mysqli_connect_error());
    $row0 = mysqli_fetch_array($qryw);
    $contador = $row0[1];
    $NewContador = $contador - 1;
    $Folio= $s_IdSucursal . $s_idUsuario . $NewContador;
    echo $Folio;
//con el if cambiamos el status
	mysqli_set_charset($conexion, 'utf8');
	$consulta= "UPDATE solicitud_material
						SET comentario = '$pComentario'
						WHERE
						 folio_solicitud = '$Folio'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
// $actualizar = mysql_query("UPDATE puestos
// 							SET activo = '$activo',
// 							 fecha_registro = '$fecha',
// 							 hora_registro= '$hora'
// 							WHERE
// 							 id_puesto = $gId",$conexion) or die (mysql_error());

?>
