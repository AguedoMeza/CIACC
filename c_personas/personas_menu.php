<?php 
include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_Name = $_SESSION["s_Persona"];
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
   <!--  <link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css"> -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../plugins/select2-3.5.4/select2.css">
    <link rel="stylesheet" href="../plugins/reportes_datatables/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../plugins/reportes_datatables/jquery.dataTables.min.css">

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
        </div> <br>
           <section id="altapersonas">
			     <div class="col-lg-12">
			       <form id="frmNuevoPersonas" method="post" class="form-vertical" action="">
			            <div class="panel panel-primary">
                                    <div class="panel-heading titulo">
                                       ALTA DE PERSONAS
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="nombre" class="lbl">Nombre :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="nombre" autofocus placeholder="Coloca el nombre" name="nombre" required>
                                                    </div>
                                                </div>               
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">       
                                                <div class="form-group">
                                                    <label class="lbl" for="paterno">Apellido Paterno :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="paterno" placeholder="Coloca el primer apellido" name="paterno" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"> 
                                                <div class="form-group">
                                                    <label class="lbl" for="materno">Apellido Materno :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="materno" placeholder="Coloca el segundo apellido" name="materno" required>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="row">  
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                              <div class="form-group">
                                                <label class="lbl">Estado Civil:</label>
                                                <select name="ecivil" class="form-control" style="width: 100%;" id="ecivil">
                                                  <option required selected="selected" value="Soltero(a)">Soltero(a)</option>  
                                                  <option value="Casado(a)">Casado(a)</option>
                                                  <option value="Viudo(a)">Viudo(a)</option>
                                                  <option value="Divorciado(a)">Divorciado(a)</option>
                                                  <option value="Union Libre">Union Libre</option>
                                                  <option value="No especificado">No especificado</option>
                                                </select>
                                              </div><!-- /.form-group -->              
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="form-group">    
                                                    <label class="lbl" for="telefono">Telefono :</label>
                                                    <div class="error">
                                                    <input type="number" class="form-control"  id="telefono" placeholder="Casa o Celular" name="telefono" required>
                                                    </div>
                                                </div>               
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <div class="error">
                                                    <label class="lbl" for="correo">Email :</label>
                                                    <input type="email" class="form-control" id="correo" placeholder="Correo" name="correo" required>
                                                    </div>
                                                </div>               
                                            </div>
                                        </div>  
                                     <div class="row">
                                              <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                                <div class="form-group">    
                                                    <label class="lbl" for="colonia">Colonia :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="colonia" placeholder="Colonia" name="colonia" required>
                                                    </div>
                                                </div>               
                                            </div>
                                              <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                                <div class="form-group">    
                                                    <label class="lbl" for="calle">Calle :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="calle" placeholder="Calle" name="calle" required>
                                                    </div>
                                                </div>               
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
                                                <div class="form-group">    
                                                    <label class="lbl" for="numero">Numero :</label>
                                                    <div class="error">
                                                    <input class="form-control caja" min="0" id="numero" placeholder="Numero" name="numero" required>
                                                    </div>
                                                </div>               
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <label  for="estado">Estado :</label>
                                                <select required onchange="seleccionado(this.value);" class="form-control" id="estado">
                                               <option>Selecciona el estado</option>
                                                <?php
                                              mysqli_set_charset($conexion, 'utf8');
                                              $consulta= "SELECT id_estado, estado
                                                    FROM estados
                                                    " ;

                                                  $qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());
                                                   while ($row=mysqli_fetch_row($qry))
                                                    {
                                                       echo "<option value=\"$row[0]\">$row[1]</option>";
                                                    }

                                                 
                                                ?>
                                               </select>
                                                </div>               
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                              <div class="form-group">
                                                <label for="municipio">Municipio :</label>
                                                 <select id="new_select" class="selectpicker form-control"></select>
                                              </div>            
                                            </div>
                                        </div>

                                     
                                <br>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <input type="submit" value="Guardar" class="btn btn-primary pull-right btn-block">
                            </div>
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                             <input type="submit" value="Cancelar" onclick="iniciarPersonas();" class="btn btn-warning pull-right btn-block">
                           </div>
                            </div>
                          </div><br><br>
			        </form>    
			    </div>
			</section>



			<section id="listapersonas">
				<?php include("personas_listado.php") ?>
			</section>
    </div>
</div>

		 <?php include("personas_modal.php") ?>	
		</div>
	</body>
</html>
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
<script src="../js/acomodo.js"></script>

<script type="text/javascript">

$(document).ready(function() {
    $("#personas").addClass("active-menu"); 
    $('#tablaPersonas').DataTable( {
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
         "language": idioma_español
    } );
} );

</script>
<!-- <script>$(document).ready(function() {
    $('#tablaPersonas').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf'
        ]
    } );
} );</script> -->
<script>
$(document).ready(function() {
$('#estado').select2();
$('#new_select').select2();
$('#ecivil').select2();
} );
</script>
<script src="../js/obtener_municipio.js"></script>
<script src="../js/alta.js"></script>
<script src="../js/iniciar.js"></script>
<script src="../js/refrescar.js"></script>
<script src="../js/status.js"></script>
<script src="../js/reportes.js"></script>
<script src="../plugins/alertifyjs/alertify.js"></script>
<script src="../plugins/sweetalert2-master/dist/sweetalert2.js"></script>
<!-- <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script> -->

</body>
</html>
