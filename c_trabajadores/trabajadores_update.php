<?
//se manda llamar la conexion
include'../configuracion/conexion.php';

//verifico inicio de sesion
// include'../global_seguridad/verificar_sesion.php';
// $Idusuario=$_SESSION["s_IdUser"];

//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$pIdTrabajador=$_POST["id_trabajador"]; 
$pDepartamento=$_POST["edepartamento"]; 
$pPuesto=$_POST["epuesto"]; 
$pFehcaIng=$_POST["efechaing"]; 
$pNumEmpleado=$_POST["enumempleado"]; 
$pSucursal=$_POST["esucursal"]; 
$pArea=$_POST["earea"]; 
$IdSucursalArea = "98". $pArea;

$qry1 = "SELECT id_trabajador, num_empleado FROM trabajadores WHERE num_empleado = '$pNumEmpleado'"; //1 otro  2 gokulove
$consulta1 = mysqli_query($conexion,$qry1) or die  (mysqli_connect_errno());				   
//Descargamos el arreglo que arroja la consulta
$row1 = mysqli_fetch_array($consulta1);
//Se cuenta el numero de filas
$num1 = mysqli_num_rows($consulta1);
//con el if cambiamos el status

mysqli_set_charset($conexion, 'utf8');
if ($num1==1) 
{
 if ($pIdTrabajador == $row1[0]) 
	{
		if ($pPuesto == 82) 
		{
			$consulta= "UPDATE trabajadores
						SET num_empleado = '$pNumEmpleado',
						id_departamento = '$pDepartamento',
						id_puesto = '$pPuesto',
						fecha_ingreso = '$pFehcaIng',
						id_departamento = '$pDepartamento',
						id_sucursal = '$IdSucursalArea',
						area = '$pArea'
						WHERE
						 id_trabajador = '$pIdTrabajador'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
        echo "1";
		}
		if ($pPuesto == 83 || $pPuesto == 87) 
		{
			$consulta= "UPDATE trabajadores
						SET num_empleado = '$pNumEmpleado',
						id_departamento = '$pDepartamento',
						id_puesto = '$pPuesto',
						fecha_ingreso = '$pFehcaIng',
						id_departamento = '$pDepartamento',
						id_sucursal = '0',
						area = '0'
						WHERE
						 id_trabajador = '$pIdTrabajador'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
        echo "1";
		}
		if ($pPuesto == 86) 
		{
			$consulta= "UPDATE trabajadores
						SET num_empleado = '$pNumEmpleado',
						id_departamento = '$pDepartamento',
						id_puesto = '$pPuesto',
						fecha_ingreso = '$pFehcaIng',
						id_departamento = '$pDepartamento',
						id_sucursal = '99',
						area = '0'
						WHERE
						 id_trabajador = '$pIdTrabajador'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
        echo "1";
		}

		if ($pPuesto == 84) 
		{
			$consulta= "UPDATE trabajadores
						SET num_empleado = '0',
						id_departamento = '$pDepartamento',
						id_puesto = '$pPuesto',
						fecha_ingreso = '$pFehcaIng',
						id_departamento = '$pDepartamento',
						id_sucursal = '$pSucursal',
						area = '0'
						WHERE
						 id_trabajador = '$pIdTrabajador'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
        echo "1";
		}

		if ($pPuesto == 81 || $pPuesto == 85 || $pPuesto >= 88) 
		{
			$consulta= "UPDATE trabajadores
						SET num_empleado = '$pNumEmpleado',
						id_departamento = '$pDepartamento',
						id_puesto = '$pPuesto',
						fecha_ingreso = '$pFehcaIng',
						id_departamento = '$pDepartamento',
						id_sucursal = '$pSucursal',
						area = '0'
						WHERE
						 id_trabajador = '$pIdTrabajador'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
        echo "1";
		}
	}
  if ($pIdTrabajador != $row1[0] & $pNumEmpleado == $row1[1]) 
  {
  	echo "2";	
  }
}	

else
{
	if ($pPuesto == 82) 
		{
			$consulta= "UPDATE trabajadores
						SET num_empleado = '$pNumEmpleado',
						id_departamento = '$pDepartamento',
						id_puesto = '$pPuesto',
						fecha_ingreso = '$pFehcaIng',
						id_departamento = '$pDepartamento',
						id_sucursal = '$IdSucursalArea',
						area = '$pArea'
						WHERE
						 id_trabajador = '$pIdTrabajador'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
        echo "3";
		}
		if ($pPuesto == 83 || $pPuesto == 87) 
		{
			$consulta= "UPDATE trabajadores
						SET num_empleado = '$pNumEmpleado',
						id_departamento = '$pDepartamento',
						id_puesto = '$pPuesto',
						fecha_ingreso = '$pFehcaIng',
						id_departamento = '$pDepartamento',
						id_sucursal = '0',
						area = '0'
						WHERE
						 id_trabajador = '$pIdTrabajador'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
        echo "3";
		}
		if ($pPuesto == 86) 
		{
			$consulta= "UPDATE trabajadores
						SET num_empleado = '$pNumEmpleado',
						id_departamento = '$pDepartamento',
						id_puesto = '$pPuesto',
						fecha_ingreso = '$pFehcaIng',
						id_departamento = '$pDepartamento',
						id_sucursal = '99',
						area = '0'
						WHERE
						 id_trabajador = '$pIdTrabajador'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
        echo "3";
		}

		if ($pPuesto == 84) 
		{
			$consulta= "UPDATE trabajadores
						SET num_empleado = '0',
						id_departamento = '$pDepartamento',
						id_puesto = '$pPuesto',
						fecha_ingreso = '$pFehcaIng',
						id_departamento = '$pDepartamento',
						id_sucursal = '$pSucursal',
						area = '0'
						WHERE
						 id_trabajador = '$pIdTrabajador'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
        echo "3";
		}

		if ($pPuesto == 81 || $pPuesto == 85 || $pPuesto >= 88) 
		{
			$consulta= "UPDATE trabajadores
						SET num_empleado = '$pNumEmpleado',
						id_departamento = '$pDepartamento',
						id_puesto = '$pPuesto',
						fecha_ingreso = '$pFehcaIng',
						id_departamento = '$pDepartamento',
						id_sucursal = '$pSucursal',
						area = '0'
						WHERE
						 id_trabajador = '$pIdTrabajador'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
        echo "3";
		}
}

	
// 							SET activo = '$activo',
// 							 fecha_registro = '$fecha',
// 							 hora_registro= '$hora'
// 							WHERE
// 							 id_puesto = $gId",$conexion) or die (mysql_error());

?>
