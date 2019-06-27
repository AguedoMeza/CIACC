<?php  include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

$PId_Detalle=$_POST["id_solicitud_material_detalle"]; 

// $consulta1= "SELECT id_producto, cantidad FROM prestamo_material_detalle WHERE id_detalle_prestamo = '$PId_Detalle'";
//                          $qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
//                          $row1 = mysqli_fetch_array($qry1);
//                          $num = mysqli_num_rows($qry1);
//                          $Producto= $row1[0];
//                          $CantidadActual= $row1[1];

//  $consulta01= "SELECT cantidad_almacen FROM inventario_almacen WHERE id_producto = '$Producto' AND id_sucursal = '$s_IdSucursal'";
//                      $qry01=mysqli_query($conexion,$consulta01) or die (mysqli_connect_error());
//                      $row01 = mysqli_fetch_array($qry01);
//                      $CantidadAlmacenActual= $row01[0];

//                      $NuevaCantidadAlmacen = $CantidadAlmacenActual + $CantidadActual;

// $consultaup0= "UPDATE inventario_almacen
//                 SET cantidad_almacen = '$NuevaCantidadAlmacen'
//                 WHERE
//                  id_producto = '$Producto' AND id_sucursal='$s_IdSucursal'";
//           $qryup0=mysqli_query($conexion,$consultaup0) or die (mysqli_connect_error());


$consulta10= "DELETE FROM solicitud_material_detalle WHERE id_solicitud_material_detalle  = '$PId_Detalle'";
$qry10=mysqli_query($conexion,$consulta10) or die (mysqli_connect_error());

?>