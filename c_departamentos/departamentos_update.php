<?
//se manda llamar la conexion
include'../configuracion/conexion.php';

//verifico inicio de <sesion></sesion>
// include'../global_seguridad/verificar_sesion.php';
// $Idusuario=$_SESSION["s_IdUser"];

//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$pId=$_POST["id_departamento"]; 
$pNombre=$_POST["enombredepartamento"]; 
$pSiglas=$_POST["esiglas"]; 

mysqli_set_charset($conexion, 'utf8');
$qry1 = "SELECT id_departamento, nom_departamento FROM departamentos WHERE nom_departamento = '$pNombre'"; //1 otro  2 gokulove
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
		$consulta= "UPDATE departamentos
						SET nom_departamento = '$pNombre',
							sigla_departamento ='$pSiglas'
						WHERE
						 id_departamento = $pId";
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
	$consulta= "UPDATE departamentos
						SET nom_departamento = '$pNombre',
							sigla_departamento ='$pSiglas'
						WHERE
						 id_departamento = $pId";
                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
	echo "3";
}
?>