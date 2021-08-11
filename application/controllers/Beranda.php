<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('user_model','M_Laporan'));
		if (!$this->session->userdata('authenticated')) redirect('auth/login', 'refresh');
	}

	public function index()
	{

		$data['harian'] = $this->M_Laporan->getHarian();
		$data['mingguan'] = $this->M_Laporan->getMingguan();
		$data['bulanan'] = $this->M_Laporan->getBulanan();
		$data['cuci'] = $this->M_Laporan->getCuciHelm();
		$data['laporan'] = $this->M_Laporan->laporanBulanan();
		$this->render_page('admin/dashboard', $data);
	}

	public function prosesCuci($kode_penitipan)
	{
		$status = 1;
		$statusCuci = array('status_cuci'=>$status);
		$this->db->where('kode_penitipan', $kode_penitipan);
		$this->db->update('cuci_helm', $statusCuci);
		redirect('beranda','refresh');
	}

	public function selesaiCuci($kode_penitipan)
	{
		$status = 2;
		$statusCuci = array('status_cuci'=>$status);
		$this->db->where('kode_penitipan', $kode_penitipan);
		$this->db->update('cuci_helm', $statusCuci);
		redirect('beranda','refresh');
	}

}

/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */