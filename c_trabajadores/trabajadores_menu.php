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
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
   <!--  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
     crossorigin="anonymous"></script> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../plugins/pace/themes/pace-theme-minimal.css">
 	<link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
	<link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../plugins/select2-3.5.4/select2.css">

   <meta charset="utf-8" />
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>CIACC</title>

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
                <h2 class="h2a" ><div style="font-size: 20px;" class="pull-right">Bienvenido(a): <?php echo$s_Name;?></div></h2>  
            </div>
        </div><br>
           <section id="altapuestos">
			     <div class="col-lg-12">
			       <form id="frmNuevoTrabajadores" method="post" class="form-vertical" action="">
			            <div class="panel panel-primary">
				                <div class="panel-heading titulo">
				                  ALTA DE TRABAJADORES
				                </div>

				            <div class="panel-body">
				                <div class="row">
				                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				                    <div class="form-group">
                                                    <label class="lbl" for="estado">Persona :</label>
                                                <select  class="form-control" id="nombre" required>
                                               <option>Seleccione la persona</option>
                                                
                                               </select>
                                     </div>          
				                   </div>
				                 
				                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group">
                                                    <label class="lbl" for="estado">Puesto :</label>
                                                <select  class="form-control" id="puesto" onchange="HabilitarNumeroEmpleado();">
                                           <!--     <option>Seleccione el puesto</option> -->
                                                <?php
                                                mysqli_set_charset($conexion, 'utf8');
                                              $consulta= "SELECT id_puesto, nom_puesto
                                                    FROM puestos WHERE activo = 1 ORDER BY nom_puesto ASC
                                                    ";

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    }

                                                 
                                                ?>
                                               </select>
                                     </div>       
                           </div>
				                 	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				                    <div class="form-group">
                                                    <label class="lbl" for="estado">Departamento :</label>
                                                <select  class="form-control" id="departamento" required>
                                              <!--  <option>Seleccione el departamento</option> -->
                                                <?php
                                                mysqli_set_charset($conexion, 'utf8');
                                              $consulta= "SELECT id_departamento, nom_departamento
                                                    FROM departamentos WHERE activo = 1 
                                                    ";

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    }

                                                 
                                                ?>
                                               </select>
                                     </div>          
				                   </div>
				                   </div>	
				                  <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                                    <label class="lbl" for="nada">Extensión :</label>
                                                <select  class="form-control" id="sucursal">
                                           <!--     <option>Seleccione el puesto</option> -->
                                                <?php
                                                if ($s_idUsuario == 62 || $s_idUsuario == 63 || $s_idUsuario == 64) 
                                                  {
                                                              mysqli_set_charset($conexion, 'utf8');
                                                             $consulta= "SELECT id_sucursal, nombre
                                                                  FROM sucursales WHERE activo = 1 AND area = '$s_IdArea'";
                                                             $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                  }

                                                  if ($s_idUsuario == 65 || $s_idUsuario == 66 || $s_idUsuario == 1 || $s_idUsuario == 61 )
                                                  {
                                                                         mysqli_set_charset($conexion, 'utf8');
                                                                    $consulta= "SELECT id_sucursal, nombre
                                                                        FROM sucursales WHERE activo = 1";
                                                                   $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                  }
                                                  else if ($s_idUsuario >= 67)
                                                  {
                                                                  mysqli_set_charset($conexion, 'utf8');
                                                              $consulta= "SELECT id_sucursal, nombre
                                                                  FROM sucursales WHERE activo = 1 AND id_sucursal = '$s_IdSucursal'";
                                                             $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error()); # code
                                                  }

                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    }
                                                // }

                                                // else 
                                                // {
                                                // 	 $consulta= "SELECT id_sucursal, nombre
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
				                   <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				                    <div class="form-group">
                                                  <label class="lbl" for="fechaing">Fecha de Ingreso:</label>
                                                  <div class="error">
                                                  <input type="date" class="form-control" id="fechaing" required name="fechaing" value="<?php echo $fecha;?>"  min="<?php echo $fecha;?>">
                                                  </div>
                                            </div>   
				                   </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="nombre" class="lbl">Número Empleado:</label>
                                   <div class="error">
                                       <input type="number" class="form-control" id="noempleado" autofocus placeholder="Número de Empleado" name="noempleado" min="0" required>
                                    </div>
                            </div>  
                             </div>
                           <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" id="areas" hidden>
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Área:</label>
                                                <div class="error">
                                                    <select class="form-control" name="area" id="area">
                                                    <option value="1">Área #1</option>
                                                    <option value="2">Área #2</option>
                                                    <option value="3">Área #3</option>
                                                    </select>
                                                </div>
                                       </div>
                            </div>
				                
				                
				                   
				            
			   							<br>
			   				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				            	<input type="submit" value="Guardar" class="btn btn-primary pull-right btn-block" >
				            </div>
				           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				          	 <input value="Cancelar" onclick="iniciarTrabajadores();" class="btn btn-warning pull-right btn-block">
				           </div>
			       	    </div>
			        </form>    
			    </div>
			</section>



			<section id="listatrabajadores">
				<?php include("../c_trabajadores/trabajadores_listado.php") ?>
			</section>
    </div>
</div>
        <?php include("trabajadores_modal.php") ?>
			
		</div>
	</body>
</html>

<script src="../jquery-3.2.1.min.js"></script>
<script src="../plugins/select2-3.5.4/select2.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.metisMenu.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../js/acomodo.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $("#trabajadores").addClass("active-menu"); 
    $('#tablaPuestos').DataTable( {
        "language": {
           // "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            "url": "plugins/datatables/langauge/Spanish.json"
        },
        "order": [[ 0, "desc" ]],
       "paging":   true,
        "ordering": true,
        "info":     false,
        "searching": true,
         stateSave: true,
         responsive: true,
         "language": idioma_español
    } );
} );

</script>
<script>
$(document).ready(function() {
$('#departamento').select2();
$('#puesto').select2();
$('#sucursal').select2();
} );
</script>
<script src="../js/obtener_municipio.js"></script>
<script src="../js/obtener_personas.js"></script>
<script src="../js/alta.js"></script>
<script src="../js/iniciar.js"></script>
<script src="../js/refrescar.js"></script>
<script src="../js/status.js"></script>
<script src="../js/reportes.js"></script>
<script src="../plugins/alertifyjs/alertify.js"></script>
<script src="../plugins/sweetalert2-master/dist/sweetalert2.js"></script>
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
</body>
</html>
