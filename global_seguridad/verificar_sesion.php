<?php
session_name("login_supsys"); 
@session_start();
// $s_idUsuario = $_SESSION["s_IdUser"];
// $s_idpass = $_SESSION["s_IdPass"]; 
if ($_SESSION["autentificado"] != "SI") 
{ 
    echo"<script language=\"javascript\">window.location=\"../index.php\"</script>";
} 
// else 
// { 
// 	//se manda llamar la conexion
// 	include "datos_usuario_acceso.php";

//    if ($acceso_modulo != 1) {
//    		echo"<script language=\"javascript\">window.location=\"../inicio/index.php\"</script>";
//    }
// }
?>