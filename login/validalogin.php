<?php
/////////////////////////////////////////////parte de sesiones
include("../configuracion/conexion.php");
/////////////////////////////
$pUser=$_POST["usuario"];
$pContra=$_POST["contrasena"];
mysqli_set_charset($conexion, 'utf8');
$qry = "SELECT
	u.id_usuario,
	u.nom_usuario,
	u.contra,
	u.activo,
	u.primer_acceso,
	p.id_persona,
	u.duplicado,
	CONCAT(
		p.nombre,
		' ',
		p.ap_paterno,
		' ',
		p.ap_materno
	) AS Nombre,
	t.id_puesto,
	t.id_trabajador,
	t.id_sucursal,
	ut.personas,
	ut.usuarios,
	ut.usuarios_tipo,
	ut.trabajadores,
	ut.puestos,
	ut.departamentos,
	ut.talleres,
	ut.sucursales,
	ut.productos,
	ut.productos_tipo,
	ut.prestamo_material,
	ut.listado_prestamos,
	ut.solicitud_material,
	ut.listado_solicitudes,
	ut.orden_salida,
	ut.listado_salidas,
	ut.inventario_almacen,
	ut.inventario_fijo,
	ut.id_usuario_tipo,
	t.area
FROM
	usuarios AS u
INNER JOIN personas AS p ON p.id_persona = u.id_persona
INNER JOIN trabajadores AS t ON t.id_persona = p.id_persona
INNER JOIN usuarios_tipo AS ut ON ut.id_usuario_tipo = u.tipo_usuario
WHERE
	u.nom_usuario = '$pUser'
AND u.duplicado = '$pContra'
AND u.activo = '1'
AND ut.activo = '1'";

$consulta = mysqli_query($conexion,$qry) or die  (mysqli_connect_errno());				   
//Descargamos el arreglo que arroja la consulta
$row = mysqli_fetch_array($consulta);
//Se cuenta el numero de filas
$num = mysqli_num_rows($consulta);
//Verificar si es un usuario existente o no
if($num==1)
{

	if ($row[4]==0)
	 {
			
		session_name("login_supsys");
			session_start();
			//$_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
			$_SESSION["autentificado"]= "SI";
			$_SESSION["s_IdUser"]= $row[0];
			$_SESSION["s_IdPass"]= $row[6];	
			$_SESSION["s_Persona"]= $row[7];
			$_SESSION["s_IdTrabajador"]= $row[9];
			$_SESSION["s_IdSucursal"]= $row[10];
			$_SESSION["s_APersona"]= $row[11];
			$_SESSION["s_AUsuarios"]= $row[12];
			$_SESSION["s_AUsuariosTipo"]= $row[13];
			$_SESSION["s_ATrabajadores"]= $row[14];
			$_SESSION["s_APuestos"]= $row[15];
			$_SESSION["s_ADepartamentos"]= $row[16];
			$_SESSION["s_ATalleres"]= $row[17];
			$_SESSION["s_AScurusales"]= $row[18];
			$_SESSION["s_AProductos"]= $row[19];
			$_SESSION["s_AProductosTipo"]= $row[20];
			$_SESSION["s_APrestamosMaterial"]= $row[21];
			$_SESSION["s_AListadoPrestamos"]= $row[22];
			$_SESSION["s_ASolicitudMaterial"]= $row[23];
			$_SESSION["s_AListadoSolicutudes"]= $row[24];
			$_SESSION["s_AOrdenSalida"]= $row[25];
			$_SESSION["S_AListadoSalidas"]= $row[26];
			$_SESSION["s_AInventarioAlmacen"]= $row[27];
			$_SESSION["s_AInventarioFijo"]= $row[28];
			$_SESSION["s_AIdTipoUsuario"]= $row[29];
			$_SESSION["s_IdArea"]= $row[30];
			echo "3";
	
	}

    ////////////////////////////////////////////////////////////////////////////
	// echo"<script language=\"javascript\">window.location=\"capturas/capturas.php\"</script>";
	 // header("Location: ../inicio/inicio_menu.php");

	else
	{
		
			session_name("login_supsys");
			session_start();
			//$_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
			$_SESSION["autentificado"]= "SI";
			$_SESSION["s_IdUser"]= $row[0];
			$_SESSION["s_IdPass"]= $row[6];	
			$_SESSION["s_Persona"]= $row[7];
			$_SESSION["s_IdTrabajador"]= $row[9];	
			$_SESSION["s_IdSucursal"]= $row[10];
			$_SESSION["s_APersona"]= $row[11];
			$_SESSION["s_AUsuarios"]= $row[12];
			$_SESSION["s_AUsuariosTipo"]= $row[13];
			$_SESSION["s_ATrabajadores"]= $row[14];
			$_SESSION["s_APuestos"]= $row[15];
			$_SESSION["s_ADepartamentos"]= $row[16];
			$_SESSION["s_ATalleres"]= $row[17];
			$_SESSION["s_AScurusales"]= $row[18];
			$_SESSION["s_AProductos"]= $row[19];
			$_SESSION["s_AProductosTipo"]= $row[20];
			$_SESSION["s_APrestamosMaterial"]= $row[21];
			$_SESSION["s_AListadoPrestamos"]= $row[22];
			$_SESSION["s_ASolicitudMaterial"]= $row[23];
			$_SESSION["s_AListadoSolicutudes"]= $row[24];
			$_SESSION["s_AOrdenSalida"]= $row[25];
			$_SESSION["S_AListadoSalidas"]= $row[26];
			$_SESSION["s_AInventarioAlmacen"]= $row[27];
			$_SESSION["s_AInventarioFijo"]= $row[28];
			$_SESSION["s_AIdTipoUsuario"]= $row[29];
			$_SESSION["s_IdArea"]= $row[30];
			echo "1";
		
	}
}
else
{
	//Redirecciona a una pagina especifica
	// echo'<script type="text/javascript">
 //    alert("No.Empleado y/o Contrasena Incorrecta");
 //    window.location.href="../index.php";
 //    </script>';
	// header("Location: login.php?ErrorAutentificacion");
  //    echo"<script></script>";
	  // echo"<script language=\"javascript\">window.location=\"../index.php\"</script>";

	echo "2";
}
?>