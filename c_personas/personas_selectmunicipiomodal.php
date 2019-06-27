<?php
include '../configuracion/conexion.php';

if(isset($_POST['get_option']))
{

 $id_estado = $_POST['get_option'];
 
mysqli_set_charset($conexion, 'utf8');
  $consulta= "SELECT id_municipio, municipio FROM municipios WHERE id_estado = '$id_estado' ";


  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
  while ($row=mysqli_fetch_row($qry))
                   {
                   	  echo "<option value=\"$row[0]\">$row[1]</option>";
                   }
  mysqli_close($conexion);
 exit;
}
?>