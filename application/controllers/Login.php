<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Login_model', 'login');
		$this->load->model('Master', 'ms');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = array(
			'base'			=> base_url(),
			'url_post'		=> site_url('login/validationlogin')
		);

		$this->load->view('login', $data);
	}

	function validationlogin()
	{
		$this->load->library('session');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$user = $this->input->post('email');
			$password = $this->input->post('password');
			$checkdata = $this->login->getcountlogin($user, $password);
			// $rowlogin = $this->login->getLogindata($user, $password)->row();
			// var_dump($checkdata);
			// die();

			if ($checkdata == 1) {
				$rowlogin = $this->login->getLogindata($user, $password)->row();
				if ($rowlogin->level == "1") {

					$session = array(
						'ses_statuslogin'	=> true,
						'ses_username'		=> $rowlogin->username,
						'ses_level'			=> $rowlogin->level,
						'ses_base_url'		=> base_url()
					);
					$this->session->set_userdata($session);

					$redir = site_url('./Admin/Dasboard');
					// $redir = site_url('Dasboard');
					$message = "Selamat Anda Berhasil Login Admin";

					echo "<script>alert('$message');</script>";
					echo "<script>location='$redir';</script>";
				} elseif ($rowlogin->level == "2") {
					$session = array(
						'ses_statuslogin'	=> true,
						'ses_username'		=> $rowlogin->username,
						'ses_level'			=> $rowlogin->level,
						'ses_base_url'		=> base_url()
					);
					$this->session->set_userdata($session);

					$redir = site_url('./SiswaTK/Dasboard');
					// $redir = site_url('UserSiswa');
					$message = "Selamat Anda Berhasil Login Siswa";

					echo "<script>alert('$message');</script>";
					echo "<script>location='$redir';</script>";
				}
			} else {
				$session = array(
					'ses_statuslogin' => false,
				);
				$redir = site_url('./Login');
				$message = "Login gagal cek username / password";
				echo "<script>alert('$message');</script>";
				echo "<script>location='$redir';</script>";
			}
		} else {
			$this->session->sess_destroy();
			redirect('./Login', 'refresh');
		}
	}

	function logout()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect('./Login', 'refresh');
	}
}
