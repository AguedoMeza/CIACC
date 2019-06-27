<?
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
$s_IdTipoUsuario = $_SESSION["s_AIdTipoUsuario"];
// se crean variables POST y las que van entre corchetes son los nombres de las variables del Ingresasr.js
$pNombre=$_POST["nombre"]; 
$pPaterno=$_POST["paterno"]; 
$pMaterno=$_POST["materno"]; 
$pCivil=$_POST["civil"]; 
$pTel=$_POST["tel"]; 
$pCorreo=$_POST["correo"];  
$pCol=$_POST["col"]; 
$pCalle=$_POST["calle"]; 
$pNum=$_POST["num"]; 
$pEstado=$_POST["estado"]; 
$pMunic=$_POST["munic"]; 

date_default_timezone_set('America/Monterrey');
    $fecha = date('Y-m-d');
    $hora = date('H:i:s');
mysqli_set_charset($conexion, 'utf8');
// mysql_query("SET NAMES utf8");   
$consulta= "INSERT INTO personas (
                            nombre,
                            ap_paterno,
                            ap_materno,
                            correo,
                            telefono,
                            colonia,
                            calle,
                            numero,
                            ecivil,
                            municipio,
                            estado,
                            fecha_registro,
                            hora_registro,
                            activo,
                            id_usuario,
                            esusuario,
                            estrabajador,
                            id_sucursal
                        )
                        VALUES
                            (
                                '$pNombre',
                                '$pPaterno',
                                '$pMaterno',
                                '$pCorreo',
                                '$pTel',
                                '$pCol',
                                '$pCalle',
                                '$pNum',
                                '$pCivil',
                                '$pMunic',
                                '$pEstado',
                                '$fecha',
                                '$hora',
                                '1',
                                '$s_idUsuario',
                                '0',
                                '0',
                                '$s_IdSucursal'
                            )";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());

?>