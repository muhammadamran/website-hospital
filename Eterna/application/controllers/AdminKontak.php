<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminKontak extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_MasterData');
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
}