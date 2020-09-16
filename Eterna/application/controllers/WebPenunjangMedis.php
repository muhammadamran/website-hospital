<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebPenunjangMedis extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	function index(){
		$this->load->view('index');
	}
///////////////////////////FARMASI/////////////////////////////////////////////// 
	function indexFarmasi(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PenunjangMedis/Farmasi');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
///////////////////////////LABORATIRIUM/////////////////////////////////////////////// 
	function indexLab(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PenunjangMedis/Lab');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

	function indexAlurLab(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PenunjangMedis/AlurLab');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
///////////////////////////RADIOLOGI/////////////////////////////////////////////// 
	function indexRadiologi(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PenunjangMedis/Radiologi');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

	function indexAlurRadiologi(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PenunjangMedis/AlurRadiologi');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
}