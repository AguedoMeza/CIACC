<?
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
// se crean variables POST y las que van entre corchetes son los nombres de las variables del Ingresasr.js
$pProducto=$_POST["producto"];  
$pCantidad=$_POST["cantidad"];
date_default_timezone_set('America/Monterrey');
	$fecha = date('Y-m-d');
	$hora = date('H:i:s');

$qry0 = "SELECT id_producto, cantidad_almacen, cantidad_total FROM inventario_almacen WHERE id_producto = '$pProducto' AND id_sucursal = '$s_IdSucursal'";
$consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());                   
//Descargamos el arreglo que arroja la consulta
$row = mysqli_fetch_array($consulta0);
//Se cuenta el numero de filas
$num = mysqli_num_rows($consulta0);
$cantidad_almacen = $row[1];
$cantidad_total = $row[2];

$cantidad_almacen_nueva = $cantidad_almacen + $pCantidad;
$cantidad_total_nueva = $cantidad_total + $pCantidad;

if ($num>=1) 
 {

        if ($pCantidad <= 0)
        {
           echo "2";
        }
        else
        {
             $consulta= "UPDATE inventario_almacen 
            SET cantidad_almacen = '$cantidad_almacen_nueva', cantidad_total = '$cantidad_total_nueva'
            WHERE id_producto = '$pProducto' AND id_sucursal = '$s_IdSucursal'";
                             $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                             echo "1";
        }
           
}

if ($num==0)
{
    if ($pCantidad <= 0)
    {
        echo "2";
    }
    else
    {
                 $consulta= "INSERT INTO inventario_almacen (
            id_producto,
            cantidad_almacen,
            cantidad_total,
            fecha_registro,
            hora_registro,
            activo,
            id_usuario,
            id_sucursal
        )
        VALUES
            (
                                        
                                        '$pProducto', 
                                        '$pCantidad',
                                        '$pCantidad',
                                        '$fecha',
                                        '$hora',
                                        '1',
                                        '$s_idUsuario',
                                        '$s_IdSucursal'
            )";
                             $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                             echo "1";
    }   
}
?>
