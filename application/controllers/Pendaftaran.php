<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, OPTIONS");
        $params = array('server_key' => 'SB-Mid-server-3VeMEmDGExCijqNDgTP57swX', 'production' => false);
        $this->load->library('Midtrans');
        $this->midtrans->config($params);
        $this->load->library('veritrans');
        $this->veritrans->config($params);
        $this->load->helper('url');
        $this->load->model('Login_model', 'Pendaftaran');
        $this->load->library('form_validation');
    }

    public function index()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, OPTIONS");
        $data = array(
            'base'            => base_url(),
            'site'             => site_url('Pendaftaran/token'),
            'finish'         => site_url('Pendaftaran/finish'),
        );

        $this->load->view('Pendaftaran', $data);
    }
    public function daftar($id)
    {
        $table = 'jenispe';
        $idfield = 'type';
        $cek = $this->Pendaftaran->getby_id($table, $idfield, $id)->row();
        $data = array(
            'biaya' => $cek->biaya,
            'id' => $id,
            'kelas' => $cek->kelas,
            'site'             => site_url('Pendaftaran/token'),
            'finish'         => site_url('Pendaftaran/finish')
        );

        $this->load->view('Pendaftaran', $data);
    }

    public function token()
    {

        $NamaAnak   = $this->input->post('NamaAnak');
        $NamaOrtu   = $this->input->post('NamaOrangTua');
        $email      = $this->input->post('email');
        $NoP        = $this->input->post('NoPonsel');
        $AlamatS    = $this->input->post('Alamat');
        $Jml        = $this->input->post('Jumlah');


        $transaction_details = array(
            'order_id' => rand(),
            'gross_amount' => $Jml, // no decimal allowed for creditcard
        );

        // Optional
        $item1_details = array(
            'id' => 'a1',
            'price' => $Jml,
            'quantity' => 1,
            'name' => "Pembayaran Uang Pangkal"
        );

        // Optional
        // $item2_details = array(
        // 	'id' => 'a2',
        // 	'price' => 20000,
        // 	'quantity' => 2,
        // 	'name' => "Orange"
        // );

        // Optional
        $item_details = array($item1_details);

        // Optional
        $billing_address = array(
            'first_name'    => "Andri66",
            'last_name'     => "Litani66",
            'address'       => "Mangga 20",
            'city'          => "Jakarta",
            'postal_code'   => "16602",
            'phone'         => "081122334455",
            'country_code'  => 'IDN'
        );

        // Optional
        $shipping_address = array(
            'first_name'    => "Obet",
            'last_name'     => "Supriadi",
            'address'       => $AlamatS,
            'phone'         => "08113366345",
            'country_code'  => 'IDN'
        );

        // Optional
        $customer_details = array(
            'first_name'    => $NamaAnak,
            'email'         => $email,
            'phone'         => $NoP,
            'billing_address'  => $billing_address,
            'shipping_address' => $shipping_address
        );

        // Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O", $time),
            'unit' => 'day',
            'duration'  => 3
        );

        $transaction_data = array(

            'payment_type'             => 'vtweb',
            'vtweb'                         => array(
                //'enabled_payments' 	=> ['credit_card'],
                'credit_card_3d_secure' => true
            ),
            'transaction_details' => $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

        error_log(json_encode($transaction_data));
        $snapToken = $this->midtrans->getSnapToken($transaction_data);
        error_log($snapToken);
        echo $snapToken;
    }

    public function finish()
    {
        $result = json_decode($this->input->post('result_data'), true);
        // echo $result['status_code'];
        // echo 'RESULT <br><pre>';
        // var_dump($result);
        // die();
        // echo '</pre>';

        $table = 'transaksi';
        $order_id             = $result['order_id'];
        $NamaA         = $this->input->post('NamaAnak');
        $TL            = $this->input->post('TanggalLahir');
        $KLS           = $this->input->post('Kelas');
        $KL            = $this->input->post('Kelamin');
        $NamaOrtu      = $this->input->post('NamaOrangTua');
        $Email         = $this->input->post('Email');
        $NoP           = $this->input->post('NoPonsel');
        $AS            = $this->input->post('Alamat');
        $payment_type        = $result['payment_type'];
        $gross_amount         = $result['gross_amount'];
        $status_code         = $result['status_code'];
        $transaction_time     = $result['transaction_time'];
        $status = "Tidak Aktif";
        // $data = array(
        // 	'order_id'			=> $order_id,
        // 	'transaction_id'	=> $transaction_id,
        // 	'payment_type'		=> $payment_type,
        // 	'gross_amount'		=> $gross_amount,
        // 	'transaction_time'	=> $transaction_time
        // ); Gwaenchanayo25

        $cek = $this->Pendaftaran->Insertpembayaran($table, $order_id, $NamaA, $TL, $KLS, $KL, $NamaOrtu, $Email, $NoP, $AS, $payment_type, $gross_amount, $status_code,  $transaction_time, $status);
        if ($cek > 0) {
            $redir = base_url();
            $message = "Pendaftaran Selesai, Cek Email Anda dan Lakukan Pembayaran";
            echo "<script>alert('$message');</script>";
            echo "<script>location='$redir';</script>";
        } else {
            $redir = base_url();
            $message = "Registrasi Anda Ditolak";
            echo "<script>alert('$message');</script>";
            echo "<script>location='$redir';</script>";
        }
    }
}
