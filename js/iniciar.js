function iniciarPuestos()
{
    document.getElementById("frmNuevoPuestos").reset();
    document.getElementById('nombre').focus();
}

function iniciarUsuarios()
{
    document.getElementById("frmNuevoUsuarios").reset();
    document.getElementById('nombreusuario').focus();
}

function iniciarUsuariosModal1()
{
    document.getElementById("frmContraUsuarios").reset();
    document.getElementById('contrasena1').focus();
}

function iniciarModalAgregar()
{
    document.getElementById("frmAgregarProductos").reset();
    document.getElementById('ccantidad').focus();
}

function iniciarVerifBarCode()
{
    document.getElementById("frmBarcode").reset();
    document.getElementById('abarcode_num').focus();
}


function iniciarNuevaContra()  // CHECAR
{
    document.getElementById("frmNuevoPuestos").reset();
    document.getElementById('nombre').focus();
}

function iniciarPersonas()
{
    document.getElementById("frmNuevoPersonas").reset();
    document.getElementById('nombre').focus();
}

function iniciarDepartamentos()
{
    document.getElementById("frmNuevoDepartamentos").reset();
    document.getElementById('nombre').focus();
}

function iniciarTrabajadores()
{
    document.getElementById("frmNuevoTrabajadores").reset();
    document.getElementById('noempleado').focus();
}


function iniciarSucursales()
{
    document.getElementById("frmNuevoSucursales").reset();
    document.getElementById('sucursal').focus();
}


function iniciarTipoProducto()
{
    document.getElementById("frmNuevoTipoProducto").reset();
    document.getElementById('nombre').focus();

}

function iniciarProductos()
{
    document.getElementById("frmNuevoProductos").reset();
    document.getElementById('nombre').focus();   
}

function foco()
{
    document.getElementById('cantidad').focus();
}
function iniciarTalleres()
{
    document.getElementById("frmNuevoTalleres").reset();
    document.getElementById('nombre').focus();
}

function iniciarInventarios()
{
    document.getElementById("frmNuevoInventarios").reset();
    document.getElementById('cantidad').focus();
}


function iniciarUnidades()
{
    document.getElementById("frmNuevoUnidades").reset();
    document.getElementById('eunidad').focus();
}

function iniciarInventarioFijo()
{
    document.getElementById("frmNuevoInventarioFijo").reset();
    document.getElementById('qr').focus();
}

function iniciarTipoUsuario()
{   
    var speed='slow';
    document.getElementById("frmNuevoTipoUsuarios").reset();
    document.getElementById('nombre').focus();
    $('#permisos').slideUp(speed);    
  
}

function iniciarModalCancelacion()
{
  $("#contenedorp").empty();
}

function IniciarSolicitudMaterial()
{
    document.getElementById("frmNuevoSolicitudMaterial").reset();
    document.getElementById('producto').focus();
}

function IniciarOrdenSalida()
{
    document.getElementById("frmNuevoOrdenSalida").reset();
    $('#defijo').hide();
    $('#dealmacen').show();   
    document.getElementById('cantidad').focus();

}