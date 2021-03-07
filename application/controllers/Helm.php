<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helm extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_helm','user_model'));
		$this->load->helper('url');
		$this->load->library('pdf');
		if (!$this->session->userdata('authenticated')) redirect('auth/login', 'refresh');
	}

	public function index()
	{
		redirect('helm/data_penitipan','refresh');
	}

	public function data_penitipan()
	{
		$data['helm'] = $this->M_helm->getData();
		$this->render_page('admin/helm/data_penitipan', $data);
	}

	public function input_penitipan()
	{
		date_default_timezone_set('Asia/Jakarta');

		// GENERATE KODE ACAK PENITIPAN
		$kodePenitipan = date('YmdHis');

		// GENERATE KODE ACAK DESKRIPSI
		$kodeDeskripsi = date('YmdHis');

		$data = array(
			'kode_penitipan' => $kodePenitipan,
			'kode_deskripsi' => $kodeDeskripsi
		);

		$data['merk'] = $this->M_helm->getMerk();
		$data['loker'] = $this->M_helm->getLoker();
		$data['jenis'] = $this->M_helm->getHelm();
		$this->render_page('admin/helm/input_helm', $data);
	}

	public function proses_input()
	{
		$kode_penitipan = $this->input->post('kode_penitipan');
		$kode_deskripsi = $this->input->post('kode_deskripsi');
		$nip 			= $this->input->post('nip');
		$nama_penitip 	= $this->input->post('nama_penitip');
		$tgl_lahir 		= date_format(date_create($this->input->post('tgl_lahir')), 'Y-m-d');
		$kode_merk 		= $this->input->post('kode_merk');
		$kode_helm 		= $this->input->post('kode_helm');
		$warna_helm 	= $this->input->post('warna_helm');
		$kode_loker 	= $this->input->post('kode_loker');
		$keterangan 	= $this->input->post('keterangan');
		$cuci_helm 		= $this->input->post('cuci_helm');
		$titip_barang 	= $this->input->post('titip_barang');
		$time_in	 	= $this->input->post('time_in');
		$status	 		= 0;

		$dataP = array(
			'kode_penitipan' 	=> $kode_penitipan,
			'kode_deskripsi' 	=> $kode_deskripsi,
			'nip' 				=> $nip,
			'nama_penitip' 		=> $nama_penitip,
			'tgl_lahir'			=> $tgl_lahir,
			'kode_loker' 		=> $kode_loker,
			'time_in' 			=> $time_in
		);

		$dataDP = array(
			'kode_deskripsi' 	=> $kode_deskripsi,
			'kode_merk' 		=> $kode_merk,
			'kode_helm' 		=> $kode_helm,
			'warna_helm' 		=> $warna_helm,
			'keterangan' 		=> $keterangan,
			'cuci_helm' 		=> $cuci_helm,
			'titip_barang' 		=> $titip_barang
		);

		$dataCH = array(
			'kode_penitipan' 	=> $kode_penitipan
		);

		$object = array('status'=> $status);

		$this->M_helm->input_data($dataP,'penitipan');
		$this->M_helm->input_data($dataDP,'deskripsi_penitipan');
		$this->M_helm->input_data($dataCH,'cuci_helm');
		$this->db->where('kode_loker', $kode_loker);
		$this->db->update('loker', $object);
		redirect('helm/data_penitipan','refresh');
	}

	public function cetakPenitipan($kode_penitipan)
	{
		$data['penitipan'] = $this->M_helm->getWhere($kode_penitipan);
		$this->pdf->setPaper('A4', 'portrait');
		$this->pdf->filename = "Cetak Penitipan.pdf";
		$this->pdf->load_view('admin/helm/cetak_penitipan', $data);
	}

	public function Penitipan($kode_penitipan)
	{
		$data['detail'] = $this->M_helm->getWhere($kode_penitipan);
		$this->render_page('admin/helm/detail', $data);
	}

}

/* End of file Helm.php */
/* Location: ./application/controllers/Helm.php */