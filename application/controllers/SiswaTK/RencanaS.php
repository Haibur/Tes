<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class RencanaS extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-3XqDS86A6xIG0SDj7UzWa_BY', 'production' => false);
        $this->load->library('Midtrans');
        $this->midtrans->config($params);
        $this->load->library('veritrans');
        $this->veritrans->config($params);

        $this->load->model('RencanaP', 'RP');
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
            'page'               => 'Siswa/page/RencanaS',
        );

        $cekemail = $this->session->userdata('ses_username');

        $data["GetALL"] = $this->RP->tblrencana($cekemail);
        $this->load->view('Siswa/template/halaman', $data);
    }

    function bayar($id)
    {
        $idfield = 'NoTagihan';
        $data['base'] = base_url();
        $data['page'] = 'Siswa/page/Pembayaran';
        $data['url_post'] = 'SiswaTK/RencanaS/finish';
        $data['token'] = 'SiswaTK/RencanaS/token';
        $data['url_index'] = site_url('RencanaS');

        $row = $this->RP->getby_id($id, $idfield)->row();
        $data['NoTagihan'] = $row->NoTagihan;
        $data['Angsuran'] = $row->Angsuran;
        $data['NIS'] = $row->NIS;
        $data['NamaSiswa'] = $row->NamaSiswa;
        $data['Email'] = $row->Email;
        $data['NoTelphone'] = $row->NoTelphone;
        $data['Alamat'] = $row->Alamat;
        $data['TanggalTagihan'] = $row->TanggalTagihan;
        $data['JumlahTagihan'] = $row->JumlahTagihan;

        $data['id'] = $id;
        $this->load->view('Siswa/template/halaman', $data);
    }

    public function token()
    {

        $Angsuran       = $this->input->post('Angsuran');
        $NISs           = $this->input->post('NISs');
        $NamaSiswa      = $this->input->post('NamaSiswa');
        $NoTelphone     = $this->input->post('NoTelphone');
        $Alamat         = $this->input->post('Alamat');
        $Email          = $this->input->post('Email');
        $JumlahTagihan  = $this->input->post('JumlahTagihan');


        $transaction_details = array(
            'order_id' => rand(),
            'gross_amount' => $JumlahTagihan, // no decimal allowed for creditcard
        );

        // Optional
        $item1_details = array(
            'id' => 'a1',
            'price' => $JumlahTagihan,
            'quantity' => 1,
            'name' => "Pembayaran Angsuran " . $Angsuran
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
            'address'       => $Alamat,
            'phone'         => "08113366345",
            'country_code'  => 'IDN'
        );

        // Optional
        $customer_details = array(
            'first_name'    => $NISs . ' ' . $NamaSiswa,
            'email'         => $Email,
            'phone'         => $NoTelphone,
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

        $table = 'realisasipembayaran';
        $order_id             = $result['order_id'];
        $NoTagihan            = $this->input->post('NoTagihan');
        $Angsuran             = $this->input->post('Angsuran');
        $NISs                 = $this->input->post('NISs');
        $gross_amount         = $result['gross_amount'];
        $status_code          = $result['status_code'];
        $transaction_time     = $result['transaction_time'];

        $data = array(
            'NoBukti'            => $order_id,
            'TanggalBayar'        => $transaction_time,
            'JenisPembayaran'   => $Angsuran,
            'JumlahPembayaran'        => $gross_amount,
            'NIS'    => $NISs,
            'NoTagihan' => $NoTagihan,
            'Status' => $status_code
        );

        $datatabler = array(
            'status' =>   $status_code
        );

        $cek = $this->RP->Insertpembayaran($table, $data);
        if ($cek == NULL) {
            $redir = site_url('SiswaTK/RencanaS');
            $message = "Segera Lakukan Pembayaran";
            $this->db->update('rencanapembayaran', $datatabler, array('NIS' => $NISs, 'Angsuran' => $Angsuran));
            echo "<script>alert('$message');</script>";
            echo "<script>location='$redir';</script>";
        } else {
            $redir = site_url('SiswaTK/RencanaS');
            $message = "Pembayaran Ditolak";
            echo "<script>alert('$message');</script>";
            echo "<script>location='$redir';</script>";
        }
    }
}
