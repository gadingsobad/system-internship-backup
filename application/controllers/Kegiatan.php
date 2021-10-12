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
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/system-internship/kegiatan/index';
        $config['total_rows'] = $this->m_kegiatan->count_kegiatan();
        $config['per_page'] = 10;
        // Styling
        $config['full_tag_open'] = '<div class="d-flex justify-content-between align-items-center flex-wrap"><div class="d-flex flex-wrap py-2 mr-3">';
        $config['full_tag_close'] = '</div></div>';

        $config['first_link'] = '<i class="ki ki-bold-double-arrow-back icon-xs"></i>';
        $config['first_tag_open'] = '<li class="btn btn-icon btn-sm btn-light mr-2 my-1">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = ' <i class="ki ki-bold-double-arrow-next icon-xs"></i>';
        $config['last_tag_open'] = '<li class="btn btn-icon btn-sm btn-light mr-2 my-1">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = ' <i class="ki ki-bold-arrow-next icon-xs"></i>';
        $config['next_tag_open'] = '<li class="btn btn-icon btn-sm btn-light mr-2 my-1">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = ' <i class="ki ki-bold-arrow-back icon-xs"></i>';
        $config['prev_tag_open'] = '<li class="btn btn-icon btn-sm btn-light mr-2 my-1">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="btn btn-icon btn-sm border-0 btn-light btn-hover-primary active mr-2 my-1">';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="btn btn-icon btn-sm btn-light mr-2 my-1">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'btn');


        $this->pagination->initialize($config);






        $this->auth->curl_login();
        $data['data_user'] = $this->session->userdata(['msg'][0]);
        $data['data_user_detail'] = $this->session->userdata(['detail'][0]);
        $session = ($data['data_user']);
        $data_session = ($session['ID']);
        $data['start'] = $this->uri->segment(3);
        $data['kegiatan'] = $this->m_kegiatan->get_kegiatan($data_session, $config['per_page'], $data['start'])->result_array();
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

    public function welcome()
    {
        $data['data_user'] = $this->session->userdata(['msg'][0]);
        $data['image'] = $this->m_user->curl_image();
        $this->load->view('menu/welcome', $data);
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

    public function search()
    {
        $data['start'] = $this->uri->segment(3);
        $keyword = $this->input->post('keyword');
        $data['kegiatan'] = $this->m_kegiatan->get_keyword($keyword);
        $this->auth->curl_login();
        $data['data_user'] = $this->session->userdata(['msg'][0]);
        $data['data_user_detail'] = $this->session->userdata(['detail'][0]);
        $data['start'] = $this->uri->segment(3);
        $data['title'] = 'Dashboard';
        $data['image'] = $this->m_user->curl_image();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar-mobile', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/kegiatan', $data);
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
