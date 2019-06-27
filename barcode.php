<?php include("configuracion/conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="jquery-3.2.1.min.js"></script>
<script src="jquery-barcode.js"></script>
<link rel="stylesheet" href="barcode.css">
	<meta charset="UTF-8">
	<title>Barcode</title>
</head>
<body>
<hr/>
Enter text : <input type="text" id="txtbarcode" value="iminfo.in"/>
<br/><br/>
<div id="barcode"></div>
<hr/>
<a class="btn btn-info">Generate Barcode</a>
<script>
$(".btn").bind("click",function()
               {
                // var aleatorio = Math.round(Math.random()*1);
                // $("#barcode").barcode($aleatorio,"code39");
				$("#barcode").barcode($("#txtbarcode").val(),"code39");
               });
$(".btn").click();

		
		// alert("Número aleatorio entre 0 y 10:"+aleatorio);
		
		// $("barcode").barcode("12345670", "ean8");

</script>
</body>

</html>