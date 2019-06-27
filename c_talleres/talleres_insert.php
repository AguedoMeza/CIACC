<?
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

// se crean variables POST y las que van entre corchetes son los nombres de las variables del Ingresasr.js
$pNombre=$_POST["nombre"];  
$pTallerista=$_POST["tallerista"];
$pDescripcion=$_POST["descripcion"];
date_default_timezone_set('America/Monterrey');
	$fecha = date('Y-m-d');
	$hora = date('H:i:s');

$qry0 = "SELECT nombre FROM talleres WHERE nombre = '$pNombre' AND id_sucursal = '$s_IdSucursal'";
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
     $consulta= "INSERT INTO talleres (
                            nombre,
                            id_persona,
                            descripcion,
                            fecha_registro,
                            hora_registro,
                            activo,
                            id_usuario,
                            id_sucursal
                        )
                        VALUES
                            (
                                '$pNombre',
                                '$pTallerista',
                                '$pDescripcion',
                                '$fecha',
                                '$hora',
                                '1',
                                '$s_idUsuario',
                                '$s_IdSucursal'
                                
                            )";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
}
?>