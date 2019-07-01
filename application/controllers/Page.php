<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function index(){
    //Allowing akses to admin only
      if($this->session->userdata('user_kategori')==='1'){
          $this->load->view('header');
          $this->load->view('v_makanan');
          $this->load->view('footer');
      }else{
          echo "Access Denied";
      }

  }

  function staff(){
    //Allowing akses to staff only
    if($this->session->userdata('user_kategori')==='2'){
      $this->load->view('header');
          $this->load->view('v_menu');
          $this->load->view('footer');
    }else{
        echo "Access Denied";
    }
  }

  function author(){
    //Allowing akses to author only
    if($this->session->userdata('user_kategori')==='3'){
      $this->load->view('header');
          $this->load->view('v_menu');
          $this->load->view('footer');
    }else{
        echo "Access Denied";
    }
  }

}
