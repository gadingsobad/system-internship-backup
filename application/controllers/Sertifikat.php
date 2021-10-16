<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sertifikat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('m_auth', 'auth');
        $this->load->library('form_validation');
        $this->load->model('m_user');
        $this->load->model('m_kegiatan');
        $this->auth->curl_login();
    }

    public function index()
    {
        $this->auth->curl_login();
        $data['data_user'] = $this->session->userdata(['msg'][0]);
        $data['data_user_detail'] = $this->session->userdata(['detail'][0]);
        $data['image'] = $this->m_user->curl_image();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar-mobile', $data);
        $this->load->view('templates/topbar', $data);
        if ($data['data_user_detail']['_resign_date'] !== date('Y-m-d')) {
            $this->load->view('menu/sertivikat-before', $data);
        }
        if ($data['data_user_detail']['_resign_date'] == date('Y-m-d')) {
            $this->load->view('menu/sertivikat-finished', $data);
        }
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');

        //var_dump($data['data_user_detail']['_resign_date']);
    }

    public function cetak()
    {
        $this->load->library('dompdf_gen');
        $this->dompdf_gen->generate('menu/print-sertifikat');
    }

    public function print()
    {
        ob_start();
        $data['data_user'] = $this->session->userdata(['msg'][0]);
        $data['data_user_detail'] = $this->session->userdata(['detail'][0]);
        $entry_date = ($data['data_user_detail']['_entry_date']);
        $resign_date = ($data['data_user_detail']['_resign_date']);
        $data['entry_date'] = date("F d, Y", strtotime($entry_date));
        $data['resign_date'] = date("F d, Y", strtotime($resign_date));
        $this->load->view('menu/print-sertifikat', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require './assets/html2pdf/autoload.php';

        $pdf = new Spipu\Html2Pdf\Html2Pdf('L', 'A4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('Sertifikat Internship.pdf');
    }


    public function coba()
    {
        $data['data_user'] = $this->session->userdata(['msg'][0]);
        $data['data_user_detail'] = $this->session->userdata(['detail'][0]);
        $entry_date = ($data['data_user_detail']['_entry_date']);
        $resign_date = ($data['data_user_detail']['_resign_date']);
        $data['entry_date'] = date("F d, Y", strtotime($entry_date));
        $data['resign_date'] = date("F d, Y", strtotime($resign_date));
        $this->load->view('menu/print-sertifikat', $data);
    }
}
