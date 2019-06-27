<?php 
include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];
$s_Name = $_SESSION["s_Persona"];
$s_APersona = $_SESSION["s_APersona"];
$s_AUsuarios = $_SESSION["s_AUsuarios"];
$s_AUsuariosTipo = $_SESSION["s_AUsuariosTipo"];
$s_ATrabajadores = $_SESSION["s_ATrabajadores"];
$s_APuestos = $_SESSION["s_APuestos"];
$s_ADepartamentos = $_SESSION["s_ADepartamentos"];
$s_ATalleres = $_SESSION["s_ATalleres"];
$s_AScurusales = $_SESSION["s_AScurusales"];
$s_AProductos = $_SESSION["s_AProductos"];
$s_AProductosTipo = $_SESSION["s_AProductosTipo"];
$s_APrestamosMaterial = $_SESSION["s_APrestamosMaterial"];
$s_AListadoPrestamos = $_SESSION["s_AListadoPrestamos"];
$s_ASolicitudMaterial = $_SESSION["s_ASolicitudMaterial"];
$s_AListadoSolicutudes = $_SESSION["s_AListadoSolicutudes"];
$s_AOrdenSalida = $_SESSION["s_AOrdenSalida"];
$S_AListadoSalidas = $_SESSION["S_AListadoSalidas"];
$s_AInventarioAlmacen = $_SESSION["s_AInventarioAlmacen"];
$s_AInventarioFijo = $_SESSION["s_AInventarioFijo"];
date_default_timezone_set('America/Monterrey');
$fecha = date("Y-m-d"); 
$dia =  date("d"); 
$numero_dia = date('N', strtotime($dia)); 
?>
<!DOCTYPE html>
<html>
<body>
      <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Navegar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../inicio.php" style="font-size: 25px;">Inventario & Prestamo Material</a> 
            </div>
 
          <div  style="color: white; padding: 15px 50px 5px 50px; float: left; font-size: 25px;">CENTRO COMUNITARIO DE DESARROLLO SOCIAL</div>
          <div style="float: right; padding: 15px 50px 5px 50px;"><a href="../login/cerrarsesion.php" class="btn btn-danger square-btn-adjust" style="background-color: #530a6b">Salir</a> </div>
       </nav>   
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
              <li class="text-center">
                    <img src="../assets/img/ciaccicono.png" class="user-image img-responsive"/>
                  </li>
            
                    <li>
                        <a id="inicio" href="../inicio/inicio_menu.php"><i class="fa fa-home fa-3x"></i> Inicio</a>
                    </li>

                    <?php if ($s_APersona == "1" OR $s_AUsuarios == "1" OR $s_ATrabajadores == "1" OR $s_APuestos == "1" OR $s_ATalleres == "1" OR $s_ADepartamentos == "1" OR $s_AScurusales == "1" )
                    { ?>
                        <li>
                       <a id="administracion" href=""><i class="fa fa-info-circle fa-3x"></i> Administración<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             <?php if ($s_APersona == "1")
                             { ?>
                                <li>
                                   <a id="personas"  href="../c_personas/personas_menu.php"><i class="fa fa-male fa-3x"></i> Personas</a>
                                </li>
                             <?php } ?>
                             <?php if ($s_ATrabajadores == "1")
                             { ?>
                                <li>
                                     <a id="trabajadores" href="../c_trabajadores/trabajadores_menu.php"><i class="fa fa-wrench fa-3x"></i> Trabajadores</a>
                                </li>
                             <?php } ?>
                             <?php if ($s_AUsuariosTipo == "1")
                             { ?>
                                <li>
                                     <a id="usuarios_tipo" href="../c_usuarios_tipo/usuarios_tipo_menu.php"><i class="fa fa-users fa-3x"></i> Tipo Usuarios</a>
                                </li>
                             <?php } ?>
                             <?php if ($s_AUsuarios == "1")
                             { ?>
                                <li>
                                    <a id="usuarios"  href="../c_usuarios/usuarios_menu.php"><i class="fa fa-user fa-3x"></i> Usuarios</a>
                                </li>
                             <?php } ?>
                             <?php if ($s_APuestos == "1")
                             { ?>
                                <li>
                                   <a id="puestos" href="../c_puestos/puestos_menu.php"><i class="fa fa-briefcase fa-3x"></i> Puestos</a>
                                </li>
                             <?php } ?>
                             <?php if ($s_ATalleres == "1")
                             { ?>
                                <li>
                                    <a id="talleres" href="../c_talleres/talleres_menu.php"><i class="fa fa-gears fa-3x"></i> Talleres</a>
                                </li>
                             <?php } ?>
                             <?php if ($s_ADepartamentos == "1")
                             { ?>
                                <li>
                                   <a id="departamentos" href="../c_departamentos/departamentos_menu.php"><i class="fa fa-building-o fa-3x"></i> Departamentos</a>
                                </li>
                             <?php } ?>
                             <?php if ($s_AScurusales == "1")
                             { ?>
                                <li>
                                    <a id="sucursales"  href="../c_sucursales/sucursales_menu.php" onclick="ClaseActive();"><i class="fa fa-map-marker fa-3x"></i> Extensiones</a>
                                </li>
                             <?php } ?>
                            </ul>
                    </li>
                    <?php } ?>

                        



                    <?php if ($s_AProductos == "1" OR $s_AProductosTipo == "1")
                    { ?>
                        <li>
                        <a  href=""><i class="fa fa-dropbox fa-3x"></i> Productos<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             <?php if ($s_AProductos == "1")
                             { ?>
                                <li>
                                    <a id="productos" href="../c_productos/productos_menu.php" onclick="ClaseActive();"><i class="fa fa-plus"></i>Productos</a>
                                </li>
                             <?php } ?>
                             <?php if ($s_AProductosTipo == "1")
                             { ?>
                                <li>
                                    <a id="productos_tipo" href="../c_productos_tipo/productos_tipo_menu.php"  onclick="ClaseActive();"><i class="fa fa-edit"></i>Tipo Productos</a>
                                </li>
                              <?php } ?>
                            </ul>
                    </li>
                    <?php } ?>

                   <?php if ($s_APrestamosMaterial == "1" OR $s_AListadoPrestamos == "1")
                    { ?>
                        <li>
                        <a  href=""><i class="fa fa-wrench fa-3x"></i> Prestamo Material<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             <?php if ($s_APrestamosMaterial == "1")
                             { ?>
                                <li>
                                    <a id="prestamo" href="../prestamo_material/prestamo_material_menu.php"><i class="fa fa-file-text-o"></i>Nuevo Prestamo</a>
                                </li>
                             <?php } ?>
                             <?php if ($s_AListadoPrestamos == "1")
                             { ?>
                                <li>
                                    <a id="prestamo_listado" href="../prestamo_material_listado/prestamo_materialListado_menu.php"><i class="fa fa-clipboard"></i>Listado Prestamos</a>
                                </li>
                              <?php } ?>
                            </ul>
                    </li>
                    <?php } ?>


                   <?php if ($s_ASolicitudMaterial == "1" OR $s_AListadoSolicutudes == "1")
                    { ?>
                        <li>
                          <a  href=""><i class="fa fa-truck fa-3x"></i> Solicitud Material<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             <?php if ($s_ASolicitudMaterial == "1")
                             { ?>
                                <li>
                                     <a id="solicitud" href="../solicitud_material/solicitud_material_menu.php"><i class="fa fa-file-text-o"></i>Nueva Solicitud</a>
                                </li>
                             <?php } ?>
                             <?php if ($s_AListadoSolicutudes == "1")
                             { ?>
                                <li>
                                     <a  id="solicitud_listado" href="../solicitud_material_listado/solicitud_materialListado_menu.php"><i class="fa fa-clipboard"></i>Listado Solicitudes</a>
                                </li>
                              <?php } ?>
                            </ul>
                    </li>
                    <?php } ?>

                    <?php if ($s_AOrdenSalida == "1" OR $S_AListadoSalidas == "1")
                    { ?>
                        <li>
                       <a  href=""><i class="fa  fa-file-text-o fa-3x"></i> Orden de Salida<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             <?php if ($s_AOrdenSalida == "1")
                             { ?>
                                <li>
                                    <a id="orden" href="../orden_salida/orden_salida_menu.php"><i class="fa fa-file-text-o"></i>Nueva Salida</a>
                                </li>
                             <?php } ?>
                             <?php if ($S_AListadoSalidas == "1")
                             { ?>
                                <li>
                                      <a id="orden_listado" href="../orden_salida_listado/orden_salidalistado_menu.php"><i class="fa fa-clipboard"></i>Listado Salidas</a> 
                                </li>
                              <?php } ?>
                            </ul>
                    </li>
                    <?php } ?>

                    <?php if ($s_AInventarioFijo == "1" OR $s_AInventarioAlmacen == "1")
                    { ?>
                        <li id="inventario">
                         <a  href=""><i  class="fa fa-clipboard fa-3x"></i>Inventario<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             <?php if ($s_AInventarioAlmacen == "1")
                             { ?>
                                <li>
                                     <a id="inventarioa" href="../inventario/inventario_menu.php"><i class="fa fa-file-text-o"></i>Almacén</a>
                                </li>
                             <?php } ?>
                             <?php if ($s_AInventarioFijo == "1")
                             { ?>
                                <li>
                                   <a id="inventariof" href="../inventario_fijo/inventario_fijo_menu.php"><i class="fa fa-clipboard"></i>Fijo</a> 
                                </li>
                              <?php } ?>
                            </ul>
                    </li>
                    <?php } ?>

        </ul>
            </div>
        </nav>  
</body>
</html>