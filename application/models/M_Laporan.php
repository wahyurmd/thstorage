<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Laporan extends CI_Model {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function getCuciHelm()
	{
		$this->db->order_by('ch.kode_penitipan', 'desc');
		return $this->db->from('cuci_helm as ch')
		->join('penitipan','penitipan.kode_penitipan=ch.kode_penitipan')
		->join('deskripsi_penitipan','deskripsi_penitipan.kode_deskripsi=penitipan.kode_deskripsi')
		->join('merk','merk.kode_merk=deskripsi_penitipan.kode_merk')
		->join('loker','loker.kode_loker=penitipan.kode_loker')
		->join('helm','helm.kode_helm=deskripsi_penitipan.kode_helm')
		->where('deskripsi_penitipan.cuci_helm','Ya')
		->get()->result();
	}

	public function getHarian()
	{
		$vdate = date('Y-m-d');
		$query = $this->db->where('date(time_in) = ', $vdate)->get('penitipan');
		if ($query->num_rows() > 0) {
			return $query->num_rows;
		}
		else {
			return 0;
		}
	}

	public function getMingguan()
	{
		$query = $this->db->query('SELECT COALESCE(COUNT(*),0) AS jumlah FROM penitipan WHERE YEARWEEK(time_in)=YEARWEEK(NOW()) GROUP BY YEARWEEK(time_in)')->result();
		return $query;
		// $this->db->select('count(time_in) as jumlah');
		// $this->db->from('penitipan');
		// $this->db->where('week(time_in)', 'week(now())');
		// $this->db->group_by('week(time_in)');
		// $query = $this->db->get();
		// if ($query->num_rows() < 0) {
		// 	return 0;
		// } else if ($query->num_rows() > 0) {
		// 	return $query->num_rows;
		// }
	}

	public function getBulanan()
	{
		$vmonth = date('m');
		$query = $this->db->where('month(time_in) = ', $vmonth)->get('penitipan');
		if ($query->num_rows() > 0) {
			return $query->num_rows;
		}
		else {
			return 0;
		}
	}

	public function laporanBulanan()
	{
		$vmonth = date('m');
		$this->db->order_by('kode_pembayaran', 'desc');
		return $this->db->from('purchase')
		->join('mst_user','mst_user.nip=purchase.nip')
		->where('purchase.status','1')
		->where('month(time_out) = ', $vmonth)->get()->result();
	}

}

/* End of file M_Laporan.php */
/* Location: ./application/models/M_Laporan.php */