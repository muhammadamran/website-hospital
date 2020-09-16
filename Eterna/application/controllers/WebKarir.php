<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebKarir extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	function index(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/Karir/karir');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
}