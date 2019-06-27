<?php  include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

$Pesfijo=$_POST["esfijo"]; 
$Pidproducto=$_POST["idproducto"];
$PCantidad=$_POST["cantidad"];
$Pmotivo=$_POST["motivo"]; 

date_default_timezone_set('America/Monterrey');
  $fecha = date('Y-m-d');
  $hora = date('H:i:s');
mysqli_set_charset($conexion, 'utf8');



if ($PCantidad <= 0) 
{
  echo "1";
}

else if ($PCantidad > 0)
{	
     if ($Pesfijo == 1) 
     {
                        $consulta0= "SELECT id_sucursal, contador_orden FROM sucursales WHERE id_sucursal = '$s_IdSucursal'";
                         $qry0=mysqli_query($conexion,$consulta0) or die (mysqli_connect_error());
                         $row0 = mysqli_fetch_array($qry0);
                         $IDSucursal= $row0[0];
                         $contador= $row0[1];
                         $Folio= $IDSucursal . $contador . $s_idUsuario;

                         $consulta03= "SELECT nombre_producto FROM inventario_fijo WHERE id_inventario_fijo = '$Pidproducto' AND id_sucursal='$s_IdSucursal'";
                         $qry03=mysqli_query($conexion,$consulta03) or die (mysqli_connect_error());
                         $row03 = mysqli_fetch_array($qry03);
                         $NomProducto= $row03[0];

                         $consulta2= "INSERT INTO orden_salida_detalle (
                                                    id_producto,
                                                    nombre_producto,
                                                    cantidad,
                                                    folio_orden_salida,
                                                    productofijo,
                                                    motivo_salida,
                                                    id_usuario,
                                                    id_sucursal
                                                )
                                                VALUES
                                                    (
                                                        '$Pidproducto',
                                                        '$NomProducto',
                                                        '$PCantidad',
                                                        '$Folio',
                                                        '1',
                                                        '$Pmotivo',
                                                        '$s_idUsuario',
                                                        '$s_IdSucursal'
                                                    )";
                         $qry2=mysqli_query($conexion,$consulta2) or die (mysqli_connect_error()); 

              $consultaup021= "UPDATE inventario_fijo
                                   SET salida = '1'
                                   WHERE
                                   id_inventario_fijo = '$Pidproducto' AND id_sucursal='$s_IdSucursal'";
                                   $qryup021=mysqli_query($conexion,$consultaup021) or die (mysqli_connect_error());
     } 
     else
     {

                         $consulta01= "SELECT cantidad_almacen, cantidad_total FROM inventario_almacen WHERE id_producto = '$Pidproducto' AND id_sucursal = '$s_IdSucursal'";
                         $qry01=mysqli_query($conexion,$consulta01) or die (mysqli_connect_error());
                         $row01 = mysqli_fetch_array($qry01);
                         $CantidadAlmacenActual= $row01[0];
                         $CantidadTotalActual= $row01[1];

                         $NuevaCantidadAlmacen = $CantidadAlmacenActual - $PCantidad;
                         $NuevaCantidadTotal= $CantidadTotalActual - $PCantidad;
                         if ($CantidadAlmacenActual < $PCantidad) 
                         {
                          echo "1";
                         }
                         else
                         {

                              $consulta0= "SELECT id_sucursal, contador_orden FROM sucursales WHERE id_sucursal = '$s_IdSucursal'";
                                 $qry0=mysqli_query($conexion,$consulta0) or die (mysqli_connect_error());
                                 $row0 = mysqli_fetch_array($qry0);
                                 $IDSucursal= $row0[0];
                                 $contador= $row0[1];
                                 $Folio= $IDSucursal . $contador . $s_idUsuario;

                               $consultaup0= "UPDATE inventario_almacen
                             SET cantidad_almacen = '$NuevaCantidadAlmacen', cantidad_total = '$NuevaCantidadTotal'
                             WHERE
                             id_producto = '$Pidproducto' AND id_sucursal='$s_IdSucursal'";
                             $qryup0=mysqli_query($conexion,$consultaup0) or die (mysqli_connect_error());

                              $consulta1= "SELECT id_orden_salida_detalle, cantidad FROM orden_salida_detalle WHERE id_sucursal = '$s_IdSucursal' AND id_producto = '$Pidproducto' AND folio_orden_salida= '$Folio'";
                             $qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
                             $row1 = mysqli_fetch_array($qry1);
                             $num = mysqli_num_rows($qry1);
                             $Id_Detalle= $row1[0];
                             $CantidadActual= $row1[1];
                             $CantidadActualizada = $CantidadActual + $PCantidad;

                             if ($num >= 1) 
                             {
                                   $consultaup02= "UPDATE orden_salida_detalle
                                   SET cantidad = '$CantidadActualizada'
                                   WHERE
                                   id_producto = '$Pidproducto' AND id_sucursal='$s_IdSucursal'";
                                   $qryup02=mysqli_query($conexion,$consultaup02) or die (mysqli_connect_error());
                             }
                             else
                             {
                                   $consulta0= "SELECT id_sucursal, contador_orden FROM sucursales WHERE id_sucursal = '$s_IdSucursal'";
                                 $qry0=mysqli_query($conexion,$consulta0) or die (mysqli_connect_error());
                                 $row0 = mysqli_fetch_array($qry0);
                                 $IDSucursal= $row0[0];
                                 $contador= $row0[1];
                                 $Folio= $IDSucursal . $contador . $s_idUsuario;

                                 $consulta03= "SELECT nombre FROM productos WHERE id_producto = '$Pidproducto' AND id_sucursal='$s_IdSucursal'";
                                 $qry03=mysqli_query($conexion,$consulta03) or die (mysqli_connect_error());
                                 $row03 = mysqli_fetch_array($qry03);
                                 $NomProducto= $row03[0];

                                 $consulta2= "INSERT INTO orden_salida_detalle (
                                                            id_producto,
                                                            nombre_producto,
                                                            cantidad,
                                                            folio_orden_salida,
                                                            productofijo,
                                                            motivo_salida,
                                                            id_usuario,
                                                            id_sucursal
                                                        )
                                                        VALUES
                                                            (
                                                                '$Pidproducto',
                                                                '$NomProducto',
                                                                '$PCantidad',
                                                                '$Folio',
                                                                '0',
                                                                '$Pmotivo',
                                                                '$s_idUsuario',
                                                                '$s_IdSucursal'
                                                            )";
                                 $qry2=mysqli_query($conexion,$consulta2) or die (mysqli_connect_error());  
                             }
                      
                         }              
     }
}

else
{
    echo "3";
}

?>