<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPelayananMedis extends CI_Controller {

	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != 'login'){
			redirect('Admin');
		}
	}
	function index(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/pelayananmedis');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexHD(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/HD');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexRJ(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/RJ');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}
}