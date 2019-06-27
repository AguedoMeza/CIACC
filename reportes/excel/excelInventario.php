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

// $objPHPExcel->getActiveSheet()
//     ->getPageSetup()
//     ->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

// Combino las celdas desde A1 hasta E1
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:D1');

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'REPORTE DE INVENTARIO ALMACÉN')
            ->setCellValue('A2', 'Producto')
            ->setCellValue('B2', 'Tipo')
            ->setCellValue('C2', 'Cant Almacén')
            ->setCellValue('D2', 'Total')
            ->setCellValue('E2', 'Stock Min');
      // ->setCellValue('E2', 'CONTINENTE');
      
// Fuente de la primera fila en negrita
$boldArray = array('font' => array('bold' => true, 'color' => array('rgb' => 'ffffff')),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER), 'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID, 'color' => array('rgb' => '530a6b')));


$headerarray = array('font' => array('bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER), 'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID, 'color' => array('rgb' => 'e49115')));


$objPHPExcel->getActiveSheet()->getStyle('A1:E1')->applyFromArray($boldArray);    

$objPHPExcel->getActiveSheet()->getStyle('A2:E2')->applyFromArray($headerarray);    


  
      
//Ancho de las columnas
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(35); 
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20); 
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(14);  
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(7);  
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(9);  
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
    mysqli_set_charset($conexion, 'utf8');
  $sql="SELECT CONCAT(p.nombre, ' ', p.descripcion_producto), i.cantidad_almacen, i.cantidad_total, i.activo, p.stock_minimo, pt.nombre_tipo_producto
FROM
inventario_almacen AS i
INNER JOIN productos AS p
ON p.id_producto = i.id_producto
INNER JOIN productos_tipo AS pt
ON pt.id_tipo_producto = p.id_tipo_producto
WHERE i.id_sucursal = '$s_IdSucursal'";
  $query=mysqli_query($conexion,$sql);
  $cel=3;//Numero de fila donde empezara a crear  el reporte
  while ($row=mysqli_fetch_array($query)){
    $producto=$row[0];
    $cantalmacen=$row[1];
    $total=$row[2];
    $stock=$row[4];
    $tipo=$row[5];
    // $continentName=$row['ecivil'];
 
      $a="A".$cel;
      $b="B".$cel;
      $c="C".$cel;
      $d="D".$cel;
      $e="E".$cel;
      // Agregar datos
      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue($a, $producto)
            ->setCellValue($b, $tipo)
            ->setCellValue($c, $cantalmacen)
            ->setCellValue($d, $total)
            ->setCellValue($e, $stock);
      // ->setCellValue($e, $continentName);
      
  $cel+=1;
  }

/*Fin extracion de datos MYSQL*/
$rango="A2:$e";
$styleArray = array('font' => array( 'name' => 'Arial','size' => 10),
'borders'=>array('allborders'=>array('style'=> PHPExcel_Style_Border::BORDER_THIN,'color'=>array('argb' => 'FFF')))
);
$objPHPExcel->getActiveSheet()->getStyle($rango)->applyFromArray($styleArray);
// Cambiar el nombre de hoja de cálculo
$objPHPExcel->getActiveSheet()->setTitle('Reporte de Inventario Almacén');


// Establecer índice de hoja activa a la primera hoja , por lo que Excel abre esto como la primera hoja
$objPHPExcel->setActiveSheetIndex(0);


// Redirigir la salida al navegador web de un cliente ( Excel5 )
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="ReporteInventarioAlmacen.xls"');
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