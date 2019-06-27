<?
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

// se crean variables POST y las que van entre corchetes son los nombres de las variables del Ingresasr.js
$pProducto=$_POST["producto"];  
$pDescripcion=$_POST["descripcion"];
$pCantidad=$_POST["cantidad"];
$pUnidad=$_POST["unidad"];
date_default_timezone_set('America/Monterrey');
    $fecha = date('Y-m-d');
    $hora = date('H:i:s');

$qry0 = "SELECT s.id_sucursal, s.contador_solicitud FROM sucursales AS s WHERE s.id_sucursal = '$s_IdSucursal'";
$consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());       
$row = mysqli_fetch_array($consulta0);
$IdSucursal = $row[0];
$Contador = $row[1];
$Folio= $s_IdSucursal . $s_idUsuario . $Contador;
$ContadorUpdate = $Contador + 1;
// // //Se cuenta el numero de filas
// // $num = mysqli_num_rows($consulta0);
// // // mysql_query("SET NAMES utf8");   
// if ($num==1) 
// {
//     echo "1";
// }

// else
// {
    mysqli_set_charset($conexion, 'utf8');
     $consulta= "INSERT INTO solicitud_material_detalle (
                            producto,
                            descripcion,
                            cantidad,
                            unidad,
                            id_sucursal,
                            folio_solicitud,
                            cantidad_autorizada
                        )
                        VALUES
                            (
                                '$pProducto',
                                '$pDescripcion',
                                '$pCantidad',
                                '$pUnidad',
                                '$s_IdSucursal',
                                '$Folio',
                                '0'
                                
                            )";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());

//      $consulta1= "UPDATE sucursales
//                                  SET contador_solicitud = '$ContadorUpdate'
//                                  WHERE
//                                  id_sucursal = $IdSucursal";
//                                  $qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
//                                  echo "1";
// // }
?>