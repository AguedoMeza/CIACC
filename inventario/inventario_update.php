<?
//se manda llamar la conexion
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$Idusuario=$_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$pId=$_POST["id_inventario"]; 
$pProducto=$_POST["eproducto"]; 
$pAgregar=$_POST["eagregar"]; 
 
$qry1 = "SELECT id_inventario, id_producto, cantidad_almacen, cantidad_total FROM inventario_almacen WHERE id_inventario = '$pId' AND id_sucursal = '$s_IdSucursal'"; //1 otro  2 gokulove
$consulta1 = mysqli_query($conexion,$qry1) or die  (mysqli_connect_errno());				   
//Descargamos el arreglo que arroja la consulta
$row1 = mysqli_fetch_array($consulta1);
//Se cuenta el numero de filas
$num1 = mysqli_num_rows($consulta1);

$cantidad_almacen = $row1[2];
$cantidad_total = $row1[3];

$cantidad_almacen_nueva = $cantidad_almacen + $pAgregar;
$cantidad_total_nueva = $cantidad_total + $pAgregar;
if ($pAgregar <= 0) 
{
	echo "2";
}
else
{
	 $qry = "UPDATE inventario_almacen 
  SET cantidad_almacen = '$cantidad_almacen_nueva', cantidad_total = '$cantidad_total_nueva'
WHERE id_inventario = '$pId' AND id_sucursal = '$s_IdSucursal'"; //1 otro  2 gokulove
  $consulta = mysqli_query($conexion,$qry) or die  (mysqli_connect_errno());	
  echo "1";
}
 

?>
