<?php
/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */
// $Id=$_GET['id'];
    // get the HTML
    ob_start();
    include(dirname(__FILE__).'/res/pdfFormaListaPrestamoMaterial.php');
    $content = ob_get_clean();

    // convert to PDF
    require_once(dirname(__FILE__).'/../plugins/html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('H', 'Letter', 'fr');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('Reporte-PrestamoMaterial.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
