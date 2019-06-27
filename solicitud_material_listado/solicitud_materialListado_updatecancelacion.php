<?
include'../configuracion/conexion.php';
include'../global_seguridad/verificar_sesion.php';
$s_IdSucursal = $_SESSION["s_IdSucursal"];

$PIdPrestamo=$_POST["id_prestamo"]; 


									 $consulta3="SELECT p.id_prestamo, p.estado, p.proceso_cancelacion
                                      FROM
                                      prestamo_material AS p
                                      WHERE p.proceso_cancelacion = '1' AND p.estado != '3' AND p.id_sucursal = '$s_IdSucursal'";
                                    $qry3=mysqli_query($conexion,$consulta3) or die (mysqli_connect_error());
                                    $row3=mysqli_fetch_row($qry3); 
                                    $idprestamo=$row3[0];  
                                    $num3 = mysqli_num_rows($qry3);
                                    if ($num3 >= 1) 
                                    {
                                     $consulta1= "UPDATE prestamo_material
												SET proceso_cancelacion = '0'
												WHERE
												 id_prestamo = '$idprestamo' AND id_sucursal = '$s_IdSucursal'";
                                    $qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
                                    }


								$consulta= "UPDATE prestamo_material
												SET proceso_cancelacion = '1'
												WHERE
												 id_prestamo = '$PIdPrestamo' AND id_sucursal = '$s_IdSucursal'";
						                     $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
?>
