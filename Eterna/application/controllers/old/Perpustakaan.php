<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpustakaan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_MasterData');
	}

	function index(){
		$this->load->view('include/head');
		$this->load->view('include/sidebar');
		$this->load->view('page/Perpustakaan/perpustakaan');
		$this->load->view('include/thirdpart');
	}
}