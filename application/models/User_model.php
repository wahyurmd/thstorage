<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	private $_table = "mst_user";

	function cek_nip()
	{
		$query = $this->db->query("SELECT MAX(nip) as nip FROM mst_user");
		$hasil = $query->row();
		return $hasil->nip;
	}

	// GET DATA DARI TABEL BERDASARKAN EMAIL
	public function get($email)
	{
		$this->db->where('email', $email);
		$result = $this->db->get('mst_user')->row();

		return $result;
	}

	// FORM VALIDATION REGIS AKUN
	public function rules()
	{
		return [
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email|is_unique[mst_user.email]',
				'errors'=> [
					'required' 	=> '{field} tidak boleh kosong.',
					'is_unique'	=> 'Email sudah terdaftar'
				]
			],

			[
				'field' => 'nama',
				'label' => 'Nama',
				'rules' => 'required',
				'errors'=> [
					'required' 	=> '{field} tidak boleh kosong.'
				]
			],

			[
				'field' => 'nohp',
				'label' => 'Nohp',
				'rules' => 'required',
				'errors'=> [
					'required' 	=> '{field} tidak boleh kosong.'
				]
			],

			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|min_length[5]',
				'errors'=> [
					'required' 	=> '{field} tidak boleh kosong.',
					'min_length'=> '{field} kamu minimal harus 5 karakter'
				]
			],

			[
				'field' => 'password2',
				'label' => 'Password Konfirmasi',
				'rules' => 'matches[password]'
			]
		];
	}

	// INSERT DATA REGISTER KE DATABASE
	public function register()
	{
		$post = $this->input->post();
		date_default_timezone_set('Asia/Jakarta');
		$now = date('Y-m-d H:i:s');

		$ins['nip'] = $post['nip'];
		$ins['nama'] = $post['nama'];
		$ins['email'] = $post['email'];
		$ins['nohp'] = $post['nohp'];
		$ins['password'] = md5($post['password']);
		$this->db->set('createtime', $now);
		$this->db->insert('mst_user', $ins);
	}

	// UPDATE DATA SET LAST_LOGIN
	public function _updateLastLogin($email, $date)
	{
		$sql = "UPDATE {$this->_table} SET last_login=now() WHERE email='$email'";
		$this->db->query($sql);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */