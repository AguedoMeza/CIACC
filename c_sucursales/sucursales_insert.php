<?
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];

// se crean variables POST y las que van entre corchetes son los nombres de las variables del Ingresasr.js
$pSucursal=$_POST["sucursal"];  
$pDireccion=$_POST["direccion"];
$pDescripcion=$_POST["descripcion"];
$pCorreo=$_POST["correo"];
$pTelefono=$_POST["telefono"];
$pArea=$_POST["area"];
date_default_timezone_set('America/Monterrey');
	$fecha = date('Y-m-d');
	$hora = date('H:i:s');

$qry0 = "SELECT nombre FROM sucursales WHERE nombre = '$pSucursal'";
$consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());                   
//Descargamos el arreglo que arroja la consulta
$row = mysqli_fetch_array($consulta0);
//Se cuenta el numero de filas
$num = mysqli_num_rows($consulta0);
// mysql_query("SET NAMES utf8");   
if ($num==1) 
{
    echo "1";
}

else
{
	mysqli_set_charset($conexion, 'utf8');
     $consulta= "INSERT INTO sucursales (
                            nombre,
                            descripcion,
                            direccion,
                            fecha_registro,
                            hora_registro,
                            activo,
                            id_usuario,
                            correo,
                            telefono,
                            contador,
                            contador_solicitud,
                            area
                        )
                        VALUES
                            (
                                '$pSucursal',
                                '$pDescripcion',
                                '$pDireccion',
                                '$fecha',
                                '$hora',
                                '1',
                                '$s_idUsuario',
                                '$pCorreo',
                                '$pTelefono',
                                0,
                                0,
                                '$pArea'
                            )";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
}
?>