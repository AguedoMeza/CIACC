<?php  include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

$PId_Orden_Salida_Detalle=$_POST["id_orden_salida_detalle"]; 
$Pproductofijo=$_POST["productofijo"]; 

if ($Pproductofijo == 1) 
{
     $consulta1= "SELECT id_producto FROM orden_salida_detalle WHERE id_orden_salida_detalle = '$PId_Orden_Salida_Detalle'";
                         $qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
                         $row1 = mysqli_fetch_array($qry1);
                         $num = mysqli_num_rows($qry1);
                         $Producto= $row1[0];

                 $consultaup0= "UPDATE inventario_fijo
                SET salida = '0'
                WHERE
                 id_inventario_fijo = '$Producto' AND id_sucursal='$s_IdSucursal'";
          $qryup0=mysqli_query($conexion,$consultaup0) or die (mysqli_connect_error());

}
else
{
    $consulta1= "SELECT id_producto, cantidad FROM orden_salida_detalle WHERE id_orden_salida_detalle = '$PId_Orden_Salida_Detalle'";
                         $qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
                         $row1 = mysqli_fetch_array($qry1);
                         $num = mysqli_num_rows($qry1);
                         $Producto= $row1[0];
                         $CantidadActual= $row1[1];

     $consulta01= "SELECT cantidad_almacen, cantidad_total FROM inventario_almacen WHERE id_producto = '$Producto' AND id_sucursal = '$s_IdSucursal'";
                     $qry01=mysqli_query($conexion,$consulta01) or die (mysqli_connect_error());
                     $row01 = mysqli_fetch_array($qry01);
                     $CantidadAlmacenActual= $row01[0];
                     $CantidadTtotalActual= $row01[1];

                     $NuevaCantidadAlmacen = $CantidadAlmacenActual + $CantidadActual;
                     $NuevaCantidadTotal = $CantidadTtotalActual + $CantidadActual;

   
        $consultaup0= "UPDATE inventario_almacen
                SET cantidad_almacen = '$NuevaCantidadAlmacen', cantidad_total = '$NuevaCantidadTotal'
                WHERE
                 id_producto = '$Producto' AND id_sucursal='$s_IdSucursal'";
          $qryup0=mysqli_query($conexion,$consultaup0) or die (mysqli_connect_error());

}


$consulta10= "DELETE FROM orden_salida_detalle WHERE id_orden_salida_detalle = '$PId_Orden_Salida_Detalle'";
$qry10=mysqli_query($conexion,$consulta10) or die (mysqli_connect_error());

?>