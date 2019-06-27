<?
include'../configuracion/conexion.php';
include'../global_seguridad/verificar_sesion.php';
$s_IdSucursal = $_SESSION["s_IdSucursal"];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");
$PIdPrestamo=$_POST["id_prestamo"]; 
$PStatus=$_POST["status"]; 
$PComentario=$_POST["comentario"]; 
mysqli_set_charset($conexion, 'utf8');
if ($PStatus == "1") 
{
mysqli_set_charset($conexion, 'utf8');
$consulta2="SELECT pd.folio_prestamo, pd.id_producto, pd.cantidad
FROM
prestamo_material_detalle AS pd
INNER JOIN prestamo_material AS p
ON p.folio_prestamo = pd.folio_prestamo
WHERE p.id_prestamo = '$PIdPrestamo'";
$qry2=mysqli_query($conexion,$consulta2) or die (mysqli_connect_error());
$row2=mysqli_fetch_row($qry2); 
$Folio=$row2[0];
$Producto=$row2[1];    
$CantidadPrestada=$row2[2]; 
// echo "1";
do {
	$Folio=$row2[0];
	$Producto=$row2[1];    
	$CantidadPrestada=$row2[2]; 
mysqli_set_charset($conexion, 'utf8');
	$consulta0="SELECT consumible
	FROM
	productos
	WHERE id_producto = '$Producto'";
	$qry0=mysqli_query($conexion,$consulta0) or die (mysqli_connect_error());
	$row0=mysqli_fetch_row($qry0); 
	$consumible=$row0[0];
	// echo "1";
	if ($consumible == 0) 
	{
	mysqli_set_charset($conexion, 'utf8');
		$consulta3="SELECT cantidad_almacen, cantidad_total
		FROM
		inventario_almacen 
		WHERE id_producto = '$Producto'";
		$qry3=mysqli_query($conexion,$consulta3) or die (mysqli_connect_error());
		$row3=mysqli_fetch_row($qry3); 
		$CantAlmacenActual=$row3[0];
		$CantTotalActual=$row3[1];

		$CantidadAlmacenFinal = $CantAlmacenActual + $CantidadPrestada;

		$consulta1= "UPDATE inventario_almacen
					SET cantidad_almacen = '$CantidadAlmacenFinal'
					WHERE
						id_producto = '$Producto'";
	                     $qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
	      
	}

} while ($row2=mysqli_fetch_row($qry2));


}
else
{
	echo "2";
}
mysqli_set_charset($conexion, 'utf8');
		$consulta= "UPDATE prestamo_material
						SET estado = '$PStatus', comentario = '$PComentario'
						WHERE
						 id_prestamo = '$PIdPrestamo' AND id_sucursal = '$s_IdSucursal'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
?>
