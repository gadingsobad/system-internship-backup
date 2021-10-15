<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('m_auth', 'auth');
        $this->load->library('form_validation');
        $this->load->model('m_user');
    }

    public function index()
    {
        $this->auth->curl_login();
        $data['data_user'] = $this->session->userdata(['msg'][0]);
        $data['data_user_detail'] = $this->session->userdata(['detail'][0]);
        $data['image'] = $this->m_user->curl_image();
        $this->load->view('menu/validation', $data);
    }
}
