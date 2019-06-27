<?
include("../configuracion/conexion.php");
$s_IdSucursal = $_SESSION["s_IdSucursal"];  

// $fecha=date("Y-m-d"); 
// $hora=date ("h:i:s");
$PIdSolicitud=$_POST["id_solicitud"]; 
$PStatus=$_POST["status"]; 
$PComentario=$_POST["comentario"]; 
$PDonante=$_POST["donante"]; 
mysqli_set_charset($conexion, 'utf8');
		if ($PStatus == "1") 
		{
			$consulta= "UPDATE solicitud_material
						SET estatus = '$PStatus', respuesta = '$PComentario', id_sucursal_donante = '$PDonante'
						WHERE
						 id_solicitud_material = '$PIdSolicitud'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
		}
		else
		{
			$consulta= "UPDATE solicitud_material
						SET estatus = '$PStatus', respuesta = '$PComentario', id_sucursal_donante = ''
						WHERE
						 id_solicitud_material = '$PIdSolicitud'";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
		}
                 
              
?>
