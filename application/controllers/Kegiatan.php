<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
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
        $session = ($data['data_user']);
        $data_session = ($session['ID']);
        $data['kegiatan'] = $this->m_kegiatan->get_kegiatan($data_session)->result_array();
        $data['title'] = 'Dashboard';
        $data['image'] = $this->m_user->curl_image();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar-mobile', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/kegiatan', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');

        //var_dump($data['data_user_detail']);
    }

    public function add_data()
    {
        $data['data_user_detail'] = $this->session->userdata(['detail'][0]);

        $data['title'] = 'Dashboard';
        $data['data_user'] = $this->session->userdata(['msg'][0]);
        $data['image'] = $this->m_user->curl_image();
        $data['option_pembimbing'] = $this->m_kegiatan->option_pembimbing();
        $data['option_divisi'] = $this->m_kegiatan->option_divisi();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar-mobile', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/form-kegiatan', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }

    public function tambah_kegiatan()
    {
        $data['data_user_detail'] = $this->session->userdata(['detail'][0]);
        $user = $this->session->userdata('msg');
        $tittle = $this->input->post('tittle');
        $id_user = ($user['ID']);
        $date = $this->input->post('date');
        $start = $this->input->post('start-time');
        $finish = $this->input->post('finish-time');
        $pembimbing = $this->input->post('pembimbing');
        $foto = $_FILES['customFile'];
        $divisi = $this->input->post('divisi');
        $link = $this->input->post('link');
        $detail = $this->input->post('detail');
        if ($foto = '') {
        } else {
            $config['upload_path']  = './assets/foto';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            $this->upload->do_upload('customFile');

            $foto = $this->upload->data('file_name');
        }
        $data = array(
            'tittle' => $tittle,
            'id_user' => $id_user,
            'date' => $date,
            'start' => $start,
            'finish' => $finish,
            'pembimbing' => $pembimbing,
            'foto' => $foto,
            'divisi' => $divisi,
            'link' => $link,
            'detail' => $detail
        );
        $this->m_kegiatan->input_kegiatan($data, 'kegiatan');

        redirect('kegiatan/index');
    }

    public function deleted($id)
    {
        $where = array('ID' => $id);
        $this->m_kegiatan->deleted($where, 'kegiatan');
        redirect('kegiatan/index');
    }

    public function edit($id)
    {
        $data['data_user_detail'] = $this->session->userdata(['detail'][0]);
        $where = array('ID' => $id);
        $datas['kegiatan'] = $this->m_kegiatan->edit_data($where, 'kegiatan')->result_array();
        $data['option_pembimbing'] = $this->m_kegiatan->option_pembimbing();
        $data['option_divisi'] = $this->m_kegiatan->option_divisi();
        $data['title'] = 'Dashboard';
        $data['data_user'] = $this->session->userdata(['msg'][0]);
        $data['image'] = $this->m_user->curl_image();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar-mobile', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/edit-kegiatan', $datas);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $tittle = $this->input->post('tittle');
        $date = $this->input->post('date');
        $start = $this->input->post('start-time');
        $finish = $this->input->post('finish-time');
        $pembimbing = $this->input->post('pembimbing');
        $image = $this->input->post('image');
        $foto = $_FILES['customFile'];
        $divisi = $this->input->post('divisi');
        $link = $this->input->post('link');
        $detail = $this->input->post('detail');

        $config['upload_path']  = './assets/foto';
        $config['allowed_types'] = 'jpg|png|gif';

        $this->load->library('upload', $config);
        $this->upload->do_upload('customFile');

        $x = $this->upload->data('file_name');

        if ($x == null) {
            $data = array(
                'tittle' => $tittle,
                'date' => $date,
                'start' => $start,
                'finish' => $finish,
                'pembimbing' => $pembimbing,
                'foto' => $image,
                'divisi' => $divisi,
                'link' => $link,
                'detail' => $detail
            );
        } else {
            $data = array(
                'tittle' => $tittle,
                'date' => $date,
                'start' => $start,
                'finish' => $finish,
                'pembimbing' => $pembimbing,
                'foto' => $x,
                'divisi' => $divisi,
                'link' => $link,
                'detail' => $detail
            );
        }
        $where = array(
            'id' => $id
        );
        //var_dump($data);
        $this->m_kegiatan->update_data($where, $data, 'kegiatan');
        redirect('kegiatan/index');
    }
}
