<?
//se manda llamar la conexion
include'../configuracion/conexion.php';

//verifico inicio de sesion
// include'../global_seguridad/verificar_sesion.php';
// $Idusuario=$_SESSION["s_IdUser"];

//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$pId=$_POST["id_persona"]; 
$pNombre=$_POST["enombre"]; 
$pPaterno=$_POST["epaterno"]; 
$pMaterno=$_POST["ematerno"]; 
$pCivil=$_POST["ecivil"]; 
$pTelefono=$_POST["etelefono"]; 
$pCorreo=$_POST["ecorreo"]; 
$pColonia=$_POST["ecolonia"]; 
$pCalle=$_POST["ecalle"]; 
$pNumero=$_POST["enumero"]; 
$pEstado=$_POST["estado"]; 
$pMunicipio=$_POST["municipioselec"]; 

// $qry1 = "SELECT id_persona,  CONCAT(nombre, ' ', ap_paterno, ' ', ap_materno) as PERSONA FROM personas WHERE nombre = '$pNombre'"; //1 otro  2 gokulove
// $consulta1 = mysqli_query($conexion,$qry1) or die  (mysqli_connect_errno());				   
// //Descargamos el arreglo que arroja la consulta
// $row1 = mysqli_fetch_array($consulta1);
// //Se cuenta el numero de filas
// $num1 = mysqli_num_rows($consulta1);

// if ($num1==1) 
// {
//  if ($pId == $row1[0]) 
mysqli_set_charset($conexion, 'utf8');
		$consulta= "UPDATE personas
						SET nombre = '$pNombre', ap_paterno = '$pPaterno', ap_materno = '$pMaterno', ecivil = '$pCivil', telefono = '$pTelefono', correo = '$pCorreo', colonia = '$pColonia', calle = '$pCalle', numero = '$pNumero', estado = '$pEstado', municipio = '$pMunicipio'
						WHERE
						 id_persona = $pId";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
//         echo "1";
// 	}
//   if ($row1[0] != $pId & $row1[1] == $pNombre) 
//   {
//   	echo "2";	
//   }
// }	

// else
// {
// 	$consulta= "UPDATE proveedores
// 						SET nombre = '$pNombre', descripcion = '$pDescripcion', direccion = '$pDireccion', telefono = '$pTelefono', correo = '$pCorreo', fax = '$pFax', rfc = '$pRfc', id_tipo_proveedor = '$pTipoProveedor'
// 						WHERE
// 						 id_proveedor = $pId";
//                      $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
// 	echo "3";
// }
?>
