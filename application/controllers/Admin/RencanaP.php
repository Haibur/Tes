<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class RencanaP extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Master4', 'RP');
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
        $tabler = "rencanapembayaran";
        $data = array(
            "base"               => base_url(),
            'page'               => "Admin/page/RencanaP",
            'Rencana'         => site_url('Admin/RencanaP/Rencana'),
        );

        $data["GetALL"] = $this->RP->tblrencana($tabler);
        $this->load->view('Admin/template/halaman', $data);
    }

    public function Rencana()
    {
        $tabler = "rencanapembayaran";
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

        $cek = $this->RP->Insertrencana($tabler, $data);
        if ($cek > 0) {
            $redir = site_url('Admin/RencanaP');
            $message = "Tambah Data Telah Berhasil";
            echo "<script>alert('$message');</script>";

            echo "<script>location='$redir';</script>";
        } else {
            $redir = site_url('Admin/RencanaP');
            $message = "Gagal Menambah Data";
            echo "<script>alert('$message');</script>";
            echo "<script>location='$redir';</script>";
        }
    }
}
