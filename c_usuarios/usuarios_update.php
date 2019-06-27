<?php
//se manda llamar la conexion
include'../configuracion/conexion.php';

//verifico inicio de sesion
// include'../global_seguridad/verificar_sesion.php';
// $Idusuario=$_SESSION["s_IdUser"];

//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$pId=$_POST["id_usuario"]; 
$pNombre=$_POST["enombreusuario"]; 
$pNombre2=$pNombre; 
$pTipo=$_POST["etipousuario"];
$pContra=$_POST["econtrasena"];  
$contra_final = md5($pContra);


// $qry0 = "SELECT nom_usuario, id_usuario FROM usuarios WHERE nom_usuario = '$pNombre' AND id_usuario= '$pId'"; //calando
// $consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());				   
// //Descargamos el arreglo que arroja la consulta
// $row = mysqli_fetch_array($consulta0);
// //Se cuenta el numero de filas
// $num = mysqli_num_rows($consulta0);
// if ($num==1) 
// {
// if ($pId == $row[1]) 
// 	{
// 		// $consulta= "UPDATE usuarios
// 		// 				SET nom_usuario = '$pNombre',
// 		// 						tipo_usuario = '$pTipo',
// 		// 				contra = '$contra_final',
// 		// 				duplicado = '$pContra'
// 		// 				WHERE
// 		// 				 id_usuario = $pId";
//   //       $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
//         echo "1";
// 	}
// }	

$qry1 = "SELECT id_usuario, nom_usuario FROM usuarios WHERE nom_usuario = '$pNombre'"; //1 otro  2 gokulove
$consulta1 = mysqli_query($conexion,$qry1) or die  (mysqli_connect_errno());				   
//Descargamos el arreglo que arroja la consulta
$row1 = mysqli_fetch_array($consulta1);
//Se cuenta el numero de filas
$num1 = mysqli_num_rows($consulta1);
mysqli_set_charset($conexion, 'utf8');

if ($num1==1) 
{
 if ($pId == $row1[0]) 
	{
		$consulta= "UPDATE usuarios
						SET nom_usuario = '$pNombre',
								tipo_usuario = '$pTipo',
						contra = '$contra_final',
						duplicado = '$pContra'
						WHERE
						 id_usuario = $pId";
        $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
        echo "1";
	}
  if ($pId != $row1[0] & $pNombre == $row1[1]) 
  {
  	echo "2";	
  }
}	

else
{
	$consulta= "UPDATE usuarios
						SET nom_usuario = '$pNombre',
								tipo_usuario = '$pTipo',
						contra = '$contra_final',
						duplicado = '$pContra'
						WHERE
						 id_usuario = $pId";
        $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
	echo "3";
}
// $qry1 = "SELECT id_usuario, nom_usuario FROM usuarios WHERE nom_usuario = '$pNombre' AND id_usuario= '$pId'"; //calando
// $consulta1 = mysqli_query($conexion,$qry1) or die  (mysqli_connect_errno());				   
// //Descargamos el arreglo que arroja la consulta
// $row1 = mysqli_fetch_array($consulta1);
// //Se cuenta el numero de filas
// $num = mysqli_num_rows($consulta1);

// if ($num==0) 
// {

// 		echo "2";

// }

// else
// {
// 	echo "3";
// }
?>
