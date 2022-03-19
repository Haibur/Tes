<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dasboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
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
            'Siswa'            => base_url('/Siswa'),
            'nama'            => "Siswa",
            'page'           => "Siswa/template/content"
        );
        $this->load->view('Siswa/template/halaman', $data);
    }
}
