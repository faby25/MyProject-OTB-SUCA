
@include('vendor.dompdf.dompdf.src.Autoload')
@php
// include_once "vendor.Autoload.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
ob_start();
@include('notices.form');
// include "./factura.php";
ob_get_clean();
$dompdf->loadHtml(ob_get_clean());
$dompdf->render();
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=factura.pdf");
echo $dompdf->output();
@endphp
