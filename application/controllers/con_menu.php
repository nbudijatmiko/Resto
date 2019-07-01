<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* ingat kalau satu file Controller hanya ada satu Class. Dan nama file Controller dan Class harus SAMA */
class con_menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_makanan');
		$this->load->model('m_menu');
		
	}
	public function index(){
		$this->load->view('header');
		$this->load->view('v_menu');
		$this->load->view('footer');
	} 
	public function addPesanan(){
		parse_str(file_get_contents('php://input'), $data);
		
		$data = array(
			'info' => 'Data berhasil ditambah'
		);
		$this->output
			 ->set_status_header(200)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($data, JSON_PRETTY_PRINT))
			 ->_display();
		exit;
	}

	  

}