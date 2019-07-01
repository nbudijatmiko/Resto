<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* ingat kalau satu file Controller hanya ada satu Class. Dan nama file Controller dan Class harus SAMA */
class con_kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kategori');
		
	}
	public function index(){
		// $this->load->view('header');
		$this->load->view('header');
		// $this->load->view('footer');
	}

	public function tampil()
	{
		$response = $this->m_kategori->tampilData()->result();
		$this	->output
				->set_status_header(202)
				->set_content_type('aplication/json')
				->set_output(json_encode($response, JSON_PRETTY_PRINT))
				->_display();
		exit;
	}

}