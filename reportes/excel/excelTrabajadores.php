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
            ->setCellValue('A1', 'REPORTE DE TRABAJADORES')
            ->setCellValue('A2', 'Número')
            ->setCellValue('B2', 'Nombre')
            ->setCellValue('C2', 'Extensión')
            ->setCellValue('D2', 'Departamento')
            ->setCellValue('E2', 'Puesto');
      // ->setCellValue('E2', 'CONTINENTE');
      #B8CCE4
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
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);  
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);    
// $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);      

/*Extraer datos de MYSQL*/
  # conectare la base de datos
    // $con=@mysqli_connect('localhost', 'root', 'root', 'test');
include("../../configuracion/conexion.php");
include("../../global_seguridad/verificar_sesion.php");
$s_IdSucursal = $_SESSION["s_IdSucursal"];
$s_idUsuario = $_SESSION["s_IdUser"];
    if(!$conexion){
        die("imposible conectarse: ".mysqli_error($conexion));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

if ($s_idUsuario == 62 || $s_idUsuario == 63 || $s_idUsuario == 64) 
{
        mysqli_set_charset($conexion, 'utf8');
  $sql="SELECT t.num_empleado, CONCAT(p.nombre,' ',p.ap_paterno, ' ', p.ap_materno), s.nombre, d.nom_departamento, pu.nom_puesto
FROM
trabajadores AS t
INNER JOIN personas AS p
ON t.id_persona = p.id_persona
INNER JOIN sucursales AS s
ON s.id_sucursal = t.id_sucursal
INNER JOIN departamentos AS d
ON d.id_departamento = t.id_departamento
INNER JOIN puestos AS pu
ON pu.id_puesto = t.id_puesto
WHERE t.activo = 1 AND t.id_usuario = '$s_idUsuario'";
  $query=mysqli_query($conexion,$sql);
}
if ($s_idUsuario == 61) 
{
  mysqli_set_charset($conexion, 'utf8');
  $sql="SELECT DISTINCT t.num_empleado, CONCAT(p.nombre,' ',p.ap_paterno, ' ', p.ap_materno), s.area, d.nom_departamento, pu.nom_puesto
FROM
trabajadores AS t
INNER JOIN personas AS p
ON t.id_persona = p.id_persona
INNER JOIN sucursales AS s
ON s.area = t.area
INNER JOIN departamentos AS d
ON d.id_departamento = t.id_departamento
INNER JOIN puestos AS pu
ON pu.id_puesto = t.id_puesto
WHERE t.activo = 1 AND t.id_usuario = '$s_idUsuario'";
  $query=mysqli_query($conexion,$sql);
}
if ($s_idUsuario == 65 || $s_idUsuario == 66 || $s_idUsuario == 1)
{
      mysqli_set_charset($conexion, 'utf8');
  $sql="SELECT t.num_empleado, CONCAT(p.nombre,' ',p.ap_paterno, ' ', p.ap_materno), s.nombre, d.nom_departamento, pu.nom_puesto
FROM
trabajadores AS t
INNER JOIN personas AS p
ON t.id_persona = p.id_persona
INNER JOIN sucursales AS s
ON s.id_sucursal = t.id_sucursal
INNER JOIN departamentos AS d
ON d.id_departamento = t.id_departamento
INNER JOIN puestos AS pu
ON pu.id_puesto = t.id_puesto
WHERE t.activo = 1 AND t.id_puesto != 83 AND t.id_puesto != 86 AND t.id_puesto != 87";
  $query=mysqli_query($conexion,$sql);
}
else if ($s_idUsuario >= 67)
{
  mysqli_set_charset($conexion, 'utf8');
  $sql="SELECT t.num_empleado, CONCAT(p.nombre,' ',p.ap_paterno, ' ', p.ap_materno), s.nombre, d.nom_departamento, pu.nom_puesto
FROM
trabajadores AS t
INNER JOIN personas AS p
ON t.id_persona = p.id_persona
INNER JOIN sucursales AS s
ON s.id_sucursal = t.id_sucursal
INNER JOIN departamentos AS d
ON d.id_departamento = t.id_departamento
INNER JOIN puestos AS pu
ON pu.id_puesto = t.id_puesto
WHERE t.activo = 1 AND t.id_sucursal = '$s_IdSucursal'";
  $query=mysqli_query($conexion,$sql);
}
  $cel=3;//Numero de fila donde empezara a crear  el reporte
  while ($row=mysqli_fetch_array($query)){
    $numero=$row[0];
    $persona=$row[1];
    if ($s_idUsuario == 61) 
    {
     $sucursal= "Área ".$row[2];
    }
    else
    {
      $sucursal=$row[2];
    }
    $departamento=$row[3];
    $puesto=$row[4];
    // $continentName=$row['ecivil'];
    
      $a="A".$cel;
      $b="B".$cel;  
      $c="C".$cel;
      $d="D".$cel;
      $e="E".$cel;
      // Agregar datos
      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue($a, $numero)
            ->setCellValue($b, $persona)
            ->setCellValue($c, $sucursal)
            ->setCellValue($d, $departamento)
            ->setCellValue($e, $puesto);
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
$objPHPExcel->getActiveSheet()->setTitle('Reporte de Trabajadores');


// Establecer índice de hoja activa a la primera hoja , por lo que Excel abre esto como la primera hoja
$objPHPExcel->setActiveSheetIndex(0);


// Redirigir la salida al navegador web de un cliente ( Excel5 )
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Reporte-Trabajadores.xls"');
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