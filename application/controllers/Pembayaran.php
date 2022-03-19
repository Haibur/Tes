<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pembayaran extends CI_Controller
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
        if ($this->session->userdata('ses_level') != 1) {
            $this->load->library('session');
            $this->session->sess_destroy();
            $message = "Anda Harus Login Dahulu !";
            echo "<script>alert('$message');</script>";
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data = array(
            "base"               => base_url(),
            'page'               => "Admin/page/Pembayaran"
        );

        $this->load->view('Admin/template/halaman', $data);
    }

    public function BiayaA($id)
    {
        $idfield = 'TKA';
        $pangkal = 300000;
        $cek = $this->ms4->getby_id($idfield, $id)->row();
        $data = array(
            "base"               => base_url(),
            'page'               => "Admin/page/Siswa",
            'UangPangkal' => $cek->UangPangkal,
            'Kelas' => $id
        );
        $data["Siswa"] = $this->ms4->BiayaA($id, $pangkal);

        $this->load->view('Admin/template/halaman', $data);
    }
}
