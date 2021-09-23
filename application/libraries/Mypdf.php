<?php

require_once('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
class Mypdf
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function generate($view, $data = array(), $filename = "Laporan", $size = "A4", $orientation = "landscape")
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);

        $dompdf->loadHtml($html);
        $dompdf->setPaper($size, $orientation);
        $dompdf->render();
        ob_clean();
        $dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));
    }

}




?>