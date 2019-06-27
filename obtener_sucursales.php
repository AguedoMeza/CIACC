<?php
include("configuracion/conexion.php"); 
$s_idUsuario = $_SESSION["s_IdUser"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];  
$s_IdArea = $_SESSION["s_IdArea"];
  												if ($s_idUsuario == 62 || $s_idUsuario == 63 || $s_idUsuario == 64) 
                                                  {
                                                              mysqli_set_charset($conexion, 'utf8');
                                                             $consulta12= "SELECT id_sucursal, nombre
                                                                  FROM sucursales WHERE activo = 1 AND area = '$s_IdArea'";
                                                             $qry12=mysqli_query($conexion,$consulta12) or die (mysqli_connect_error());
                                                  }

                                                  if ($s_idUsuario == 65 || $s_idUsuario == 66 || $s_idUsuario == 1 || $s_idUsuario == 61 )
                                                  {
                                                                         mysqli_set_charset($conexion, 'utf8');
                                                                    $consulta12= "SELECT id_sucursal, nombre
                                                                        FROM sucursales WHERE activo = 1";
                                                                   $qry12=mysqli_query($conexion,$consulta12) or die (mysqli_connect_error());
                                                  }
                                                  
  while ($row12=mysqli_fetch_row($qry12))
                   {
                        echo "<option value=\"$row12[0]\">$row12[1]</option>";

                   }
?>
