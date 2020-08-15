<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class PdfController extends Controller
{

    public function index() 
	{
        return view('pdf_view');
    }

    function htmlToPDF(){
        $dompdf = new \Dompdf\Dompdf(); 
        $dompdf->loadHtml(view('pdf_view'));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }

}