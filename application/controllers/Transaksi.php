<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('authenticated')) redirect('auth/login', 'refresh');
		$this->load->model('M_Transaksi');
		$this->load->library('pdf');
	}

	public function index()
	{
		redirect('transaksi/data_transaksi','refresh');
	}

	public function data_transaksi()
	{
		$data['getData'] = $this->M_Transaksi->getPurchase();
		$this->render_page('admin/purchase/data_transaksi', $data);
	}

	public function transaksi_pembayaran()
	{
		date_default_timezone_set('Asia/Jakarta');

		// GENERATE KODE ACAK PENITIPAN
		$kodePembayaran = date('YmdHis');

		$data['getPenitipan'] = $this->M_Transaksi->getData();
		$data['getKodeBayar'] = $kodePembayaran;
		$this->render_page('admin/purchase/input_transaksi', $data);
	}

	public function getPenitip()
	{
		$kode_penitipan = $this->input->post('kode_penitipan');
		$data = $this->M_Transaksi->getAutocomplete($kode_penitipan);

		// var_dump($data);

		echo json_encode($data);
	}
	public function proses_transaksi()
	{
		$kode_pembayaran 	= $this->input->post('kode_pembayaran');
		$kode_penitipan  	= $this->input->post('kode_penitipan');
		$kode_deskripsi  	= $this->input->post('kode_deskripsi');
		$nip 			 	= $this->input->post('nip');
		$nama_penitip 	 	= $this->input->post('nama_penitip');
		$kode_loker 	 	= $this->input->post('kode_loker');
		$time_in	 	 	= $this->input->post('time_in');
		$time_out	 	 	= $this->input->post('time_out');
		$lama_penitipan	 	= $this->input->post('lama_penitipan');
		$tarif_penitipan	= $this->input->post('tarif_penitipan');
		$uang_diterima	 	= $this->input->post('uang_diterima');
		$uang_dikembalikan	= $this->input->post('uang_dikembalikan');
		$denda				= $this->input->post('denda');
		$tarif_cuci			= $this->input->post('tarif_cuci');
		$status_titip	  	= 0;
		$status_desc	  	= 0;
		$status	 		 	= 1;

		$data = array(
			'kode_pembayaran' 	=> $kode_pembayaran,
			'kode_penitipan' 	=> $kode_penitipan,
			'kode_deskripsi' 	=> $kode_deskripsi,
			'nip' 				=> $nip,
			'nama_penitip' 		=> $nama_penitip,
			'time_in' 			=> $time_in,
			'time_out' 			=> $time_out,
			'lama_penitipan'	=> $lama_penitipan,
			'tarif_penitipan' 	=> $tarif_penitipan,
			'uang_diterima'		=> $uang_diterima,
			'uang_dikembalikan' => $uang_dikembalikan,
			'denda' 			=> $denda,
			'tarif_cuci' 		=> $tarif_cuci,
			'time_out' 			=> $time_out
		);

		$waktuKeluar = array('time_out'=> $time_out);
		$object_titip = array('status'=> $status_titip);
		$object_desc = array('status'=> $status_desc);
		$object = array('status'=> $status);

		$this->M_Transaksi->input_data($data,'purchase');
		$this->db->where('kode_penitipan', $kode_penitipan);
		$this->db->update('penitipan', $waktuKeluar);
		$this->db->update('penitipan', $object_titip);
		$this->db->where('kode_deskripsi', $kode_deskripsi);
		$this->db->update('penitipan', $object_desc);
		$this->db->where('kode_loker', $kode_loker);
		$this->db->update('loker', $object);
		redirect('transaksi/data_transaksi','refresh');
	}

	public function cetakPembayaran($kode_pembayaran)
	{
		$data['bayar'] = $this->M_Transaksi->getWhere($kode_pembayaran);
		$this->pdf->setPaper('A4', 'portrait');
		$this->pdf->filename = "Cetak Pembayaran.pdf";
		$this->pdf->load_view('admin/purchase/cetak_pembayaran', $data);
	}

	public function Pembayaran($kode_pembayaran)
	{
		$data['detail'] = $this->M_Transaksi->getWhere($kode_pembayaran);
		$this->render_page('admin/purchase/detail', $data);
	}


}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */