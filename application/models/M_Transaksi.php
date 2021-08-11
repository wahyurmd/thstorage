<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Transaksi extends CI_Model {

	function getData()
	{
		$this->db->order_by('kode_penitipan', 'asc');
		return $this->db->from('penitipan')
		->join('deskripsi_penitipan','deskripsi_penitipan.kode_deskripsi=penitipan.kode_deskripsi')
		->join('merk','merk.kode_merk=deskripsi_penitipan.kode_merk')
		->join('loker','loker.kode_loker=penitipan.kode_loker')
		->join('helm','helm.kode_helm=deskripsi_penitipan.kode_helm')
		->where('penitipan.status', '1')
		->where('deskripsi_penitipan.status', '1')
		->get()->result();
	}

	function getAutocomplete($kode_penitipan)
	{
		$this->db->where('kode_penitipan', $kode_penitipan);
		$this->db->order_by('kode_penitipan', 'ASC');
		return $this->db->from('penitipan')
		->join('deskripsi_penitipan','deskripsi_penitipan.kode_deskripsi=penitipan.kode_deskripsi')
		->get()->result();
	}

	function getTarif()
	{
		return $this->db->from('tarif')->get()->result();
	}

	function getPurchase()
	{
		$this->db->order_by('kode_pembayaran', 'desc');
		return $this->db->from('purchase')
		->join('mst_user','mst_user.nip=purchase.nip')
		->where('purchase.status','1')->get()->result();
	}

	function input_data($data,$table)
	{
		$this->db->insert($table, $data);
	}

	function getWhere($kode_pembayaran)
	{
		$this->db->order_by('kode_pembayaran', 'asc');
		return $this->db->from('purchase')
		->join('penitipan','penitipan.kode_penitipan=purchase.kode_penitipan')
		->join('deskripsi_penitipan','deskripsi_penitipan.kode_deskripsi=purchase.kode_deskripsi')
		->join('merk','merk.kode_merk=deskripsi_penitipan.kode_merk')
		->join('loker','loker.kode_loker=penitipan.kode_loker')
		->join('helm','helm.kode_helm=deskripsi_penitipan.kode_helm')
		->join('mst_user','mst_user.nip=purchase.nip')
		->where('purchase.kode_pembayaran', $kode_pembayaran)
		->get()->result();
	}

}

/* End of file M_Transaksi.php */
/* Location: ./application/models/M_Transaksi.php */