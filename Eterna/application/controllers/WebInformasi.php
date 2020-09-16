<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebInformasi extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	function index(){
		$this->load->view('index');
	}
///////////////////////////JADWAL DOKTER/////////////////////////////////////////////// 
	function indexJadwalDokter(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/Informasi/jadwaldokter');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
///////////////////////////KEGIATAN ILMIAH///////////////////////////////////////////////
	function indexKegiatanIlmiah(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/Informasi/kegiatanilmiah');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
///BULETIN
///ARTIKEL KESEHATAN
///JURNAL KESEHATAN
///BERITA KESEHATAN
///KEMENKES
///BPJS
///////////////////////////GALERI/////////////////////////////////////////////// 
	function indexGaleri(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/Informasi/galeri');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
///////////////////////////DIKLAT/////////////////////////////////////////////// 
	function indexDiklat(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/Informasi/diklat');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
///////////////////////////BPJS/////////////////////////////////////////////// 
	function indexBPJS(){
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('page/Informasi/bpjs');
		$this->load->view('include/footer');
		$this->load->view('include/thirdpart');
	}
}