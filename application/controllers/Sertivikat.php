<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sertivikat extends CI_Controller
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
}
