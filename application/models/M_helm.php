<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_helm extends CI_Model {

	function getData()
	{
		$this->db->order_by('kode_penitipan', 'desc');
		return $this->db->from('penitipan')
		->join('deskripsi_penitipan','deskripsi_penitipan.kode_deskripsi=penitipan.kode_deskripsi')
		->join('merk','merk.kode_merk=deskripsi_penitipan.kode_merk')
		->join('loker','loker.kode_loker=penitipan.kode_loker')
		->join('helm','helm.kode_helm=deskripsi_penitipan.kode_helm')
		->where('penitipan.status', '1')
		->where('deskripsi_penitipan.status', '1')
		->get()->result();
	}

	function getWhere($kode_penitipan)
	{
		$this->db->order_by('kode_penitipan', 'asc');
		return $this->db->from('penitipan')
		->join('deskripsi_penitipan','deskripsi_penitipan.kode_deskripsi=penitipan.kode_deskripsi')
		->join('merk','merk.kode_merk=deskripsi_penitipan.kode_merk')
		->join('loker','loker.kode_loker=penitipan.kode_loker')
		->join('helm','helm.kode_helm=deskripsi_penitipan.kode_helm')
		->join('mst_user','mst_user.nip=penitipan.nip')
		->where('penitipan.kode_penitipan', $kode_penitipan)
		->get()->result();
	}

	function getMerk()
	{
		return $this->db->query("SELECT * FROM merk WHERE status='1'");
	}

	function getLoker()
	{
		return $this->db->query("SELECT * FROM loker WHERE status='1'");
	}

	function getHelm()
	{
		return $this->db->query("SELECT * FROM helm WHERE status='1'");
	}

	function input_data($data,$table)
	{
		$this->db->insert($table, $data);
	}

	function statusUpdate($where, $loker)
	{
		$this->db->set('status','0');
		
	}

}

/* End of file M_helm.php */
/* Location: ./application/models/M_helm.php */