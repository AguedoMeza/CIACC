<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tablas</title>
    
</head>
<body>

<?php 
// $Id=$_GET['id'];
include'../configuracion/conexion.php';   
include("../global_seguridad/verificar_sesion.php");  
$s_IdSucursal = $_SESSION["s_IdSucursal"];
mysqli_set_charset($conexion, 'utf8');
$consulta="SELECT DISTINCT
p.id_persona,
CONCAT(p.nombre, ' ',p.ap_paterno, ' ', p.ap_materno)AS NOMBRE,
p.ecivil,
p.telefono,
p.correo,
concat(p.calle, ' ', p.numero, ' Colonia ',p.colonia, ', ',   (SELECT (m.municipio) from municipios as m where p.municipio=m.id_municipio), ' ', (SELECT (e.estado)FROM estados AS e where p.estado=e.id_estado) )AS direccion
FROM personas AS p
WHERE 
p.activo= '1' AND p.id_sucursal = '$s_IdSucursal'
GROUP BY
p.id_persona";
$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());

$consulta1 = "SELECT s.nombre
FROM sucursales AS s 
WHERE s.id_sucursal = '$s_IdSucursal'";
$qry1=mysqli_query($conexion,$consulta1) or die (mysqli_connect_error());
$row1 = mysqli_fetch_array($qry1);
if ($s_IdSucursal != 0 AND $s_IdSucursal != 99 AND $s_IdSucursal != 983 AND $s_IdSucursal != 981 AND $s_IdSucursal != 982) {
    $Sucursal = $row1[0];
}
 ?>



<style type="text/css">
<!--
table
{
    width:  90%;
    border: solid 0px #5544DD;
    margin:auto;
}
table.borde
{
    width:  90%;
    border: solid 1px #D8D8D8;
    margin:auto;
}
th
{
    text-align: center;
    border: solid 0px #113300;
    background: #EEFFEE;
}
th.borde
{
    text-align: center;
    border: solid 1px #D8D8D8;
    background: #EEFFEE;
}
td
{
    text-align: left;
    border: solid 0px #55DD44;
}
td.borde
{
    text-align: left;
    border: solid 1px #D8D8D8;
}
td.col1
{
    border: solid 0px red;
    text-align: right;
}
/*hojas de estilo propia*/
img{
    width: 60%;
}
.gris{
    background: #dcdcdc;
}
.verde{
    background: #90ee90;
}

/*letras*/
.mchico{font-size: 1px; margin-top: 0px} 
.chico{font-size: 8px; margin-top: 0px}  
.mediano{font-size: 10px; margin-top: 0px}  
.grande{font-size:15px; margin-top: 0px}
.subrayado{text-decoration: underline;} 
.firma {font-size: 10px;font-style: italic;}

.subArriba{
    text-decoration: overline;
}
label{
     margin: 14px 0px 0px 0px;
}
.ancho{width:20px; };

.bajo{
    display: block;
    margin: 15px 0px 0px 0px;
    background: #ccc;
}
/**/

h1{
    text-align: left;
}

</style>



<table>
    <col style="width: 100%" class="col1">

    <tr>
        <td align="left">
            <img src="../images/utmart.jpg" width="750"> 
            
        </td>
    </tr>

</table>

<table style="width: 100%" cellpadding="0" cellspacing="0">
    <col style="width: 6%">  <!-- id -->
    <col style="width: 18%" > <!-- nombre sucursal -->
    <col style="width: 18%">  <!-- descripcion -->
    <col style="width: 20%" > 
    <col style="width: 20%" >
    <col style="width: 18%" >
    <tr>
        <td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
        <td colspan="9" border=0 align="center">
            <label class="grande">
                <b>Reporte de Personas <?php echo "$Sucursal";?></b>
            </label>           
        </td>
    </tr>
    <tr>
        <td colspan="7"><hr></td>
    </tr>
    <tr>
        <td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
</table>

<div class="container">   
<div class="responsive">
<table  style="width: 100%" cellpadding="0" cellspacing="0">
    <col style="width: 4%">  <!-- id -->
    <col style="width: 15%" > <!-- nombre  -->
    <!-- <col style="width: 10%">  --> <!-- ecivul -->
    <col style="width: 15%" >  <!-- telefono -->
    <col style="width: 25%" >  <!-- correo -->
    <col style="width: 25%" >  <!-- direccion -->
  
    <tr>
        <td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr class="verde">
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>No.</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Nombre Completo</b>
            </label>
        </td>
        
         <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Teléfono</b>
            </label>
        </td>
          <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Correo</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Dirección</b>
            </label>
        </td>  

         
     
                
    </tr>
    <?php
        $n=1;
        while ($row=mysqli_fetch_row($qry))
        {     
    ?>
    <tr>
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b><?php echo "$n";?></b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b><?php echo "$row[1]";?></b>
            </label>
        </td>
        
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b><?php echo "$row[3]";?></b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b><?php echo "$row[4]";?></b>
            </label>
        </td>
         <td colspan="1" align="center" border=1>
            <label class="grande">
                <b><?php echo "$row[5]";?></b>
            </label>
        </td>
           

 
 
              
    </tr>

    <?php
    $n++;
    }
    ?>
</table>
 

        <div class="container firma">
            <div class="row">
                <div class="col-xs-6">
                    <p>  <?php
                    $hora= date ("h:i:s");
                    $fecha= date ("j/n/Y");

                    echo "$fecha <br>";
                    echo $hora;


                    ?> </p>
                </div>

            </div>
        </div>






</div>
</div>
</body>
</html>