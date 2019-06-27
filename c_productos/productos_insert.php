<?
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
// se crean variables POST y las que van entre corchetes son los nombres de las variables del Ingresasr.js
$pNombre=$_POST["nombre"];  
$pDescripcion=$_POST["descripcion"];
$pTipoProducto=$_POST["tipoproducto"];
$pConsumible=$_POST["consumible"];
$pUnidad=$_POST["unidad"];
$pMinimo=$_POST["minimo"];

date_default_timezone_set('America/Monterrey');
	$fecha = date('Y-m-d');
	$hora = date('H:i:s');

   $qry0 = "SELECT nombre FROM productos WHERE nombre = '$pNombre' AND descripcion_producto = '$pDescripcion' AND id_sucursal = '$s_IdSucursal'";
    $consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());                   
    //Descargamos el arreglo que arroja la consulta
    $row = mysqli_fetch_array($consulta0);
    //Se cuenta el numero de filas
    $num = mysqli_num_rows($consulta0);

            if ($num>=1) 
            {
                echo "1";
            }

            else
            {
                 mysqli_set_charset($conexion, 'utf8');
                             $consulta= "INSERT INTO productos (
                            nombre,
                            descripcion_producto,
                            id_tipo_producto,
                            consumible,
                            id_unidad,
                            id_sucursal,
                            fecha_registro,
                            hora_registro,
                            activo,
                            id_usuario,
                            stock_minimo
                        )
                        VALUES
                            (
                                                        
                                    '$pNombre', 
                                    '$pDescripcion',
                                    '$pTipoProducto',
                                    '$pConsumible',
                                    '$pUnidad',
                                    '$s_IdSucursal',
                                    '$fecha',
                                    '$hora',
                                    '1',
                                    '$s_idUsuario',
                                    '$pMinimo'
                                  )";
                         $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                         echo "2";
            }

// else
// {
//     $qry0 = "SELECT nombre, inventario_fijo, folio FROM productos WHERE id_sucursal = '$s_IdSucursal' AND folio = '$pFolio'";
//     $consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());                   
//     //Descargamos el arreglo que arroja la consulta
//     $row = mysqli_fetch_array($consulta0);
//     //Se cuenta el numero de filas
//     $num = mysqli_num_rows($consulta0);

//             if ($num>=1) 
//             {
//                 echo "2";
//             }

//             else
//             {
                 
//                              $consulta= "INSERT INTO productos (
//                             nombre,
//                             descripcion_producto,
//                             id_tipo_producto,
//                             folio,
//                             fecha_registro,
//                             hora_registro,
//                             activo,
//                             id_usuario,
//                             consumible,
//                             inventario_fijo,
//                             id_sucursal,
//                             id_unidad
//                         )
//                         VALUES
//                             (
                                                        
//                                     '$pNombre', 
//                                     '$pDescripcion',
//                                     '$pTipoProducto',
//                                     '$pFolio',
//                                     '$fecha',
//                                     '$hora',
//                                     '1',
//                                     '$s_idUsuario',
//                                     '0',
//                                     '1',
//                                     '$s_IdSucursal',
//                                     '0'
//                                   )";
//                          $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
//                          echo "3";

//             }
// }

?>
