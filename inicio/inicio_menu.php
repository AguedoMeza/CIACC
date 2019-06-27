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
<html xmlns="http://www.w3.org/1999/xhtml">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
 <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.css"> -->
  <link rel="stylesheet" type="text/css" href="../plugins/sweetalert2-master/dist/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
    <link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!--  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->
<!--     <link href="../assets/css/bootstrap.css" rel="stylesheet" /> -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
   <!--  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
     crossorigin="anonymous"></script> -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../plugins/pace/themes/pace-theme-minimal.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/default.css"> -->
   <!--  <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
  <link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css"> -->

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
                </div><br><br>
<!-- style="position: relative;  right: 320px;" -->
               <!--  <span id="liveclock"></span><br> -->
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 450px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #530a6b;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 4s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 4s;
  animation-name: fade;
  animation-duration: 4s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container" style="border-color: yellow; border: 5px;">

  <div class="mySlides fade">
  <div class="numbertext" style="color: black; font-family: Impact; font-size: 15px;">1 / 6</div>
  <img src="../images/bannerciacc.png" style="width:1000px; height: 500px;">
</div>

<div class="mySlides fade">
  <div class="numbertext" style="color: black; font-family: Impact; font-size: 15px;">2 / 6</div>
  <img src="../images/Logo_EstadarteG.png" style="width:1000px; height: 500px;">
</div>

<div class="mySlides fade">
  <div class="numbertext" style="color: black; font-family: Impact; font-size: 15px;">3 / 6</div>
  <img src="../images/cclinares.jpg" style="width:1000px; height: 500px;">
</div>

<div class="mySlides fade">
  <div class="numbertext" style="color: black; font-family: Impact; font-size: 15px;">4 / 6</div>
  <img src="../images/nuevoleon.jpg"  style="width:1000px; height: 500px;">
</div>

<div class="mySlides fade">
  <div class="numbertext" style="color: black; font-family: Impact; font-size: 15px;">5 / 6</div>
  <img src="../images/nl.jpg"  style="width:1000px; height: 500px;">
</div>

<div class="mySlides fade">
  <div class="numbertext" style="color: black; font-family: Impact; font-size: 15px;">6 / 6</div>
  <img src="../images/sds_logo.png"  style="width:1000px; height: 500px;">
<!--   <div class="text" style="color: #530a6b; font-family: Impact;"><b>GOBIERNO DE NUEVO LEON</b></div> -->
</div>

</div>
<br>
<script src="../jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
 $("#inicio").addClass("active-menu"); 
} );

</script>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
<script src="../plugins/alertifyjs/alertify.js"></script>
<script src="../plugins/sweetalert2-master/dist/sweetalert2.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.metisMenu.js"></script>
<script src="../assets/js/custom.js"></script>


 