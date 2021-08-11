<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class MY_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function render_page($content, $data = NULL)
	{
		$data['head'] = $this->load->view('admin/template/head', $data, TRUE);
		$data['header'] = $this->load->view('admin/template/header', $data, TRUE);
		$data['topmenu'] = $this->load->view('admin/template/topmenu', $data, TRUE);
		$data['body'] = $this->load->view($content, $data, TRUE);
		$data['footer'] = $this->load->view('admin/template/footer', $data, TRUE);

		$this->load->view('admin/overview', $data);
	}
}
?>