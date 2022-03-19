<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Master4', 'ms4');
        $this->load->helper('url');
        $this->load->library('email');
        $this->is_logged();
    }

    function is_logged()
    {
        $this->load->library('Session/session');
        if ($this->session->userdata('ses_statuslogin') != TRUE) {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data = array(
            "base"               => base_url(),
            'page'               => "Admin/page/Siswa"
        );
        $data['Siswa'] = $this->ms4->getAll();
        $data['NormalTKA'] = $this->ms4->A();
        $data['PromoTKA'] = $this->ms4->PromoA();
        $data['NormalTKB'] = $this->ms4->B();
        $data['PromoTKB'] = $this->ms4->PromoB();

        $this->load->view('Admin/template/halaman', $data);
    }

    public function BiayaA()
    {
        $data = array(
            "base"               => base_url(),
            'page'               => "Admin/page/Siswa",
            'id' => 30000
        );
        $data['SiswaA'] = $this->ms4->BiayaA('Siswa', $data);

        $data['Siswa'] = $this->ms4->getAll();
        $data['NormalTKA'] = $this->ms4->A();
        $data['PromoTKA'] = $this->ms4->PromoA();
        $data['NormalTKB'] = $this->ms4->B();
        $data['PromoTKB'] = $this->ms4->PromoB();

        $this->load->view('Admin/template/halaman', $data);
    }
}
