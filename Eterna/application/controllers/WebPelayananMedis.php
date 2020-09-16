<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebPelayananMedis extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	function index(){
		$this->load->view('index');
	}
///////////////////////////HEMODIALISA/////////////////////////////////////////////// 
	function indexHD(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/HD');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
///////////////////////////IGD/////////////////////////////////////////////// 
	function indexIGD(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/IGD');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

	function indexAlurIGD(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/AlurIGD');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
///////////////////////////RAWAT JALAN/////////////////////////////////////////////// 
	function indexRJ(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/RJ');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

	function indexAlurRJ(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/AlurRJ');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

	function indexAdmRJ(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/AdmRJ');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
///////////////////////////RAWAT INAP/////////////////////////////////////////////// 
	function indexRI(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/RI');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

	function indexAlurRI(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/AlurRI');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

	function indexAdmRI(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/AdmRI');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

	function indexTTRI(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/TTRI');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

	function indexHKPRI(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/HKPRI');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
///////////////////////////CAPD/////////////////////////////////////////////// 
	function indexCAPD(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/CAPD');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

	function indexAlurCAPD(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/AlurCAPD');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
///////////////////////////BEDAH/////////////////////////////////////////////// 
	function indexBedah(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/Bedah');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

	function indexAlurBedah(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/AlurBedah');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
///////////////////////////MCU/////////////////////////////////////////////// 
	function indexMCU(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/MCU');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}

	function indexAlurMCU(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/PelayananMedis/AlurMCU');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
}