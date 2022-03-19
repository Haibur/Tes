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
        if ($this->session->userdata('ses_level') != 1) {
            $this->session->sess_destroy();
            $message = "Anda Harus Login Dahulu !";
            echo "<script>alert('$message');</script>";
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data = array(
            'base'            => base_url(),
            'nama'            => "Admin",
            'page'           => "Admin/template/content"
        );
        $this->load->view('Admin/template/halaman', $data);
    }
}
