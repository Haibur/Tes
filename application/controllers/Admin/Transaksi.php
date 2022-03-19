<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Master', 'ms');
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
        $table = 'transaksi';

        $data = array(
            "base"               => base_url(),
            'send'             => site_url('Transaksi/SendMail'),
            'page'               => "Admin/page/Transaksi"
        );

        $data["Transaksi"] = $this->ms->getAll($table);

        $this->load->view('Admin/template/halaman', $data);
    }

    function SendMail($id)
    {
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'dizastore2506@gmail.com',
            'smtp_pass'   => 'Bugilir0838',
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        $table = 'transaksi';
        $idfield = 'order_id';

        $data['base'] = base_url();
        $data['url_index'] = site_url('Transaksi');

        $row = $this->ms->getby_id($table, $idfield, $id)->row();
        $data['order_id'] = $row->order_id;
        $data['NamaAnak'] = $row->NamaAnak;
        $data['Email'] = $row->Email;

        $this->load->library('email', $config);

        $this->email->from('dizastore2506@gmail.com', 'TK ASY-SYAWALIYYAH');

        $this->email->to("$data[Email]");

        $this->email->attach("assets/A3.png");

        $this->email->subject("Account Login TK ASY-SYAWALIYYAH");

        $this->email->message("Ini adalah Account Login Anda..
         Username = $row->Email
         Password = $row->NoPonsel");

        if ($this->email->send()) {
            $redir = site_url('Admin/Transaksi');
            $message = "Sukses! email berhasil dikirim.";
            echo "<script>alert('$message');</script>";
            if ($message) {
                $data['StatusAccount'] = $row->StatusAccount;
                $data['id'] = $id;

                $user = "user";
                $level = '2';
                $ket = "Siswa";

                $datalogin = array(
                    'username' => $row->Email,
                    'password' => $row->NoPonsel,
                    'level' => $level,
                    'ket' => $ket
                );

                $siswa = "Siswa";
                $datasiswa = array(
                    'NIS' => $row->order_id,
                    'NamaSiswa' => $row->NamaAnak,
                    'TanggalLahir' => $row->TanggalLahir,
                    'JenisKelamin' => $row->Kelamin,
                    'NamaOrtu' => $row->NamaOrangTua,
                    'Email' => $row->Email,
                    'NoTelphone' => $row->NoPonsel,
                    'Alamat' => $row->Alamat,
                    'Kelas' => $row->Kelas,
                );

                $Update = "Aktif";
                $orderid = $data['order_id'];

                $data = array(
                    'StatusAccount'     => $Update
                );

                $this->ms->update_data($table, $data, $orderid, $idfield);

                $this->ms->input_datalogin($user, $datalogin);

                $this->ms->input_datasiswa($siswa, $datasiswa);
            } else {
                $redir = site_url('Admin/Transaksi');
                $messagegagal = "Email Gagal dikirim ";
                echo "<script>alert('$messagegagal');</script>";
                echo "<script>location='$redir';</script>";
            }
            echo "<script>location='$redir';</script>";
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
}
