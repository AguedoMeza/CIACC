<?
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];

// se crean variables POST y las que van entre corchetes son los nombres de las variables del Ingresasr.js
$pNombre=$_POST["nombre"]; 
$pDescripcion=$_POST["descripcion"]; 
$pPersonas=$_POST["personas"];  
$pUsuarios=$_POST["usuarios"];
$pTipoUsuarios=$_POST["tipousuarios"];
$pTrabajadores=$_POST["trabajadores"];
$pPuestos=$_POST["puestos"];
$pTalleres=$_POST["talleres"];
$pDepartamentos=$_POST["departamentos"];
$pSucursales=$_POST["sucursales"];
$pProductos=$_POST["productos"];
$pTipoProductos=$_POST["tipoproductos"];
$pPrestamoMaterial=$_POST["prestamomaterial"];
$pListadoPrestamo=$_POST["listaprestamo"];
$pSolicitudMaterial=$_POST["solicitudmaterial"];
$pListaSolicitud=$_POST["listasolicitud"];
$pOrdenSalida=$_POST["ordensalida"];
$pListaOrdenSalida=$_POST["listaordensalida"];
$pInventarioAlmacen=$_POST["inventarioalmacen"];
$pInventarioFijo=$_POST["inventariofijo"];

date_default_timezone_set('America/Monterrey');
	$fecha = date('Y-m-d');
	$hora = date('H:i:s');

$qry0 = "SELECT nombre FROM usuarios_tipo WHERE nombre = '$pNombre'";
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
     $consulta= "INSERT INTO usuarios_tipo (
                            nombre,
                            descripcion,
                            personas,
                            usuarios,
                            usuarios_tipo,
                            trabajadores,
                            puestos,
                            talleres,
                            departamentos,
                            sucursales,
                            productos,
                            productos_tipo,
                            prestamo_material,
                            listado_prestamos,
                            solicitud_material,
                            listado_solicitudes,
                            orden_salida,
                            listado_salidas,
                            inventario_almacen,
                            inventario_fijo,
                            activo
                        )
                        VALUES
                            (
                                '$pNombre',
                                '$pDescripcion',
                                '$pPersonas',
                                '$pUsuarios',
                                '$pTipoUsuarios',
                                '$pTrabajadores',
                                '$pPuestos',
                                '$pTalleres',
                                '$pDepartamentos',
                                '$pSucursales',
                                '$pProductos',
                                '$pTipoProductos',
                                '$pPrestamoMaterial',
                                '$pListadoPrestamo',
                                '$pSolicitudMaterial',
                                '$pListaSolicitud',
                                '$pOrdenSalida',
                                '$pListaOrdenSalida',
                                '$pInventarioAlmacen',
                                '$pInventarioFijo',
                                '1'
                            )";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
}
?>