<head>
	<link href="../assets/css/bootstrap.css" rel="stylesheet" />
 	<link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/chkbox.css">
</head>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar Sucursal</h4></center>
                </div>
                <div class="modal-body">
 <form id="frmNuevoSucursales" method="post" class="form-vertical" action="">
                        <div class="panel panel-green">
 
                            <div class="panel-body">
                                 <input  style="display:none" name="id_tipo_usuario" id="id_tipo_usuario" value="">
                            <div class="row">
                                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="nombre" class="lbl">Nombre:</label>
                                                <div class="error">
                                                    <input class="form-control" id="enombre" autofocus placeholder="Nombre del Tipo Usuario" name="sucursal" required>
                                                </div>
                                            </div>
                                        </div>
                                   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="abreviatura" class="lbl">Descripción:</label>
                                                <div class="error">
                                                    <input class="form-control" id="edescripcion"   placeholder="Descripción Breve" name="direccion" required >
                                                </div>
                                       </div>
                                    </div>
                            </div>
                            <div class="row" id="permisos">
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                     <div class="form-check">
                                      <label class="container">Personas
                                        <input type="checkbox" id="epersonas" value="1">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                     <div class="form-check">
                                          <label class="container">Usuarios
                                        <input type="checkbox" id="eusuarios">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                     <div class="form-check">
                                       <label class="container">Tipo Usuarios
                                        <input type="checkbox" id="etipo_usuarios">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                     <div class="form-check">
                                          <label class="container">Trabajadores
                                        <input type="checkbox" id="etrabajadores">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                     <div class="form-check">
                                           <label class="container">Puestos
                                        <input type="checkbox" id="epuestos">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-check">
                                           <label class="container">Talleres
                                        <input type="checkbox" id="etalleres">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                     <div class="form-check">
                                           <label class="container">Departamentos
                                        <input type="checkbox" id="edepartamentos">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                     <div class="form-check">
                                           <label class="container">Sucursales
                                        <input type="checkbox" id="eesucursales">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                     <div class="form-check">
                                           <label class="container">Productos
                                        <input type="checkbox" id="eeproductos">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                     <div class="form-check">
                                           <label class="container">Tipo Productos
                                        <input type="checkbox" id="eetipo_productos">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-check">
                                           <label class="container">Prestamo Material
                                        <input type="checkbox" id="eprestamo_material">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                     <div class="form-check">
                                          <label class="container">Lista Prestamo Material
                                        <input type="checkbox" id="elista_prestamos">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                     <div class="form-check">
                                           <label class="container">Solicitud Material
                                        <input type="checkbox" id="esolicitud_material">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                    <div class="form-check">
                                           <label class="container">Lista Solicutud Material
                                        <input type="checkbox" id="elista_solicitudes">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                    <div class="form-check">
                                           <label class="container">Orden de Salida
                                        <input type="checkbox" id="eorden_salida">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                 </div>
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-check">
                                           <label class="container">Lista Orden Salida
                                        <input type="checkbox" id="elista_orden">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                     <div class="form-check">
                                           <label class="container">Inventario Almacén
                                        <input type="checkbox" id="einventario_almacen">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                     <div class="form-check">
                                           <label class="container">Inventario Fijo
                                        <input type="checkbox" id="einventario_fijo">
                                        <span class="checkmark"></span>
                                      </label>
                                    </div>
                                 </div>
                            </div>
                            </div>
                                        
                        </div> 
                    </form>    
               </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a class="btn btn-primary" id="guardar" onclick="javascript:UpdateSucursales();">Actualizar</a>
                </div>
          </div>
    </div>
 </div>

     <script src="../jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../js/modal.js"></script>
   
<!-- /.modal -->