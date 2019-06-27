<?
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
// $s_IdSucursal = $_SESSION["s_IdSucursal"];
$pNombre=$_POST["nombre"];  
$pNoempleado=$_POST["noempleado"]; 
$Pdepartamento=$_POST["departamento"]; 
$Ppuesto=$_POST["puesto"]; 
$Pfechaing=$_POST["fechaing"]; 
$PSucursal=$_POST["sucursal"]; 
$PArea=$_POST["area"]; 

date_default_timezone_set('America/Monterrey');
	$fecha = date('Y-m-d');
	$hora = date('H:i:s');
// mysqli_set_charset($conexion, 'utf8');
// $consulta= "SELECT area
// FROM
// sucursales
// WHERE id_sucursal = '$PSucursal'";
// $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
// $row0 = mysqli_fetch_array($qry);
// $IdArea= $row0[0];
$IdSucursalArea = "98". $PArea;
$qry0 = "SELECT num_empleado FROM trabajadores WHERE num_empleado = '$pNoempleado' AND id_sucursal = '$PSucursal'";
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
mysqli_set_charset($conexion, 'utf8');
$consulta1= "UPDATE personas
    SET estrabajador = 1 WHERE id_persona = '$pNombre'";
$qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
if ($Ppuesto != 82) 
{
                    if ($Ppuesto == "84") 
                    {
                        $consulta= "INSERT INTO trabajadores (
                                            num_empleado,
                                            id_departamento,
                                            id_puesto,
                                            fecha_ingreso,
                                            id_persona,
                                            fecha_registro,
                                            hora_registro,
                                            activo,
                                            id_usuario,
                                            id_sucursal,
                                            area
                                        )
                                        VALUES
                                            (
                                                
                                                '0',
                                                '$Pdepartamento',
                                                '$Ppuesto',
                                                '$Pfechaing',
                                                '$pNombre',
                                                '$fecha',
                                                '$hora',
                                                '1',
                                                '$s_idUsuario',
                                                '$PSucursal',
                                                '0'
                                            )";
                                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                     echo "2";
                    }
                    if ($Ppuesto == "83" || $Ppuesto == "87") 
                    {
                        $consulta= "INSERT INTO trabajadores (
                                            num_empleado,
                                            id_departamento,
                                            id_puesto,
                                            fecha_ingreso,
                                            id_persona,
                                            fecha_registro,
                                            hora_registro,
                                            activo,
                                            id_usuario,
                                            id_sucursal,
                                            area
                                        )
                                        VALUES
                                            (
                                                
                                                '0',
                                                '$Pdepartamento',
                                                '$Ppuesto',
                                                '$Pfechaing',
                                                '$pNombre',
                                                '$fecha',
                                                '$hora',
                                                '1',
                                                '$s_idUsuario',
                                                '0',
                                                '0'
                                            )";
                                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                     echo "2";
                    }
                    if ($Ppuesto == "86") 
                    {
                       $consulta= "INSERT INTO trabajadores (
                                            num_empleado,
                                            id_departamento,
                                            id_puesto,
                                            fecha_ingreso,
                                            id_persona,
                                            fecha_registro,
                                            hora_registro,
                                            activo,
                                            id_usuario,
                                            id_sucursal,
                                            area
                                        )
                                        VALUES
                                            (
                                                
                                                '0',
                                                '$Pdepartamento',
                                                '$Ppuesto',
                                                '$Pfechaing',
                                                '$pNombre',
                                                '$fecha',
                                                '$hora',
                                                '1',
                                                '$s_idUsuario',
                                                '99',
                                                '0'
                                            )";
                                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                     echo "2";
                    }
                    if ($Ppuesto == "81" || $Ppuesto == "85" || $Ppuesto >= "88")
                    {
                            $consulta= "INSERT INTO trabajadores (
                                            num_empleado,
                                            id_departamento,
                                            id_puesto,
                                            fecha_ingreso,
                                            id_persona,
                                            fecha_registro,
                                            hora_registro,
                                            activo,
                                            id_usuario,
                                            id_sucursal,
                                            area
                                        )
                                        VALUES
                                            (
                                                
                                                '$pNoempleado',
                                                '$Pdepartamento',
                                                '$Ppuesto',
                                                '$Pfechaing',
                                                '$pNombre',
                                                '$fecha',
                                                '$hora',
                                                '1',
                                                '$s_idUsuario',
                                                '$PSucursal',
                                                '0'
                                            )";
                                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                     echo "2";
                    }
}
else
{
    $consulta= "INSERT INTO trabajadores (
                            num_empleado,
                            id_departamento,
                            id_puesto,
                            fecha_ingreso,
                            id_persona,
                            fecha_registro,
                            hora_registro,
                            activo,
                            id_usuario,
                            id_sucursal,
                            area
                        )
                        VALUES
                            (
                                
                                '$pNoempleado',
                                '$Pdepartamento',
                                '$Ppuesto',
                                '$Pfechaing',
                                '$pNombre',
                                '$fecha',
                                '$hora',
                                '1',
                                '$s_idUsuario',
                                '$IdSucursalArea',
                                '$PArea'
                            )";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                     echo "2";
}
}
?>