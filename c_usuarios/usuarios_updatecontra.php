<?
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
// se crean variables POST y las que van entre corchetes son los nombres de las variables del Ingresasr.js
$pNuevaContra=$_POST["nuevacontra"];
$contra_final = md5($pNuevaContra);   
$Idusuario=$_SESSION["s_IdUser"];

date_default_timezone_set('America/Monterrey');
	$fecha = date('Y-m-d');
	$hora = date('H:i:s');

mysqli_set_charset($conexion, 'utf8');
$consulta= "UPDATE usuarios
    SET contra = '$contra_final', duplicado = '$pNuevaContra', primer_acceso = '1' WHERE id_usuario = '$Idusuario' ";
$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());

?>