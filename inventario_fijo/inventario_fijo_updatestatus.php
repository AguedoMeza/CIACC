<?
//se manda llamar la conexion
include'../configuracion/conexion.php';

//verifico inicio de sesion
// include'../global_seguridad/verificar_sesion.php';
// $Idusuario=$_SESSION["s_IdUser"];

//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$gStatus=$_POST["valor"]; 
$gId=$_POST["id_inventario_fijo"]; 

//con el if cambiamos el status
$activo=($gStatus==1)?0:1;
	// mysql_query("SET NAMES utf8");
	$consulta= "UPDATE inventario_fijo
						SET activo = '$activo'
						WHERE
						 id_inventario_fijo = $gId";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
// $actualizar = mysql_query("UPDATE puestos
// 							SET activo = '$activo',
// 							 fecha_registro = '$fecha',
// 							 hora_registro= '$hora'
// 							WHERE
// 							 id_puesto = $gId",$conexion) or die (mysql_error());

?>
