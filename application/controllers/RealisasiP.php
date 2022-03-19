<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class RealisasiP extends CI_Controller
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
            'page'               => "Admin/page/RealisasiP",
            'RealisasiP'         => site_url('RealisasiP/RealisasiP')
        );

        $this->load->view('Admin/template/halaman', $data);
    }

    public function Rencana()
    {
        $tabler     = "realisasipembayaran";
        $Angsuran   = $this->input->post('Angsuran');
        $NIS        = $this->input->post('NIS');
        $Tanggal    = $this->input->post('Tanggal');
        $Jumlah     = $this->input->post('Jumlah');

        $data = array(
            'Angsuran' => $Angsuran,
            'TanggalTagihan' => $Tanggal,
            'JumlahTagihan' => $Jumlah,
            'NIS' => $NIS
        );

        $cek = $this->ms4->Insertrencana($tabler, $data);
        if ($cek) {
            $redir = site_url('RencanaP');
            $message = "Tambah Data Telah Berhasil";
            echo "<script>alert('$message');</script>";

            echo "<script>location='$redir';</script>";
        } else {
            $redir = site_url('RencanaP');
            $message = "Gagal Menambah Data";
            echo "<script>alert('$message');</script>";
            echo "<script>location='$redir';</script>";
        }
    }
}
