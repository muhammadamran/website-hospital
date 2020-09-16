<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebProfile extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	function index(){
		$this->load->view('index');
	}

///////////////////////////PROFIL/////////////////////////////////////////////// 
	function indexProfile(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/Profile/profile');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

///////////////////////////INDIKATOR MUTU/////////////////////////////////////////////// 
	function indexIndikatorMutu(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/Profile/indikatormutu');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
}