<?
//se manda llamar la conexion
include'../configuracion/conexion.php';
include'../global_seguridad/verificar_sesion.php';
$Idusuario=$_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"]; 

//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$pId=$_POST["id_taller"]; 
$pNombre=$_POST["enombre"]; 
$pTallerista=$_POST["etallerista"]; 
$pDescripcion=$_POST["edescripcion"]; 

$qry1 = "SELECT id_taller, nombre FROM talleres WHERE nombre = '$pNombre' AND id_sucursal = '$s_IdSucursal'"; //1 otro  2 gokulove
$consulta1 = mysqli_query($conexion,$qry1) or die  (mysqli_connect_errno());				   
//Descargamos el arreglo que arroja la consulta
$row1 = mysqli_fetch_array($consulta1);
//Se cuenta el numero de filas
$num1 = mysqli_num_rows($consulta1);
mysqli_set_charset($conexion, 'utf8');

if ($num1==1) 
{
 if ($pId == $row1[0]) 
	{
		$consulta= "UPDATE talleres
						SET nombre = '$pNombre', id_persona ='$pTallerista', descripcion = '$pDescripcion'
						WHERE
						 id_taller = $pId";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
        echo "1";
	}
  if ($pId != $row1[0] & $pNombre == $row1[1]) 
  {
  	echo "2";	
  }
}	

else
{
	$consulta= "UPDATE talleres
						SET nombre = '$pNombre', id_persona ='$pTallerista', descripcion = '$pDescripcion'
						WHERE
						 id_taller = $pId";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
	echo "3";
}
	
// $actualizar = mysql_query("UPDATE puestos
// 							SET activo = '$activo',
// 							 fecha_registro = '$fecha',
// 							 hora_registro= '$hora'
// 							WHERE
// 							 id_puesto = $gId",$conexion) or die (mysql_error());

?>
