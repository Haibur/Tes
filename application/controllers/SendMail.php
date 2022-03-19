<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SendMail extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('Master', 'ms');
        $this->load->helper('url');
        $this->load->library('email');
    }

    /**
     * Kirim email dengan SMTP Gmail.
     *
     */
    // public function index()
    // {
    //     $config = [
    //         'mailtype'  => 'html',
    //         'charset'   => 'utf-8',
    //         'protocol'  => 'smtp',
    //         'smtp_host' => 'smtp.gmail.com',
    //         'smtp_user' => 'dizastore2506@gmail.com',
    //         'smtp_pass'   => 'Bugilir0838',
    //         'smtp_crypto' => 'ssl',
    //         'smtp_port'   => 465,
    //         'crlf'    => "\r\n",
    //         'newline' => "\r\n"
    //     ];

    //     $this->load->library('email', $config);

    //     $this->email->from('dizastore2506@gmail.com', 'TK ASY-SYAWALIYYAH');

    //     $this->email->to('burhanti2308@gmail.com');

    //     $this->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

    //     $this->email->subject('Kirim Email dengan SMTP Gmail CodeIgniter | MasRud.com');

    //     $this->email->message("Ini adalah contoh email yang dikirim menggunakan SMTP Gmail pada CodeIgniter.<br><br> Klik <strong><a href='https://masrud.com/kirim-email-smtp-gmail-codeigniter/' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

    //     if ($this->email->send()) {
    //         $redir = site_url('Transaksi');
    //         $message = "Sukses! email berhasil dikirim.";
    //         echo "<script>alert('$message');</script>";
    //         echo "<script>location='$redir';</script>";
    //     } else {
    //         echo 'Error! email tidak dapat dikirim.';
    //     }
    // }

    public function index($id)
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
        $row = $this->ms->getby_id($table, $id, $idfield)->row();

        $data['id'] = $id;
        $data['order_id'] = $row->order_id;
        $data['NamaAnak'] = $row->NamaAnak;
        $data['Email'] = $row->Email;

        $this->load->library('email', $config);

        $this->email->from('no-reply@cangkulterus.com', 'TK ASY-SYAWALIYYAH');

        $this->email->to('burhanti2308@gmail.com');

        $this->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

        $this->email->subject('Account Login TK ASY-SYAWALIYYAH');

        $this->email->subject("Account Login TK ASY-SYAWALIYYAH");

        $this->email->message("Ini adalah Account Login Anda Username = $row->order_id dan Password = $row->NamaAnak");

        $this->email->message("Ini adalah contoh email yang dikirim menggunakan SMTP Gmail pada CodeIgniter.<br><br> Klik <strong><a href='https://masrud.com/kirim-email-smtp-gmail-codeigniter/' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

        if ($this->email->send()) {
            $redir = site_url('Transaksi');
            $message = "Sukses! email berhasil dikirim.";
            echo "<script>alert('$message');</script>";
            echo "<script>location='$redir';</script>";
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }

    function edit_aksi()
    {

        $kdtrans    = $this->input->post('kdtrans');

        $table        = 'customer';
        $idfield    = 'kd_customer';

        $nmcust     = $this->input->post('nmcust');
        $telp         = $this->input->post('telp');
        $alamat     = $this->input->post('alamat');
        $email         = $this->input->post('email');
        $kota         = $this->input->post('kota');

        $data = array(
            'nm_customer'     => $nmcust,
            'telp'             => $telp,
            'alamat'         => $alamat,
            'email'         => $email,
            'kota'             => $kota
        );
        $this->ms->update_data($table, $data, $kdtrans, $idfield);
        redirect('./Customer');
    }

    // DUPLIKAT SAND EMAIL
    // public function index($id)
    // {
    //     $config = [
    //         'mailtype'  => 'html',
    //         'charset'   => 'utf-8',
    //         'protocol'  => 'smtp',
    //         'smtp_host' => 'smtp.gmail.com',
    //         'smtp_user' => 'dizastore2506@gmail.com',
    //         'smtp_pass'   => 'Bugilir0838',
    //         'smtp_crypto' => 'ssl',
    //         'smtp_port'   => 465,
    //         'crlf'    => "\r\n",
    //         'newline' => "\r\n"
    //     ];

    //     $table = 'transaksi';
    //     $idfield = 'order_id';

    //     $data['base'] = base_url();
    //     $data['url_index'] = site_url('Transaksi');
    //     $row = $this->ms->getby_id($table, $id, $idfield)->row();

    //     $data['id'] = $id;
    //     $data['order_id'] = $row->order_id;
    //     $data['NamaAnak'] = $row->NamaAnak;
    //     $data['Email'] = $row->Email;

    //     $this->load->library('email', $config);

    //     $this->email->from('no-reply@cangkulterus.com', 'TK ASY-SYAWALIYYAH');

    //     $this->email->to('burhanti2308@gmail.com');

    //     $this->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

    //     $this->email->subject('Account Login TK ASY-SYAWALIYYAH');

    //     $this->email->subject("Account Login TK ASY-SYAWALIYYAH");

    //     $this->email->message("Ini adalah Account Login Anda Username = $row->order_id dan Password = $row->NamaAnak");

    //     $this->email->message("Ini adalah contoh email yang dikirim menggunakan SMTP Gmail pada CodeIgniter.<br><br> Klik <strong><a href='https://masrud.com/kirim-email-smtp-gmail-codeigniter/' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

    //     if ($this->email->send()) {
    //         $redir = site_url('Transaksi');
    //         $message = "Sukses! email berhasil dikirim.";
    //         echo "<script>alert('$message');</script>";
    //         echo "<script>location='$redir';</script>";
    //     } else {
    //         echo 'Error! email tidak dapat dikirim.';
    //     }
    // }
}
