<?php 
/**
 * 
 */
class Template
{
	protected $_ci;

	function __construct()
	{
		parent::__construct();
		$this->$_ci = & get_instance();
	}

	public function utama($content, $data = NULL)
	{
		$data['header'] = $this->_ci->load->view('template/header', TRUE);
		$data['body'] = $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] = $this->_ci->load->view('template/footer', TRUE);

		$this->_ci->load->view('template/', $data);
	}
}
 ?>