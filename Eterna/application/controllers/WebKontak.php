<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebKontak extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

///////////////////////////FAQ/////////////////////////////////////////////// 
	function indexFAQ(){
		$this->load->view('include/themehead');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/Kontak/FAQ');
		// $this->load->view('include/footer');
		$this->load->view('include/themethirdpart');
	}

///////////////////////////HUBUNGI/////////////////////////////////////////////// 
	function indexHubungi(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/Kontak/hubungi');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

	function indexHubungiThx(){
		$this->load->view('page/Kontak/hubungithx');
	}
}