<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* ingat kalau satu file Controller hanya ada satu Class. Dan nama file Controller dan Class harus SAMA */
class con_makanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_makanan');

		
	}
	public function index(){
		$this->load->view('header');
		$this->load->view('v_makanan');
		$this->load->view('footer');
	} 

	public function otoID(){
		$data=$this->m_makanan->otoID()->row();
		$this	->output
				->set_status_header(202)
				->set_content_type('aplication/json')
				->set_output(json_encode($data, JSON_PRETTY_PRINT))
				->_display();
		exit;			
		
	}

	public function tampil()
	{
		$data = $this->m_makanan->tampilData()->result();
		$this	->output
				->set_status_header(202)
				->set_content_type('aplication/json')
				->set_output(json_encode($data, JSON_PRETTY_PRINT))
				->_display();
		exit;
	}


	
	
	public function gethapusMakanan($id)
	{
		$data = $this->m_makanan->gethapus($id)->row();
		$this	->output
				->set_status_header(202)
				->set_content_type('aplication/json')
				->set_output(json_encode($data, JSON_PRETTY_PRINT))
				->_display();
		exit;
	}
	
// $this->session->set_flashdata('flash', 'Ditambahkan');
		// redirect('KelasController');
	public function hapusMakanan($data)
	{
		$data = $this->m_makanan->hapus($data);
		$this	->output
				->set_status_header(202)
				->set_content_type('aplication/json')
				->set_output(json_encode($data, JSON_PRETTY_PRINT))
				->_display();
		exit;
	}

	public function getEdit($id)
	{
		$response = $this->m_makanan->getDataE($id)->row();
		$this	->output
				->set_status_header(202)
				->set_content_type('aplication/json')
				->set_output(json_encode($response, JSON_PRETTY_PRINT))
				->_display();
		exit;
	}

	public function input(){
		parse_str(file_get_contents('php://input'), $data);
		$this->m_makanan->input($data);
		
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

	public function edit(){
		parse_str(file_get_contents('php://input'), $data);
		$this->m_makanan->edit($data);
		
		$data = array(
			'info' => 'Data berhasil diubah'
		);
		$this->output
			 ->set_status_header(200)
			 ->set_content_type('application/json')
			 ->set_output(json_encode($data, JSON_PRETTY_PRINT))
			 ->_display();
		exit;
	}
	
	public function uploadGambar (){
		$this->load->view('upload');
	}
	  

}