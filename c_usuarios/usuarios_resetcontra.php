<?
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
// se crean variables POST y las que van entre corchetes son los nombres de las variables del Ingresasr.js
$pIdUsuario=$_POST["id_usuario"];  
$contradefault="12345";
$contra_final = md5($contradefault); 




// mysql_query("SET NAMES utf8");	
$consulta= "UPDATE usuarios
    SET contra = '$contra_final', duplicado = '$contradefault', primer_acceso = '0' WHERE id_usuario = '$pIdUsuario' ";
$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());

?>