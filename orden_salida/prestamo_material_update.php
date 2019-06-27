<?
//se manda llamar la conexion
include'../configuracion/conexion.php';
include'../global_seguridad/verificar_sesion.php';
$Idusuario=$_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"]; 

//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$pId=$_POST["id_producto"]; 
$pNombre=$_POST["enombre"]; 
$pDescripcion=$_POST["edescripcion"]; 
$pTipoProducto=$_POST["etipoproducto"]; 
$pConsumible=$_POST["econsumible"];
$pUnidad=$_POST["idunidad"]; 



	$qry1 = "SELECT id_producto, nombre FROM productos WHERE nombre = '$pNombre' AND id_sucursal = '$s_IdSucursal'"; //1 otro  2 gokulove
	$consulta1 = mysqli_query($conexion,$qry1) or die  (mysqli_connect_errno());				   
	//Descargamos el arreglo que arroja la consulta
	$row1 = mysqli_fetch_array($consulta1);
	//Se cuenta el numero de filas
	$num1 = mysqli_num_rows($consulta1);

	if ($num1==1) 
	{
		 if ($pId == $row1[0]) 
			{
								 $consulta= "UPDATE productos
								 SET nombre = '$pNombre', descripcion_producto = '$pDescripcion', id_tipo_producto = '$pTipoProducto', consumible = '$pConsumible', id_unidad = '$pUnidad'
								 WHERE
								 id_producto = $pId";
		                    	 $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
		                      	 echo "1";
		       
			}
		  if ($row1[0] != $pId & $row1[1] == $pNombre) 
		  	{
		  				echo "2";	
		  	}
	}	

		else
		{
								$consulta= "UPDATE productos
								SET nombre = '$pNombre', descripcion_producto = '$pDescripcion', id_tipo_producto = '$pTipoProducto', consumible = '$pConsumible', id_unidad = '$pUnidad'
								WHERE
								 id_producto = $pId";
		                     	$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
		                      	echo "1";
		}

// else
// {
// 	$qry1 = "SELECT id_producto, nombre, folio FROM productos WHERE inventario_fijo = 1 AND id_sucursal = '$s_IdSucursal' AND folio ='$pFolio'"; //1 otro  2 gokulove
// 	$consulta1 = mysqli_query($conexion,$qry1) or die  (mysqli_connect_errno());				   
// 	//Descargamos el arreglo que arroja la consulta
// 	$row1 = mysqli_fetch_array($consulta1);
// 	//Se cuenta el numero de filas
// 	$num1 = mysqli_num_rows($consulta1);

// 	if ($num1==1) 
// 	{
// 		 if ($pId == $row1[0]) 
// 			{
// 								 $consulta= "UPDATE productos
// 								 SET nombre = '$pNombre', descripcion_producto = '$pDescripcion', id_tipo_producto = '$pTipoProducto', folio = '$pFolio'
// 								 WHERE
// 								 id_producto = $pId ";
// 		                    	 $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
// 		                      	 echo "1";
		       
// 			}
// 		  if ($row1[0] != $pId & $row1[2] == $pFolio) 
// 		  	{
// 		  				echo "2";	
// 		  	}
// 	}	

// 		else
// 		{
// 								$consulta= "UPDATE productos
// 								SET nombre = '$pNombre', descripcion_producto = '$pDescripcion', id_tipo_producto = '$pTipoProducto', folio = '$pFolio'
// 								WHERE
// 								 id_producto = $pId";
// 		                     	$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
// 		                      	echo "1";
// 		}
// }

?>
