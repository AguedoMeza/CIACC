<?php
if (PHP_SAPI == 'cli')
  die('Este reporte sólo se puede ejecutar desde un navegador Web');

/** Incluye PHPExcel */
// require_once dirname(__FILE__) . '../plugins/phpexcel/PHPExcel.php';
include("../../plugins/phpexcel/PHPExcel.php");
// Crear nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();

// Propiedades del documento
$objPHPExcel->getProperties()->setCreator("CIACC")
               ->setLastModifiedBy("Luis Aguirre")
               ->setTitle("Office 2010 XLSX Documento Informativo")
               ->setSubject("Office 2010 XLSX Documento Informativo")
               ->setDescription("Documento de informativo para Office 2010 XLSX, generado usando clases de PHP.")
               ->setKeywords("office 2010 openxml php")
               ->setCategory("Archivo con resultado de informacion");

$objPHPExcel->getActiveSheet()
    ->getPageSetup()
    ->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // ->setCenterHorizontally(true);
// $gdImage = imagecreatefromjpeg('images/cclinares.jpg'); // Add a drawing to the worksheetecho date('H:i:s') . " Add a drawing to the worksheet\n"; $objDrawing = new PHPExcel_Worksheet_MemoryDrawing(); $objDrawing->setName('Sample image');$objDrawing->setDescription('Sample image'); $objDrawing->setImageResource($gdImage); $objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG); $objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT); $objDrawing->setHeight(150); $objDrawing->setWorksheet($objPHPExcel->getActiveSheet()); $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
// // Combino las celdas desde A1 hasta E1
// Create new picture object
  $objDrawing = new PHPExcel_Worksheet_Drawing();
  $objDrawing->setPath('independencia.png');
 $objDrawing->setWidth(200); //set width, height 
 $objDrawing->setHeight(60); 
// Insert picture
  $objDrawing->setCoordinates('A1');

  $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

include("../../configuracion/conexion.php");
include("../../global_seguridad/verificar_sesion.php");
$s_IdSucursal = $_SESSION["s_IdSucursal"];
$sql0="SELECT s.nombre, s.direccion
FROM
sucursales AS s
WHERE s.id_sucursal = '$s_IdSucursal'";
  $query0=mysqli_query($conexion,$sql0);
  $row0 = mysqli_fetch_array($query0);
$sucursal = "Edificio: Centro Comunitario de Desarrollo Social ". $row0[0];
$direccions = "Sucursal: " . $row0[1];
$objPHPExcel->setActiveSheetIndex(0)
            // ->setCellValue('A1', 'REPORTE DE INVENTARIO FIJO')
            ->setCellValue('A4', 'QR')
            ->setCellValue('B4', 'CI')
            ->setCellValue('C4', 'Producto')
            ->setCellValue('D4', 'Modelo')
            ->setCellValue('E4', 'Serie')
            ->setCellValue('F4', 'Marca')
            ->setCellValue('G4', 'Condiciones')
            ->setCellValue('C1', 'REPORTE INVENTARIO FIJO')
            ->setCellValue('C2', $sucursal)
            ->setCellValue('C3', $direccions);
      // ->setCellValue('E2', 'CONTINENTE');
      
// Fuente de la primera fila en negrita
$boldArray = array('font' => array('bold' => true),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER), 'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID, 'color' => array('rgb' => 'e49115')));

$InformacionHeader = array('font' => array('bold' => true, 'size'  => 16), 'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID, 'color' => array('rgb' => 'e49115')));


$headerarray = array('font' => array('bold' => true, 'color' => array('rgb' => 'ffffff')),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER), 'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID, 'color' => array('rgb' => '530a6b')));


$objPHPExcel->getActiveSheet()->getStyle('A1:G3')->applyFromArray($InformacionHeader);    

$objPHPExcel->getActiveSheet()->getStyle('A4:G4')->applyFromArray($headerarray);    


  
      
//Ancho de las columnas
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(12); 
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(12);  
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);  
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(18);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);   
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(12); 
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(12); 
// $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);      

/*Extraer datos de MYSQL*/
  # conectare la base de datos
    // $con=@mysqli_connect('localhost', 'root', 'root', 'test');
include("../../configuracion/conexion.php");
include("../../global_seguridad/verificar_sesion.php");
$s_IdSucursal = $_SESSION["s_IdSucursal"];

    if(!$conexion){
        die("imposible conectarse: ".mysqli_error($conexion));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
  $sql="SELECT qr, ci, nombre_producto, modelo, serie, marca, condiciones
FROM
inventario_fijo
WHERE id_sucursal = '$s_IdSucursal'";
  $query=mysqli_query($conexion,$sql);
  $cel=5;//Numero de fila donde empezara a crear  el reporte
  $contador = 0;
  while ($row=mysqli_fetch_array($query)){
    $qr=$row[0];
    $ci=$row[1];
    $producto=$row[2];
    $modelo=$row[3];
    $serie=$row[4];
    $marca=$row[5];
    $condiciones=$row[6];
    // $continentName=$row['ecivil'];
    
      $a="A".$cel;
      $b="B".$cel;
      $c="C".$cel;
      $d="D".$cel;
      $e="E".$cel;
      $f="F".$cel;
      $g="G".$cel;
      // Agregar datos
      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue($a, $qr)
            ->setCellValue($b, $ci)
            ->setCellValue($c, $producto)
            ->setCellValue($d, $modelo)
            ->setCellValue($e, $serie)
            ->setCellValue($f, $marca)
            ->setCellValue($g, $condiciones);
    
  $cel+=1;
  // $contador++;

  // if ($contador == 10)
  // {
  //   $celnew = $cel + 1;
   
  //   $objPHPExcel->getActiveSheet()->getStyle('A' . $cel. ':G'. $cel)->applyFromArray($boldArray);  

  //   $objPHPExcel->getActiveSheet()->setBreak( 'A' . $celnew, PHPExcel_Worksheet::BREAK_ROW );
  // $contador = 0;
  // }
  }

/*Fin extracion de datos MYSQL*/
$rango="A4:$g";
$styleArray = array('font' => array( 'name' => 'Arial','size' => 10),
'borders'=>array('allborders'=>array('style'=> PHPExcel_Style_Border::BORDER_THIN,'color'=>array('argb' => 'FFF')))
);
$objPHPExcel->getActiveSheet()->getStyle($rango)->applyFromArray($styleArray);
// Cambiar el nombre de hoja de cálculo
$objPHPExcel->getActiveSheet()->setTitle('Reporte de Inventario Fijo');


// Establecer índice de hoja activa a la primera hoja , por lo que Excel abre esto como la primera hoja
$objPHPExcel->setActiveSheetIndex(0);


// Redirigir la salida al navegador web de un cliente ( Excel5 )
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Reporte-InventarioFijo.xls"');
header('Cache-Control: max-age=0');
// Si usted está sirviendo a IE 9 , a continuación, puede ser necesaria la siguiente
header('Cache-Control: max-age=1');

// Si usted está sirviendo a IE a través de SSL , a continuación, puede ser necesaria la siguiente
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;