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



// Combino las celdas desde A1 hasta E1
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:E1');

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'REPORTE DE PRESTAMOS DE MATERIAL')
            ->setCellValue('A2', 'Folio')
            ->setCellValue('B2', 'Solicitante')
            ->setCellValue('C2', 'Motivo')
            ->setCellValue('D2', 'Fecha Prestamo')
            ->setCellValue('E2', 'Status');
      // ->setCellValue('E2', 'CONTINENTE');
      
// Fuente de la primera fila en negrita
$boldArray = array('font' => array('bold' => true, 'color' => array('rgb' => 'ffffff')),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER), 'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID, 'color' => array('rgb' => '530a6b')));


$headerarray = array('font' => array('bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER), 'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID, 'color' => array('rgb' => 'e49115')));



$objPHPExcel->getActiveSheet()->getStyle('A1:E1')->applyFromArray($boldArray);    

$objPHPExcel->getActiveSheet()->getStyle('A2:E2')->applyFromArray($headerarray);    


  
      
//Ancho de las columnas
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10); 
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);  
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);  
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);  
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
  $sql="SELECT
  p.id_prestamo,
  p.folio_prestamo,
  p.id_trabajador,
  p.motivo,
  p.fecha_registro,
  p.estado,
  CONCAT(
    ps.nombre,
    ' ',
    ps.ap_paterno,
    ' ',
    ps.ap_materno
  ) AS Solicitante,
  p.vista
FROM
  prestamo_material AS p
INNER JOIN trabajadores AS t ON t.id_trabajador = p.id_trabajador
INNER JOIN personas AS ps ON ps.id_persona = t.id_persona
WHERE p.id_sucursal = '$s_IdSucursal'
ORDER BY
  p.fecha_registro DESC";
  $query=mysqli_query($conexion,$sql);
  $cel=3;//Numero de fila donde empezara a crear  el reporte
  while ($row=mysqli_fetch_array($query)){
    $folio=$row[1];
    $solicitante=$row[6];
    $motivo=$row[3];
    $fecha=$row[4];
    $status=$row[5];
$originalDate = $fecha;
$newDate = date("d/m/Y", strtotime($originalDate));
    if ($status == 1) 
    {
      $status = "Completada";
    }
    else if ($status == 0)
    {
      $status = "Pendiente";
    }
    else if ($status == 2)
    {
      $status = "Cancelada";
    }
    // $continentName=$row['ecivil'];
    
      $a="A".$cel;
      $b="B".$cel;
      $c="C".$cel;
      $d="D".$cel;
      $e="E".$cel;
      // Agregar datos
      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue($a, $folio)
            ->setCellValue($b, $solicitante)
            ->setCellValue($c, $motivo)
            ->setCellValue($d, $newDate)
            ->setCellValue($e, $status);
      // ->setCellValue($e, $continentName);
      
  $cel+=1;
  }

/*Fin extracion de datos MYSQL*/
$rango="A2:$e";
$styleArray = array('font' => array( 'name' => 'Arial','size' => 10),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
'borders'=>array('allborders'=>array('style'=> PHPExcel_Style_Border::BORDER_THIN,'color'=>array('argb' => 'FFF')))
);
$objPHPExcel->getActiveSheet()->getStyle($rango)->applyFromArray($styleArray);
// Cambiar el nombre de hoja de cálculo
$objPHPExcel->getActiveSheet()->setTitle('ReportePrestamoMaterial');


// Establecer índice de hoja activa a la primera hoja , por lo que Excel abre esto como la primera hoja
$objPHPExcel->setActiveSheetIndex(0);


// Redirigir la salida al navegador web de un cliente ( Excel5 )
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Reporte-PrestamosMaterial.xls"');
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