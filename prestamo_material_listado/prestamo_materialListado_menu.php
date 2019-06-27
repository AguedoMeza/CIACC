<?php 
include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_Name = $_SESSION["s_Persona"];
$s_IdSucursal = $_SESSION["s_IdSucursal"];
$s_IdArea = $_SESSION["s_IdArea"];
date_default_timezone_set('America/Monterrey');
$fecha = date("Y-m-d"); 
$dia =  date("d"); 
$numero_dia = date('N', strtotime($dia)); 
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="../plugins/sweetalert2-master/dist/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
    <link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
    <!-- <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css"> -->
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="../barcode.css">     CSS PARA CÓDIGO DE BARRAS -->
   <!--  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
     crossorigin="anonymous"></script> -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="../plugins/pace/themes/pace-theme-minimal.css">
 	<link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
	<link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../plugins/select2-3.5.4/select2.css">
       <link rel="stylesheet" href="../plugins/reportes_datatables/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../plugins/reportes_datatables/jquery.dataTables.min.css">


   <meta charset="utf-8" />
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Listado-Prestamo-Material</title>

</head>

<body>
    <div id="wrapper">
           <!-- /. NAV TOP  -->
    <?php include("../menu/menu.php"); ?>
        <!-- /. NAV SIDE  -->

<div id="page-wrapper" >
   <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2a" >LISTADO PRESTAMOS DE MATERIAL <div style="font-size: 20px;" class="pull-right">Bienvenido(a): <?php echo$s_Name;?></div></h2>  
            </div>
        </div>
        <?php if ($s_idUsuario < 67) 
        { ?>
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label class="lbl" for="asucursal">Extensión:</label>
                                <select  class="form-control" id="asucursal" onchange="llenarListaPrestamos();">
                                  <option>Seleccione Extensión</option>
                                                                                                       <?php
                                                if ($s_idUsuario == 62 || $s_idUsuario == 63 || $s_idUsuario == 64) 
                                                  {
                                                              mysqli_set_charset($conexion, 'utf8');
                                                             $consulta11= "SELECT id_sucursal, nombre
                                                                  FROM sucursales WHERE activo = 1 AND area = '$s_IdArea'";
                                                             $qry11=mysqli_query($conexion,$consulta11) or die (mysqli_connect_error());
                                                  }

                                                  if ($s_idUsuario == 65 || $s_idUsuario == 66 || $s_idUsuario == 1 || $s_idUsuario == 61 )
                                                  {
                                                                         mysqli_set_charset($conexion, 'utf8');
                                                                    $consulta11= "SELECT id_sucursal, nombre
                                                                        FROM sucursales WHERE activo = 1";
                                                                   $qry11=mysqli_query($conexion,$consulta11) or die (mysqli_connect_error());
                                                  }
                                                  else if ($s_idUsuario >= 67)
                                                  {
                                                                  mysqli_set_charset($conexion, 'utf8');
                                                              $consulta11= "SELECT id_sucursal, nombre
                                                                  FROM sucursales WHERE activo = 1 AND id_sucursal = '$s_IdSucursal'";
                                                             $qry11=mysqli_query($conexion,$consulta11) or die (mysqli_connect_error()); # code
                                                  }

                                                   while ($row11=mysqli_fetch_row($qry11))
                                                    {
                                                       echo "<option value=\"$row11[0]\">$row11[1]</option>";
                                                    }
                                                // }

                                                // else 
                                                // {
                                                //   $consulta= "SELECT id_sucursal, nombre
                                                //     FROM sucursales WHERE activo = 1 AND id_sucursal = '$s_IdSucursal'
                                                //     ";

                                                //   $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                //    while ($row=mysqli_fetch_row($qry))
                                                //     {
                                                //        echo "<option value=\"$row[0]\">$row[1]</option>";
                                                //     }
                                                // }
                                                ?>                                        
                                               </select>
                                       </div>
                         </div>
        <?php }  ?>
 
        <section id="listaordenesvisualizar">
          <?php include("prestamo_materialListado_ListaPrestamos.php") ?>
         </section><br><br> 
         <div id="titulov" hidden> <h2 style="color: Black;">DETALLES PRESTAMO DE MATERIAL </h2> </div>
        
          <?php 
 include("../configuracion/conexion.php"); 
include("../global_seguridad/verificar_sesion.php");
$s_IdSucursal = $_SESSION["s_IdSucursal"];  
if ($s_idUsuario >= 67) 
{
        $qry0 = "SELECT p.vista FROM prestamo_material AS p WHERE p.vista != 0 AND id_sucursal = '$s_IdSucursal'";
      $consulta0 = mysqli_query($conexion,$qry0) or die  (mysqli_connect_errno());                   
      $row0 = mysqli_fetch_array($consulta0);
      $num = mysqli_num_rows($consulta0);  
      if ($num >= 1) 
      {
        echo "<section id='listaprevia'>";
        include("prestamo_materialListado_detalles.php");
        echo "</section>";
      }
      else
      {
        echo "<section id='listaprevia' hidden>";
        include("prestamo_materialListado_detalles.php");
        echo "</section>";
      }
}
else
{
       echo "<section id='listaprevia' hidden>";
       echo "</section>";
}
?> 

         <?php include("prestamo_materialListado_modal.php"); ?>

           <?php include("prestamo_materialListado_modalcancelacion.php"); ?>
    </div>
</div>

 <script src="../jquery-3.2.1.min.js"></script>
 <script src="../plugins/select2-3.5.4/select2.js"></script>
 <script src="../assets/js/bootstrap.min.js"></script>
 <script src="../assets/js/jquery.metisMenu.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../plugins/reportes_datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/reportes_datatables/dataTables.buttons.min.js"></script>
<script src="../plugins/reportes_datatables/jszip.min.js"></script>
<script src="../plugins/reportes_datatables/pdfmake.min.js"></script>
<script src="../plugins/reportes_datatables/vfs_fonts.js"></script>
<script src="../plugins/reportes_datatables/buttons.html5.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
    $("#prestamo_listado").addClass("active-menu"); 
    $('#tablaPrestamos').DataTable( {
        "language": {
           // "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            "url": "plugins/datatables/langauge/Spanish.json"
        },

        "order": [[ 0, "desc" ]],
       "paging":   true,
        "ordering": true,
        "info":     false,
        "searching": true,
         stateSave: true
    } );
} );

</script>
<script type="text/javascript">

$(document).ready(function() {

    $('#tablaInferior').DataTable( {
        "language": {
           // "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            "url": "plugins/datatables/langauge/Spanish.json"
        },

        "order": [[ 0, "desc" ]],
       "paging":   true,
        "ordering": true,
        "info":     false,
        "searching": true,
         stateSave: true
    } );
} );

</script>
<script src="../js/acomodo.js"></script>
<script src="../js/alta.js"></script>
<script src="../js/iniciar.js"></script>
<script src="../js/refrescar.js"></script>
<script src="../js/obtener_sucursales.js"></script>
<script src="../js/modal.js"></script>
<script src= "../js/reportes.js"></script>
<script src="../plugins/alertifyjs/alertify.js"></script>
<script src="../plugins/sweetalert2-master/dist/sweetalert2.js"></script>
</body>
</html>
