<?php 
    require '../vendor/autoload.php';

    require_once '../vendor/dompdf/dompdf/src/Autoloader.php';

    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    ob_start();
    require("../index.php");
    $myBody = ob_get_contents();

    ob_clean();
    

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml($myBody);
    // $dompdf->loadHtmlFile($myBody);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();

    //go back to index
    header("location:../index.php");

?>