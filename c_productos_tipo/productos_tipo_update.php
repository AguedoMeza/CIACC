<?
//se manda llamar la conexion
include'../configuracion/conexion.php';

//verifico inicio de sesion
// include'../global_seguridad/verificar_sesion.php';
// $Idusuario=$_SESSION["s_IdUser"];

//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$pId=$_POST["id_tipo_producto"]; 
$pNombre=$_POST["enombre"]; 
$pDescripcion=$_POST["edescripcion"]; 
$qry1 = "SELECT id_tipo_producto, nombre_tipo_producto FROM productos_tipo WHERE nombre_tipo_producto = '$pNombre'"; //1 otro  2 gokulove
$consulta1 = mysqli_query($conexion,$qry1) or die  (mysqli_connect_errno());				   
//Descargamos el arreglo que arroja la consulta
$row1 = mysqli_fetch_array($consulta1);
//Se cuenta el numero de filas
$num1 = mysqli_num_rows($consulta1);
//con el if cambiamos el status
mysqli_set_charset($conexion, 'utf8');
if ($num1==1) 
{
 if ($pId == $row1[0]) 
	{
		$consulta= "UPDATE productos_tipo
						SET nombre_tipo_producto = '$pNombre', descripcion = '$pDescripcion'
						WHERE
						 id_tipo_producto = $pId";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
        echo "1";
	}
  if ($row1[0] != $pId & $row1[1] == $pNombre) 
  {
  	echo "2";	
  }
}	

else
{
	$consulta= "UPDATE productos_tipo
						SET nombre_tipo_producto = '$pNombre', descripcion = '$pDescripcion'
						WHERE
						 id_tipo_producto = $pId";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
	echo "3";
}
?>
