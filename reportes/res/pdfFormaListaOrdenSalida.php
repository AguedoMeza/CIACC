<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orden Salida</title>
    
</head>
<body>

<?php 
include'../configuracion/conexion.php';  
include("../global_seguridad/verificar_sesion.php");
$s_IdSucursal = $_SESSION["s_IdSucursal"];
mysqli_set_charset($conexion, 'utf8');
$consulta="SELECT
	o.id_orden_salida,
	o.folio_orden_salida,
	s.nombre,
	s.direccion,
	o.fecha_registro,
s.telefono,
s.correo
FROM
	orden_salida AS o
INNER JOIN sucursales AS s ON o.id_sucursal = s.id_sucursal
WHERE o.vista != 0 AND o.id_sucursal = '$s_IdSucursal'";
$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
$row=mysqli_fetch_row($qry);
$Folio=$row[1];   
$Solicitante=$row[2];   
$DireccionSolicitante=$row[3];
$FechaPrestamo=$row[4];
$Telefono=$row[5];       
$Correo=$row[6]; 
$originalDate = $FechaPrestamo;
$newDate = date("d/m/Y", strtotime($originalDate));
?>
<?php 
include'../configuracion/conexion.php';  
include("../global_seguridad/verificar_sesion.php");
$s_IdSucursal = $_SESSION["s_IdSucursal"];
mysqli_set_charset($conexion, 'utf8');
$consulta1="SELECT
	s.nombre,
	s.direccion,
    s.telefono,
    s.correo,
    o.destino
FROM
	orden_salida AS o
INNER JOIN sucursales AS s ON o.destino = s.id_sucursal
WHERE o.vista != 0 AND o.id_sucursal = '$s_IdSucursal'";
$qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
$row1=mysqli_fetch_row($qry1); 
$Prestamista=$row1[0];   
$DireccionPrestamista=$row1[1];
$TelefonoPrest=$row1[2];       
$CorreoPrest=$row1[3]; 
$IdDonante=$row1[4]; 
if ($IdDonante == "0") 
{
	$Prestamista = "NA";
	$DireccionPrestamista = "NA";
	$TelefonoPrest = "NA";
	$CorreoPrest = "NA";
}
else
{
	$Prestamista = "Centro Comunitario ".$Prestamista;
}
?>
<?php 
include'../configuracion/conexion.php';  
include("../global_seguridad/verificar_sesion.php");
$s_IdSucursal = $_SESSION["s_IdSucursal"];
mysqli_set_charset($conexion, 'utf8');
$consulta2="SELECT
	od.nombre_producto,
	od.motivo_salida,
	od.cantidad,
	o.comentario
FROM
	orden_salida_detalle AS od
INNER JOIN orden_salida AS o ON o.folio_orden_salida = od.folio_orden_salida
WHERE
	o.vista != 0 AND o.id_sucursal = '$s_IdSucursal'";
$qry2=mysqli_query($conexion,$consulta2) or die (mysqli_connect_error());
$row2=mysqli_fetch_row($qry2); 
$Producto=$row2[0];   
$MotivoSalida=$row2[1];   
$Cantidad=$row2[2];  
$Comentario=$row2[3]; 
?>
<style type="text/css">
@media all {
   div.saltopagina{
      display: none;
   }
}
   
@media print{
   div.saltopagina{ 
      display:block; 
      page-break-before:always;
   }
}

table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
.pumpkin{
	background:#530a6b;
	padding: 4px 4px 4px;
	color:white;
	font-weight:bold;
	font-size:12px;
}
.centrar
{
	text-align: center;
}
.silver{
	background:#bdc3c7;
	padding: 3px 4px 3px;
}
.clouds{
	background:#ecf0f1;
	padding: 3px 4px 3px;
}
.border-top{
	border-top: solid 1px #bdc3c7;
	
}
.border-left{
	border-left: solid 1px #bdc3c7;
}
.border-right{
	border-right: solid 1px #bdc3c7;
}
.border-bottom{
	border-bottom: solid 1px #bdc3c7;
}

table.page_footer {width: 100%; border: none; background-color: white; padding: 2mm;border-collapse:collapse; border: none;}
}
-->
</style>
<?php 
?>
 <table>
    <col style="width: 100%" class="col1">

    <tr>
        <td align="left">
            <img src="../images/ciacc.jpg" width="750"> 
            
        </td>
    </tr>

