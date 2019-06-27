<?
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
// se crean variables POST y las que van entre corchetes son los nombres de las variables del Ingresasr.js
$pProducto=$_POST["producto"];  
$pQr=$_POST["qr"];
$pCi=$_POST["ci"];
$pModelo=$_POST["modelo"];
$pMarca=$_POST["marca"];
$pSerie=$_POST["serie"];
$pCondiciones=$_POST["condiciones"];
date_default_timezone_set('America/Monterrey');
	$fecha = date('Y-m-d');
	$hora = date('H:i:s');

$qry0 = "SELECT  qr, ci FROM inventario_fijo WHERE qr = '$pQr' AND id_sucursal = '$s_IdSucursal'";
$consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());                   
//Descargamos el arreglo que arroja la consulta
$row = mysqli_fetch_array($consulta0);
//Se cuenta el numero de filas
$num = mysqli_num_rows($consulta0);

if ($num>=1) 
 {
       $qry2 = "SELECT qr, ci FROM inventario_fijo WHERE qr = '$pQr' AND ci = '$pCi' AND id_sucursal = '$s_IdSucursal'";
        $consulta2 = mysqli_query($conexion,$qry2) or die  (mysqli_connect_errno());                   
        //Descargamos el arreglo que arroja la consulta
        $row2 = mysqli_fetch_array($consulta2);
        //Se cuenta el numero de filas
        $num2 = mysqli_num_rows($consulta2);

        if ($num2 >= 1) 
        {
          echo "3";
        }

        else
        {
            echo "1";
        }    
 }
 else
 {
    $qry1 = "SELECT qr, ci FROM inventario_fijo WHERE ci = '$pCi' AND id_sucursal = '$s_IdSucursal'";
    $consulta1 = mysqli_query($conexion,$qry1) or die  (mysqli_connect_errno());                   
    //Descargamos el arreglo que arroja la consulta
    $row1 = mysqli_fetch_array($consulta1);
    //Se cuenta el numero de filas
    $num1 = mysqli_num_rows($consulta1);
    mysqli_set_charset($conexion, 'utf8');

    if ($num1 >= 1) 
    {
        $qry2 = "SELECT qr, ci FROM inventario_fijo WHERE qr = '$pQr' AND ci = '$pCi' AND id_sucursal = '$s_IdSucursal'";
        $consulta2 = mysqli_query($conexion,$qry2) or die  (mysqli_connect_errno());                   
        //Descargamos el arreglo que arroja la consulta
        $row2 = mysqli_fetch_array($consulta2);
        //Se cuenta el numero de filas
        $num2 = mysqli_num_rows($consulta2);

        if ($num2 >= 1) 
        {
          echo "3";
        }

        else
        {
            echo "2";
        }

       
    }

     else
    {
                 $consulta= "INSERT INTO inventario_fijo (
                        qr,
                        ci,
                        modelo,
                        marca,
                        serie,
                        condiciones,
                        nombre_producto,
                        fecha_registro,
                        hora_registro,
                        activo,
                        id_usuario,
                        id_sucursal
        )
        VALUES
            (
                                        
                                        '$pQr', 
                                        '$pCi',
                                        '$pModelo',
                                        '$pMarca',
                                        '$pSerie',
                                        '$pCondiciones',
                                        '$pProducto',
                                        '$fecha',
                                        '$hora',
                                        '1',
                                        '$s_idUsuario',
                                        '$s_IdSucursal'
            )";
                             $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                             echo "4";
   }   

 }

?>
