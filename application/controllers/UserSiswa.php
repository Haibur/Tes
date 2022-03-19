<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserSiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->is_logged();
        $this->load->library('Session/session');
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
        $cekemail = $this->session->userdata('ses_username');
        $data = array(
            'base'            => base_url(),
            'nama'            => $cekemail,
            'page'           => "Siswa/template/content"
        );
        $this->load->view('Siswa/template/halaman', $data);
    }
}
