<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class HandlerNotif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-3XqDS86A6xIG0SDj7UzWa_BY', 'production' => false);
        $this->load->library('veritrans');
        $this->veritrans->config($params);
        $this->load->model('RealisasiP', 'RP');
        $this->load->helper('url');
    }

    public function index()
    {
        echo 'test notification handler';

        $json_result = file_get_contents('php://input');
        $result = json_decode($json_result, "true");

        $order_id = $result['order_id'];
        $data = [
            'status' => $result['status_code'],
        ];

        if ($result['status_code'] == 200) {

            $update = $this->db->update('realisasipembayaran', $data, array('NoBukti' => $order_id));
            if ($update) {
            }
            $id = $result['order_id'];

            $this->RP->updatedata($id)->row();
        }
    }
}