</table>
<table cellspacing="0" style="width: 100%;">
        <tr>
			 <td  style="width: 25%; font-size:24px;color:#2c3e50">
               	FOLIO Nº <?php echo $Folio ?>
            </td>
			<td style="width: 75%;text-align:right;font-size:24px;color:#2c3e50">
			FECHA <?php echo $newDate ?>
			</td>

			
        </tr>
        <tr>
        	<td  style="width: 25%;">
               
            </td>
            <td style="width: 75%;text-align:right;font-size:24px;color:#2c3e50">
			
			</td>

        </tr>
    </table>


<br>


    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
		<tr>
			<td class='pumpkin' style="width:45%; ">ORIGEN</td>
			<td  style="width:10%; "></td>
			<td class='pumpkin' style="width:45%; ">DESTINO  </td>
		</tr>
		<tr>
			<td style="width:45%; ">
						<u> <?php echo "Centro Comunitario ". $Solicitante ?></u> <br>
				<b>Dirección:</b><?php echo $DireccionSolicitante ?><br> 
				<b>Teléfono:</b> <?php echo $Telefono ?><br>
				<b>Email:</b> <?php echo $Correo ?>
			</td>
			<td  style="width:10%; "></td>
			<td style="width:45%; ">
			 	 <u><?php echo $Prestamista ?></u><br>
				<b>Dirección:</b> <?php echo $DireccionPrestamista ?><br>
				<b>Teléfono:</b> <?php echo $TelefonoPrest ?><br>
				<b>Email:</b> <?php echo $CorreoPrest ?>
			</td>
			
		</tr>
	</table>
	<br>
	
         
  
    <table cellspacing="0" style="width: 100%; border: solid 0px #7f8c8d; text-align: center; font-size: 10pt;padding:1mm;">
   
        <tr >
            <th class="pumpkin" style="width: 40% ">PRODUCTO</th>
			<th class="pumpkin" style="width: 40% ">MOTIVO</th>
            <th class="pumpkin" style="width: 10%;text-align:right">CANTIDAD</th>            
        </tr>
 
     <?php

     do {
     	$Producto=$row2[0];   
		$MotivoSalida=$row2[1];  
		$Cantidad=$row2[2];  
		
     ?>
		<tr>
            <td class='centrar' style="width: 45%; text-align: center"><?php echo $Producto ?></td>
			<td class='centrar' style="width: 45%; text-align: center"><?php echo $MotivoSalida ?></td>
            <td class='centrar' style="width: 10%; text-align: right"><?php echo $Cantidad ?></td>
        </tr>

	<?php } while ($row2=mysqli_fetch_row($qry2)); ?>
</table>
<div class="saltopagina"></div>
 <table cellspacing="0" style="width: 100%; border: solid 0px black; background: white; font-size: 11pt;padding:1mm;">
 <?php

echo "<tr>
			<th class='pumpkin' style='width: 45%; text-align: center;'>Comentario</th>
			<td  style='width:10%;'></td>
			
        </tr>";
echo "<tr>
			<td class='border-left border-bottom border-right' style='width: 45%;'>$Comentario</td>
			<td  style='width:10%;'></td>
			<td class='border-left border-bottom border-right' style='width: 45%;'>$Respuesta</td>
        </tr>";
  ?>
    </table><br>
<table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
		<tr>
			<td class='pumpkin' style="width:45%; ">FIRMA SOLICITANTE</td>
			<td  style="width:10%; "></td>
			<td class='pumpkin' style="width:45%; ">FIRMA DONANTE</td>
		</tr>
		<tr>
			<td class='border-left border-bottom border-right' style='width: 45%;'>
				<br><br>		
			</td>
			<td  style="width:10%; "></td>
			<td class='border-left border-bottom border-right' style='width: 45%;'>
			 	<br><br><br>
			</td>
			
		</tr>
	</table>
	<br>
<?php 
include'../configuracion/conexion.php';  
include("../global_seguridad/verificar_sesion.php");
$s_IdSucursal = $_SESSION["s_IdSucursal"];

$consulta3="SELECT s.nombre, s.direccion, s.telefono, s.correo
FROM
sucursales AS s
WHERE s.id_sucursal = '$s_IdSucursal'";
$qry3=mysqli_query($conexion,$consulta3) or die (mysqli_connect_error());
$row3=mysqli_fetch_row($qry3); 
$Sucursal=$row3[0];  
$DireccionSucursal=$row3[1];  
$TelSucursal=$row3[2];  
$EmailSucursal=$row3[3];  
?>
	<p style="font-size:11pt;text-align:center">Si tiene alguna consulta sobre esta solicitud por favor contácte a:<br><br>
	<strong>- Centro Comunitario <?php echo $Sucursal ?> - </strong><br>
	<?php echo $DireccionSucursal ?>, <strong>Telefono: </strong><?php echo $TelSucursal ?> <strong>E-mail: </strong><?php echo $EmailSucursal ?>
	</p>
