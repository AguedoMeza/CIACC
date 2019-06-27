<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Solicitud Material</title>
    
</head>
<body>

<?php 
include'../configuracion/conexion.php';  
include("../global_seguridad/verificar_sesion.php");
$s_IdSucursal = $_SESSION["s_IdSucursal"];
mysqli_set_charset($conexion, 'utf8');
$consulta="
	SELECT
s.id_solicitud_material,
s.folio_solicitud,
su.nombre AS Solicitante,
su.direccion,
s.fecha_registro,
su.telefono,
su.correo
FROM
solicitud_material AS s
INNER JOIN sucursales AS su
ON su.id_sucursal = s.id_sucursal
WHERE s.vista != 0 AND s.id_sucursal = '$s_IdSucursal'";
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
su.nombre AS Donante,
su.direccion,
su.telefono,
su.correo,
s.id_sucursal_donante
FROM
solicitud_material AS s
INNER JOIN sucursales AS su
ON su.id_sucursal = s.id_sucursal_donante
WHERE s.vista != 0 AND s.id_sucursal = '$s_IdSucursal'";
$qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
$row1=mysqli_fetch_row($qry1); 
$Prestamista=$row1[0];   
$DireccionPrestamista=$row1[1];
$TelefonoPrest=$row1[2];       
$CorreoPrest=$row1[3]; 
$IdDonante=$row1[4]; 
if ($IdDonante == "0") 
{
	$Prestamista = "Pendiente";
	$DireccionPrestamista = "Pendiente";
	$TelefonoPrest = "Pendiente";
	$CorreoPrest = "Pendiente";
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
sd.producto,
SD.descripcion,
u.unidad,
sd.cantidad,
s.comentario,
s.estatus,
s.respuesta,
sd.cantidad_autorizada
FROM
solicitud_material_detalle AS sd
INNER JOIN unidades_medida AS u
ON u.id_unidad = sd.unidad
INNER JOIN solicitud_material AS s
ON s.folio_solicitud = sd.folio_solicitud
WHERE s.vista != 0 AND s.id_sucursal = '$s_IdSucursal'";
$qry2=mysqli_query($conexion,$consulta2) or die (mysqli_connect_error());
$row2=mysqli_fetch_row($qry2); 
$Producto=$row2[0];   
$DescripcionProd=$row2[1];  
$UnidadProd=$row2[2];  
$Cantidad=$row2[3];  
$Comentario=$row2[4];  
$Status=$row2[5]; 
$Respuesta=$row2[6];   
$Autorizada=$row2[7];   
if ($Status == 0) 
{
	$Status = "Pendiente";
}
else if ($Status == 1) 
{
	$Status = "Completada";
}
else if ($Status == 2) 
{
	$Status = "Cancelada";
}
else if ($Status == 4) 
{
	$Status = "Proceso";
}
if ($ConsumibleCondicion == 1) 
{
    $Consumible = "Si";
}
else
{
	$Consumible = "No";
}
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
			Status: <?php echo $Status ?>
			</td>

        </tr>
    </table>


<br>


    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
		<tr>
			<td class='pumpkin' style="width:45%; ">SOLICITANTE</td>
			<td  style="width:10%; "></td>
			<td class='pumpkin' style="width:45%; ">DONANTE  </td>
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
            <th class="pumpkin" style="width: 30% ">PRODUCTO</th>
			<th class="pumpkin" style="width: 30% ">DESCRIPCION</th>
            <th class="pumpkin" style="width: 10%; text-align: left;">UNIDAD</th>
            <th class="pumpkin" style="width: 15%;text-align:right">SOLICITADO</th>  
            <th class="pumpkin" style="width: 15%;text-align:right">AUTORIZADO</th>            
        </tr>
 
     <?php

     do {
     	$Producto=$row2[0];   
		$DescripcionProd=$row2[1];  
		$UnidadProd=$row2[2];  
		$Cantidad=$row2[3];  
		$Autorizada=$row2[7];   
		
     ?>
		<tr>
            <td class='centrar' style="width: 30%; text-align: center"><?php echo $Producto ?></td>
			<td class='centrar' style="width: 30%; text-align: center"><?php echo $DescripcionProd ?></td>
            <td class='centrar' style="width: 10%; text-align: left"><?php echo $UnidadProd ?></td>
            <td class='centrar' style="width: 15%; text-align: right"><?php echo $Cantidad ?></td>
            <td class='centrar' style="width: 15%; text-align: right"><?php echo $Autorizada ?></td>
        </tr>

	<?php } while ($row2=mysqli_fetch_row($qry2)); ?>
</table>
<div class="saltopagina"></div>
 <table cellspacing="0" style="width: 100%; border: solid 0px black; background: white; font-size: 11pt;padding:1mm;">
 <?php

echo "<tr>
			<th class='pumpkin' style='width: 45%; text-align: center;'>Comentarios del Solicitante</th>
			<td  style='width:10%;'></td>
			<th class='pumpkin' style='width: 45%; text-align: center;'>Respuesta del Supervisor</th>
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
