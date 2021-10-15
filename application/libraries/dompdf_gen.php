<?php
defined('BASEPATH') or exit("No direct script access allowed");

require_once('vendor/autoload.php');

use Dompdf\Dompdf;

class Dompdf_gen
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
	}

	public function generate($view, $data = array(), $filename = 'Sertifikat', $paper = 'A4', $orientation = 'landscape')
	{
		$dompdf = new Dompdf();
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml("$html");

		$dompdf->setPaper($paper, $orientation);

		$dompdf->render();
		$dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));
	}
}
