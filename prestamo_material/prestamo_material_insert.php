<?php  include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

$Pid_producto=$_POST["id_producto"]; 
$PCantidad=$_POST["cantidad"];

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
	$consulta03= "SELECT consumible FROM productos WHERE id_producto = '$Pid_producto' AND id_sucursal = '$s_IdSucursal'";
                     $qry03=mysqli_query($conexion,$consulta03) or die (mysqli_connect_error());
                     $row03 = mysqli_fetch_array($qry03);
                     $consumible= $row03[0];
                    
    $consulta01= "SELECT cantidad_almacen, cantidad_total FROM inventario_almacen WHERE id_producto = '$Pid_producto' AND id_sucursal = '$s_IdSucursal'";
                     $qry01=mysqli_query($conexion,$consulta01) or die (mysqli_connect_error());
                     $row01 = mysqli_fetch_array($qry01);
                     $CantidadAlmacenActual= $row01[0];
                     $CantidadTotalActual= $row01[1];

     if ($PCantidad <= $CantidadAlmacenActual) 
     {
         $consulta0= "SELECT id_sucursal, contador FROM sucursales WHERE id_sucursal = '$s_IdSucursal'";
                         $qry0=mysqli_query($conexion,$consulta0) or die (mysqli_connect_error());
                         $row0 = mysqli_fetch_array($qry0);
                         $IDSucursal= $row0[0];
                         $contador= $row0[1];
                         $Folio= $IDSucursal . $contador . $s_idUsuario;

      $consulta1= "SELECT id_detalle_prestamo, cantidad FROM prestamo_material_detalle WHERE id_sucursal = '$s_IdSucursal' AND id_producto = '$Pid_producto' AND folio_prestamo = '$Folio'";
                         $qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
                         $row1 = mysqli_fetch_array($qry1);
                         $num = mysqli_num_rows($qry1);
                         $Id_Detalle= $row1[0];
                         $CantidadActual= $row1[1];
        if ($num >= 1) 
        {
          $NuevaCantidad = $CantidadActual + $PCantidad;
          $NuevaCantidadAlmacen = $CantidadAlmacenActual - $PCantidad;
          $NuevaCantidadTotal= $CantidadTotalActual - $PCantidad;

          if ($consumible == 1) 
          {
         	 $consultaup= "UPDATE prestamo_material_detalle
                SET cantidad = '$NuevaCantidad'
                WHERE
                 id_detalle_prestamo = '$Id_Detalle'";
          $qryup=mysqli_query($conexion,$consultaup) or die (mysqli_connect_error());

          $consultaup0= "UPDATE inventario_almacen
                SET cantidad_almacen = '$NuevaCantidadAlmacen', cantidad_total = '$NuevaCantidadTotal'
                WHERE
                 id_producto = '$Pid_producto' AND id_sucursal='$s_IdSucursal'";
          $qryup0=mysqli_query($conexion,$consultaup0) or die (mysqli_connect_error());
          echo "2";
          }
          else
          {
          	$consultaup= "UPDATE prestamo_material_detalle
                SET cantidad = '$NuevaCantidad'
                WHERE
                 id_detalle_prestamo = '$Id_Detalle'";
          $qryup=mysqli_query($conexion,$consultaup) or die (mysqli_connect_error());

          $consultaup0= "UPDATE inventario_almacen
                SET cantidad_almacen = '$NuevaCantidadAlmacen'
                WHERE
                 id_producto = '$Pid_producto' AND id_sucursal='$s_IdSucursal'";
          $qryup0=mysqli_query($conexion,$consultaup0) or die (mysqli_connect_error());
          echo "2";
          }

         
          
        }

        else
        {

                         $consulta2= "INSERT INTO prestamo_material_detalle (
                                                    id_producto,
                                                    cantidad,
                                                    folio_prestamo,
                                                    id_usuario,
                                                    id_sucursal
                                                )
                                                VALUES
                                                    (
                                                        '$Pid_producto',
                                                        '$PCantidad',
                                                        '$Folio',
                                                        '$s_idUsuario',
                                                        '$s_IdSucursal'
                                                    )";
                         $qry2=mysqli_query($conexion,$consulta2) or die (mysqli_connect_error());

                if ($consumible == 1) 
                {
                	$NuevaCantidadAlmacen = $CantidadAlmacenActual - $PCantidad;
                	$NuevaCantidadTotal= $CantidadTotalActual - $PCantidad;

                	$consultaup01= "UPDATE inventario_almacen
                                SET cantidad_almacen = '$NuevaCantidadAlmacen', cantidad_total = '$NuevaCantidadTotal'
                                WHERE
                                 id_producto = '$Pid_producto' AND id_sucursal='$s_IdSucursal'";
                 $qryup01=mysqli_query($conexion,$consultaup01) or die (mysqli_connect_error());
                         echo "2";
                }
                else
                {
                	$NuevaCantidadAlmacen = $CantidadAlmacenActual - $PCantidad;

                	$consultaup01= "UPDATE inventario_almacen
                                SET cantidad_almacen = '$NuevaCantidadAlmacen'
                                WHERE
                                 id_producto = '$Pid_producto' AND id_sucursal='$s_IdSucursal'";
                 $qryup01=mysqli_query($conexion,$consultaup01) or die (mysqli_connect_error());
                         echo "2";
                }
                         
                
        }     
     }

     else
     {
        echo "3";
     }
         
}

else
{
    echo "3";
}

?>