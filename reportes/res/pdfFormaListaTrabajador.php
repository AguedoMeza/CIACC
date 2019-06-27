<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tablas</title>
    
</head>
<body>

<?php 
// $Id=$_GET['id'];
include('../configuracion/conexion.php');
include("../global_seguridad/verificar_sesion.php");  
$s_IdSucursal = $_SESSION["s_IdSucursal"];
$s_idUsuario = $_SESSION["s_IdUser"];

 if ($s_idUsuario == 62 || $s_idUsuario == 63 || $s_idUsuario == 64) 
{
     mysqli_set_charset($conexion, 'utf8');
 $consulta="SELECT DISTINCT
            t.id_trabajador,
            t.num_empleado,
            (SELECT (CONCAT(p.nombre, ' ', p.ap_paterno, ' ', p.ap_materno)) FROM personas as p WHERE t.id_persona=p.id_persona) as NombreEmpleado,
            (SELECT d.nom_departamento FROM departamentos as d WHERE t.id_departamento=d.id_departamento) as Depto,
            (SELECT pu.nom_puesto FROM puestos as pu WHERE t.id_puesto=pu.id_puesto) as Puesto,
            (SELECT s.nombre FROM sucursales AS s WHERE s.id_sucursal = t.id_sucursal) as Sucursal
            FROM 
                trabajadores as t
            WHERE
            t.activo = '1' AND t.id_usuario = '$s_idUsuario'
            GROUP BY
            t.id_trabajador";
                              $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
}
if ($s_idUsuario == 61) 
{
     mysqli_set_charset($conexion, 'utf8');
    $consulta="SELECT DISTINCT
            t.id_trabajador,
            t.num_empleado,
            (SELECT (CONCAT(p.nombre, ' ', p.ap_paterno, ' ', p.ap_materno)) FROM personas as p WHERE t.id_persona=p.id_persona) as NombreEmpleado,
            (SELECT d.nom_departamento FROM departamentos as d WHERE t.id_departamento=d.id_departamento) as Depto,
            (SELECT pu.nom_puesto FROM puestos as pu WHERE t.id_puesto=pu.id_puesto) as Puesto,
            t.area
            FROM 
                trabajadores as t
            WHERE
            t.activo = '1' AND t.id_usuario = '$s_idUsuario'
            GROUP BY
            t.id_trabajador";
                              $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
}
if ($s_idUsuario == 65 || $s_idUsuario == 66 || $s_idUsuario == 1)
{
     mysqli_set_charset($conexion, 'utf8');
    $consulta="SELECT DISTINCT
            t.id_trabajador,
            t.num_empleado,
            (SELECT (CONCAT(p.nombre, ' ', p.ap_paterno, ' ', p.ap_materno)) FROM personas as p WHERE t.id_persona=p.id_persona) as NombreEmpleado,
            (SELECT d.nom_departamento FROM departamentos as d WHERE t.id_departamento=d.id_departamento) as Depto,
            (SELECT pu.nom_puesto FROM puestos as pu WHERE t.id_puesto=pu.id_puesto) as Puesto,
            (SELECT s.nombre FROM sucursales AS s WHERE s.id_sucursal = t.id_sucursal) as Sucursal
            FROM 
                trabajadores as t
            WHERE
            t.activo = '1'AND t.id_puesto != 83 AND t.id_puesto != 86 AND t.id_puesto != 87
            GROUP BY
            t.id_trabajador";
                              $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
}
else if ($s_idUsuario >= 67)
{
     mysqli_set_charset($conexion, 'utf8');
    $consulta="SELECT t.id_trabajador, t.num_empleado, CONCAT(p.nombre,' ',p.ap_paterno, ' ', p.ap_materno), d.nom_departamento,  pu.nom_puesto, s.nombre
FROM
trabajadores AS t
INNER JOIN personas AS p
ON t.id_persona = p.id_persona
INNER JOIN sucursales AS s
ON s.id_sucursal = t.id_sucursal
INNER JOIN departamentos AS d
ON d.id_departamento = t.id_departamento
INNER JOIN puestos AS pu
ON pu.id_puesto = t.id_puesto
WHERE t.activo = 1 AND t.id_sucursal = '$s_IdSucursal'";
                              $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
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

<table style="width: 95%" cellpadding="0" cellspacing="0">
    <col style="width: 5%" class="col1">
    <col style="width: 25%" >
    <col style="width: 25%">
    <col style="width: 25%">
    <col style="width: 20%">

    <tr>
        <td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
        <td colspan="9" border=0 align="center">
            <label class="grande">
                <b>Reporte de Trabajadores </b>
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
    <col style="width: 5%">  <!-- id -->
    <col style="width: 10%" > <!-- no empleado-->
    <col style="width: 25%">  <!-- nombre trabajador -->
    <col style="width: 20%">  <!-- dpto -->
    <col style="width: 20%" > <!-- puesto -->
    <col style="width: 20%">  <!-- fecha de registro -->
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
                <b>N° de Empleado</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Nombre Completo</b>
            </label>
        </td>  
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Departamento</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Puesto</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Extensión/Área</b>
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
                <b><?php echo "$row[2]";?></b>
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