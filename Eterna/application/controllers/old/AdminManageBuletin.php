<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminManageBuletin extends CI_Controller {

	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != 'login'){
			redirect('Admin');
		}
	}
	function index(){
		$this->load->view('admin/include/head');
		$this->load->view('admin/ad_mg_buletin');
		$this->load->view('admin/include/footer');
		$this->load->view('admin/include/thirdparty');
	}
}