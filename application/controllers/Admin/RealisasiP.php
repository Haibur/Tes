<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class RealisasiP extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Master', 'ms');
        $this->load->helper('url');
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
            'page'               => "Admin/page/RealisasiP"
        );

        $data["GetLunas"] = $this->ms->tblLunas();
        $data["GetBelum"] = $this->ms->tblBelum();
        $this->load->view('Admin/template/halaman', $data);
    }
}
