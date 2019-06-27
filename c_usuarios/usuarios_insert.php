<?
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
// se crean variables POST y las que van entre corchetes son los nombres de las variables del Ingresasr.js
$pIdPersona=$_POST["nombre"];  
$pNombreUsuario=$_POST["nombreusuario"];  
$contradefault="12345";
$contra_final = md5($contradefault); 
$pTipoUsuario=$_POST["tipousuario"];  

date_default_timezone_set('America/Monterrey');
	$fecha = date('Y-m-d');
	$hora = date('H:i:s');

mysqli_set_charset($conexion, 'utf8');


$qry0 = "SELECT nom_usuario FROM usuarios WHERE nom_usuario = '$pNombreUsuario'";
$consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());				   
//Descargamos el arreglo que arroja la consulta
$row = mysqli_fetch_array($consulta0);
//Se cuenta el numero de filas
$num = mysqli_num_rows($consulta0);

if ($num==1) 
{
	echo "1";
}

else
{
	 $consulta1= "UPDATE personas
    SET esusuario = 1 WHERE id_persona = '$pIdPersona'";
$qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());


$consulta= "INSERT INTO usuarios (
                            id_persona,
                            nom_usuario,
                            contra,
                            tipo_usuario,
                            fecha_registro,
                            hora_registro,
                            activo,
                            id_user,
                            caducidad,
                            primer_acceso,
                            duplicado,
                            id_sucursal
                        )
                        VALUES
                            (
                                '$pIdPersona',
                                '$pNombreUsuario',
                                '$contra_final',
                                '$pTipoUsuario',
                                '$fecha',
                                '$hora',
                                '1',
                                '$s_idUsuario',
                                '$fecha',
                                '0',
                                '$contradefault',
                                '$s_IdSucursal'
                            )";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());  
}
?>