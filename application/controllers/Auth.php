<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model'); // LOAD MODEL User_model.php
		$this->load->helper('url','form');
		$this->load->library(array('form_validation','session'));
	}

	// AKSES HALAMAN LOGIN
	public function login()
	{
		if ($this->session->userdata('authenticated')) redirect('beranda','refresh');
		$this->load->view('admin/login/v_login');
	}

	// PROSES LOGIN
	public function cek_login()
	{
		$email    	= $this->input->post('email');
		$password	= md5($this->input->post('password'));

		$user = $this->User_model->get($email);

		if (empty($user)) {
			$this->session->set_flashdata('message', 'Email tidak terdaftar');
			redirect('auth/login','refresh');
		} else {
			if ($password == $user->password) {
				$data = array(
					'authenticated' => true,
					'email'			=> $user->email,
					'nama'			=> $user->nama,
					'nip'			=> $user->nip
				);

				$this->session->set_userdata($data);
				redirect('beranda','refresh');
			} else {
				$this->session->set_flashdata('message', 'Password salah!');
				redirect('auth/login','refresh');
			}
		}
	}

	// AKSES DAN PROSES REGISTER
	public function register()
	{
		$validation = $this->form_validation;
		$validation->set_rules($this->User_model->rules());

		if ($validation->run()) {

			$this->User_model->register();
			$this->session->set_flashdata('success', 'Akun berhasil dibuat');
		}

		$generatenip = $this->User_model->cek_nip();
		$nip = substr($generatenip, 5, 6);
		$nip_terakhir = $nip + 1;
		$data = array('nip' => $nip_terakhir);
		$this->load->view('admin/login/v_register', $data);
	}

	// PROSES LOGOUT
	public function logout()
	{
		date_default_timezone_set("ASIA/JAKARTA");
		$date  = array('last_login' => date('Y-m-d H:i:s'));
		$email = $this->session->userdata('email');
		$this->User_model->_updateLastLogin($email, $date);
		$this->session->sess_destroy();
		redirect('auth/login','refresh');
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */