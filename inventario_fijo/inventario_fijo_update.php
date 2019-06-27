<?
//se manda llamar la conexion
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
$Idusuario=$_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];

//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$pId=$_POST["id_inventario_fijo"]; 
$pProducto=$_POST["eproducto"];  
$pQr=$_POST["eqr"];
$pCi=$_POST["eci"];
$pModelo=$_POST["emodelo"];
$pMarca=$_POST["emarca"];
$pSerie=$_POST["eserie"];
$pCondiciones=$_POST["econdiciones"];
 
$qry1 = "SELECT  id_inventario_fijo, qr, ci FROM inventario_fijo WHERE qr = '$pQr' AND id_sucursal = '$s_IdSucursal'"; //1 otro  2 gokulove
$consulta1 = mysqli_query($conexion,$qry1) or die  (mysqli_connect_errno());				   
//Descargamos el arreglo que arroja la consulta
$row1 = mysqli_fetch_array($consulta1);
//Se cuenta el numero de filas
$num1 = mysqli_num_rows($consulta1);

$qry3 = "SELECT id_inventario_fijo, qr, ci FROM inventario_fijo WHERE ci = '$pCi' AND id_sucursal = '$s_IdSucursal'";
			        $consulta3 = mysqli_query($conexion,$qry3) or die  (mysqli_connect_errno());                   
			        //Descargamos el arreglo que arroja la consulta
			        $row3 = mysqli_fetch_array($consulta3);
			        //Se cuenta el numero de filas
			        $num3 = mysqli_num_rows($consulta3);

mysqli_set_charset($conexion, 'utf8');
if ($num1 >=1 AND $num3  >= 1) 
	{
		if ($pId == $row1[0] AND $pId == $row3[0]) 
			{
								 $consulta= "UPDATE inventario_fijo
								 SET nombre_producto = '$pProducto', qr = '$pQr', ci = '$pCi', modelo = '$pModelo', serie = '$pSerie', marca = '$pMarca', condiciones = '$pCondiciones'
								 WHERE
								 id_inventario_fijo = '$pId'";
		                    	 $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
		                      	 echo "1";
		       
			}

			else if ($pId != $row1[0] AND $pId == $row3[0]) 
			{
				echo "2";
			}
			else if ($pId == $row1[0] AND $pId != $row3[0]) 
			{
				echo "3";
			}
			else if ($pId != $row1[0] AND $pId != $row3[0]) 
			{
				echo "4";
			}


	}

else if ($num1 >= 1 AND $num3 <= 0) 
{
	if ($pId == $row1[0] ) 
			{
								 $consulta= "UPDATE inventario_fijo
								 SET nombre_producto = '$pProducto', qr = '$pQr', ci = '$pCi', modelo = '$pModelo', serie = '$pSerie', marca = '$pMarca', condiciones = '$pCondiciones'
								 WHERE
								 id_inventario_fijo = '$pId'";
		                    	 $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
		                      	 echo "1";
		       
			}
	else
	{
		echo "2";
	}
}

else if ($num1 <= 0 AND $num3 >= 1) 
{
	if ($pId == $row3[0] ) 
			{
								 $consulta= "UPDATE inventario_fijo
								 SET nombre_producto = '$pProducto', qr = '$pQr', ci = '$pCi', modelo = '$pModelo', serie = '$pSerie', marca = '$pMarca', condiciones = '$pCondiciones'
								 WHERE
								 id_inventario_fijo = '$pId'";
		                    	 $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
		                      	 echo "1";
		       
			}
	else
	{
		echo "3";
	}
}

// 			 if ($pId == $row1[0]) 
// 			{
// 								 $consulta= "UPDATE inventario_fijo
// 								 SET nombre_producto = '$pProducto', qr = '$pQr', ci = '$pCi', modelo = '$pModelo', serie = '$pSerie', marca = '$pMarca', condiciones = '$pCondiciones'
// 								 WHERE
// 								 id_inventario_fijo = '$pId'";
// 		                    	 $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
// 		                      	 echo "1";
		       
// 			}
// 		 //  	else if ($row1[0] != $pId & $row1[1] == $pQr) 
// 		 //  	{
		  		
// 			// 		$qry2 = "SELECT id_inventario_fijo, qr, ci FROM inventario_fijo WHERE qr = '$pQr' AND ci = '$pCi' AND id_sucursal = '$s_IdSucursal'";
// 			//         $consulta2 = mysqli_query($conexion,$qry2) or die  (mysqli_connect_errno());                   
// 			//         //Descargamos el arreglo que arroja la consulta
// 			//         $row2 = mysqli_fetch_array($consulta2);
// 			//         //Se cuenta el numero de filas
// 			//         $num2 = mysqli_num_rows($consulta2);
// 			//         if ($num2 >= 1) 
// 			//         {
// 			//         	if ($pId == $row2[0]) 
// 			// 					{
// 			// 					 $consulta= "UPDATE inventario_fijo
// 			// 					 SET nombre_producto = '$pProducto', qr = '$pQr', ci = '$pCi', modelo = '$pModelo', serie = '$pSerie', marca = '$pMarca', condiciones = '$pCondiciones'
// 			// 					 WHERE
// 			// 					 id_inventario_fijo = '$pId'";
// 		 //                    	 $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
// 		 //                      	 echo "1";
		       
// 			// 					}
// 			// 			else
// 			// 			{
// 			// 				echo "4";
// 			// 			}
		  				
// 			//         }
// 			//         else
// 			//         {
// 			//         	echo "2";
// 			//         }
		  		
// 		 //  	}
// 	}	

// else if ($num3 >= 1)
// {

// 	if ($pId == $row3[0]) 
// 			{
// 								 $consulta= "UPDATE inventario_fijo
// 								 SET nombre_producto = '$pProducto', qr = '$pQr', ci = '$pCi', modelo = '$pModelo', serie = '$pSerie', marca = '$pMarca', condiciones = '$pCondiciones'
// 								 WHERE
// 								 id_inventario_fijo = '$pId'";
// 		                    	 $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
// 		                      	 echo "1";
		       
// 			}
// 		else 
// 		   {
// 				echo "3";
// 		   }
	


?>
