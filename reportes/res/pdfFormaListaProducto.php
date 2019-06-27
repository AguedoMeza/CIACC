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
 mysql_query("SET NAMES utf8");
$consulta="SELECT 
p.id_producto,
p.codigo_barras,
p.nombre,
p.descripcion_producto,
(SELECT nombre FROM productos_tipo as pt where pt.id_tipo_producto=p.id_tipo_producto) as TipoProducto,
p.cantidad_ultima_agregada,
p.precio_compra,
p.precio_venta,
(select nombre from proveedores as pro where pro.id_proveedor=p.id_proveedor)as Proveedor
from productos as p
WHERE 
p.activo= '1'
GROUP BY
p.id_producto";
$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());

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
    <col style="width: 5%">  <!-- id -->
    <col style="width: 15%" > <!-- codigo de barras  -->
    <col style="width: 20%">  <!-- nombre -->
    <col style="width: 20%" >  <!-- direccion -->
    <col style="width: 20%" >  <!-- direccion -->
    <col style="width: 10%" >  <!-- precio compra -->
    <col style="width: 10%" >  <!-- precio compra -->
    <tr>
        <td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
        <td colspan="9" border=0 align="center">
            <label class="grande">
                <b>Reporte de Productos </b>
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
<table  style="width: 95%" cellpadding="0" cellspacing="0">
    <col style="width: 5%">  <!-- id -->
    <col style="width: 15%" > <!-- codigo de barras  -->
    <col style="width: 20%">  <!-- nombre -->
    <col style="width: 20%" >  <!-- direccion -->
    <col style="width: 20%" >  <!-- direccion -->
    <col style="width: 15%" >  <!-- precio compra -->
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
                <b>Código de Barras</b>
            </label>
        </td>
         <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Nombre</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Tipo Producto</b>
            </label>
        </td>  
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Proveedor</b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Precio Compra</b>
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
                <b><?php echo "$row[4]";?></b>
            </label>
        </td>
         <td colspan="1" align="center" border=1>
            <label class="grande">
                <b><?php echo "$row[8]";?></b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b><?php echo "$row[6]";?></b>
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