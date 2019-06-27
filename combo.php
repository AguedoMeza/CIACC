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
<div class="panel-body">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
<div class="form-group">
<input type="button" id="create" value="Create Barcode" />
<br /><br />
<div id="barcode"></div>
<div id="barcode_num"></div>
<script>
	$(document).ready(function(){    
        
    //var line = $('#barcode .bc_line').length;
    $('#create').click(function(){
        $('#barcode').html('');
        $('#barcode_num').html('');
        createBarCode();
    });
});

function createBarCode(){
    var no_lines = 20;
    for(var i=0; i<no_lines; i++){
        $('#barcode').append('<span class="bc_line"></span>');       
    }
    
    for(var i=0; i<no_lines; i++){
        var number = 1 + Math.floor(Math.random() * 10);
        $('#barcode .bc_line').eq(i).css('width',number+'px');
        var space = 1 + Math.floor(Math.random() * 6);
        $('#barcode .bc_line').eq(i).css('margin-right',space+'px');
        if(i<10)
            $('#barcode_num').append(number);
    }    
    $('#barcode_num').css('width',$('#barcode').width());
}
</script>
</div>
</div>
</div>
</div>
</body>

</html>