<?php  
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

$consultaw= "SELECT id_sucursal, contador_orden FROM sucursales WHERE id_sucursal = '$s_IdSucursal'";
    $qryw=mysqli_query($conexion,$consultaw) or die (mysqli_connect_error());
    $row0 = mysqli_fetch_array($qryw);
    $contador = $row0[1];
    $Folio = $s_IdSucursal . $contador . $s_idUsuario;
    // echo $Folio;

	$consultaA= "SELECT id_producto, cantidad, productofijo FROM orden_salida_detalle WHERE id_sucursal = '$s_IdSucursal' AND folio_orden_salida = '$Folio'";
    $qryA=mysqli_query($conexion,$consultaA) or die (mysqli_connect_error());
    $rowA = mysqli_fetch_array($qryA);
    $IDProducto = $rowA[0];
    $CantidadActual = $rowA[1];
    $ProductoFijo = $rowA[2];

    // $IDProduct = $IDProducto;
    // $CantidadAct = $CantidadActual;
 do {
 	 $IDProducto = $rowA[0];
     $CantidadActual = $rowA[1];
     $ProductoFijo = $rowA[2];
     if ($ProductoFijo == 1) 
     {
         // $consulta1= "SELECT id_producto FROM orden_salida_detalle WHERE id_orden_salida_detalle = '$PId_Orden_Salida_Detalle'";
         //                 $qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
         //                 $row1 = mysqli_fetch_array($qry1);
         //                 $num = mysqli_num_rows($qry1);
         //                 $Producto= $row1[0];

                 $consultaup0= "UPDATE inventario_fijo
                SET salida = '0'
                WHERE
                 id_inventario_fijo = '$IDProducto' AND id_sucursal='$s_IdSucursal'";
          $qryup0=mysqli_query($conexion,$consultaup0) or die (mysqli_connect_error());
     }
     else
     {
    		$consulta01= "SELECT cantidad_almacen, cantidad_total FROM inventario_almacen WHERE id_producto = '$IDProducto' AND id_sucursal = '$s_IdSucursal'";
                     $qry01=mysqli_query($conexion,$consulta01) or die (mysqli_connect_error());
                     $row01 = mysqli_fetch_array($qry01);
                     $CantidadAlmacenActual= $row01[0];
                     $CantidadTotalActual= $row01[1];

                     $NuevaCantidadAlmacen = $CantidadAlmacenActual + $CantidadActual;
                     $NuevaCantidadTotal = $CantidadTotalActual + $CantidadActual;

				$consultaup01= "UPDATE inventario_almacen
                                SET cantidad_almacen = '$NuevaCantidadAlmacen', cantidad_total = '$NuevaCantidadTotal'
                                WHERE
                                 id_producto = '$IDProducto' AND id_sucursal='$s_IdSucursal'";
                 $qryup01=mysqli_query($conexion,$consultaup01) or die (mysqli_connect_error());
     }
         
    } while ($rowA=mysqli_fetch_row($qryA));   // $FolioPrestamo = $Folio;

// while ($row=mysqli_fetch_row($qryA))
// {

// 	$consulta01= "SELECT cantidad_almacen FROM inventario_almacen WHERE id_producto = '$IDProducto' AND id_sucursal = '$s_IdSucursal'";
//                      $qry01=mysqli_query($conexion,$consulta01) or die (mysqli_connect_error());
//                      $row01 = mysqli_fetch_array($qry01);
//                      $CantidadAlmacenActual= $row01[0];

//                      $NuevaCantidadAlmacen = $CantidadAlmacenActual + $CantidadActual;

// 				$consultaup01= "UPDATE inventario_almacen
//                                 SET cantidad_almacen = '$NuevaCantidadAlmacen'
//                                 WHERE
//                                  id_producto = '$IDProducto' AND id_sucursal='$s_IdSucursal'";
//                  $qryup01=mysqli_query($conexion,$consultaup01) or die (mysqli_connect_error());
//            $row++;
// }

 
$consulta1= "DELETE FROM orden_salida_detalle WHERE folio_orden_salida = '$Folio'";
$qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());

?>