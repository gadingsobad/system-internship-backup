<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
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
        //var_dump($data['data_user_detail']);
        $data['image'] = $this->m_user->curl_image();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar-mobile', $data);
        $this->load->view('templates/topbar', $data);
        if ($data['data_user_detail']['_resign_date'] == date('Y-m-d')) {
            $this->load->view('menu/report-before', $data);
        }
        if ($data['data_user_detail']['_resign_date'] !== date('Y-m-d')) {
            $this->load->view('menu/report-finished', $data);
        }
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');

        //var_dump($data['data_user_detail']['_resign_date']);
    }

    public function print()
    {
        ob_start();
        $data['data_user'] = $this->session->userdata(['msg'][0]);
        $data['data_user_detail'] = $this->session->userdata(['detail'][0]);
        $session = ($data['data_user']);
        $data_session = ($session['ID']);
        $data['kegiatan'] = $this->m_kegiatan->kegiatan_report($data_session)->result_array();
        $entry_date = ($data['data_user_detail']['_entry_date']);
        $resign_date = ($data['data_user_detail']['_resign_date']);
        $data['entry_date'] = date("F d, Y", strtotime($entry_date));
        $data['resign_date'] = date("F d, Y", strtotime($resign_date));
        $this->load->view('menu/print-report', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require './assets/html2pdf/autoload.php';

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('Report Internship.pdf');
    }

    public function unduh()
    {
        ob_start();
        $data['data_user'] = $this->session->userdata(['msg'][0]);
        $data['data_user_detail'] = $this->session->userdata(['detail'][0]);
        $entry_date = ($data['data_user_detail']['_entry_date']);
        $resign_date = ($data['data_user_detail']['_resign_date']);
        $data['entry_date'] = date("F d, Y", strtotime($entry_date));
        $data['resign_date'] = date("F d, Y", strtotime($resign_date));
        $this->load->view('menu/print-report', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require './assets/html2pdf/autoload.php';

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('Report Internship.pdf', 'D');
    }

    public function show()
    {
        $data['data_user'] = $this->session->userdata(['msg'][0]);
        $data['data_user_detail'] = $this->session->userdata(['detail'][0]);
        $session = ($data['data_user']);
        $data_session = ($session['ID']);
        $data['kegiatan'] = $this->m_kegiatan->kegiatan_report($data_session)->result_array();
        $data['data_user'] = $this->session->userdata(['msg'][0]);
        $data['data_user_detail'] = $this->session->userdata(['detail'][0]);
        $entry_date = ($data['data_user_detail']['_entry_date']);
        $resign_date = ($data['data_user_detail']['_resign_date']);
        $data['entry_date'] = date("F d, Y", strtotime($entry_date));
        $data['resign_date'] = date("F d, Y", strtotime($resign_date));
        $this->load->view('menu/print-report', $data);
    }
}
