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
	function indexFAQ(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/FAQ');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexHubungi(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/Hubungi');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexKontakKami(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/KontakKami');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}
/////////////////// FAQ///////////////////////////
// INPUT DATA 
	public function createfaq()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'pertanyaan' => $this->input->post('pertanyaan'),
			'jawaban' => $this->input->post('jawaban'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'FAQ RS'
		);
		
		$this->M_MasterData->input_faq('tb_faq', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminKontak/indexFAQ', $data);
	}

	// EDIT 
	public function updateisifaq($id)
	{
		if(isset($_POST['updateisifaq']))
		{	
			$data = array(
				'pertanyaan' => $this->input->post('pertanyaan'),
				'jawaban' => $this->input->post('jawaban')
			);
			$this->M_MasterData->update_faq_rs('tb_faq',$data, $id);
		} 
		redirect('AdminKontak/indexFAQ');	
	}

	// HAPUS 
	public function deletefaq($id)
	{
		if(isset($_POST['deletefaq']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_faq_rs('tb_faq',$data, $id);
		} 
		redirect('AdminKontak/indexFAQ');	
	}

	// HIDDEN
	public function updatehiddenfaq($id)
	{
		if(isset($_POST['updatehiddenfaq']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);

			$this->M_MasterData->update_faq_rs('tb_faq',$data, $id);
		} 
		redirect('AdminKontak/indexFAQ');	
	}

	// SHOW
	public function updateshowfaq($id)
	{
		if(isset($_POST['updateshowfaq']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_faq_rs('tb_faq',$data, $id);
		} 
		redirect('AdminKontak/indexFAQ');	
	}
///////////////////END FAQ///////////////////////////
/////////////////// HUBUNGI ///////////////////////////
// INPUT DATA 
	public function createhubungi()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'nama_pengunjung' => $this->input->post('nama_pengunjung'),
			'email_pengunjung' => $this->input->post('email_pengunjung'),
			'notel_pengunjung' => $this->input->post('notel_pengunjung'),
			'pesan' => $this->input->post('pesan')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'HUBUNGI (PESAN PENGUNJUNG)'
		);
		
		$this->M_MasterData->input_hubungi('tb_hubungi', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		// redirect('WebKontak/indexHubungiThx');
		$this->load->view('page/Kontak/hubungithx');
	}
/////////////////// END HUBUNGI ///////////////////////////
/////////////////// KONTAK KAMI///////////////////////////
// INPUT DATA 
	public function createkontakkami()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'label_kk' => $this->input->post('label_kk'),
			'isi_kk' => $this->input->post('isi_kk'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'KONTAK KAMI'
		);
		
		$this->M_MasterData->input_kontakkami('tb_kontakkami', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminKontak/indexKontakKami', $data);
	}

	// EDIT 
	public function updateisikontakkami($id)
	{
		if(isset($_POST['updateisikontakkami']))
		{	
			$data = array(
				'label_kk' => $this->input->post('label_kk'),
				'isi_kk' => $this->input->post('isi_kk')
			);
			$this->M_MasterData->update_kontak_kami('tb_kontakkami',$data, $id);
		} 
		redirect('AdminKontak/indexKontakKami');	
	}

	// HAPUS 
	public function deletekontakkami($id)
	{
		if(isset($_POST['deletekontakkami']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_kontak_kami('tb_kontakkami',$data, $id);
		} 
		redirect('AdminKontak/indexKontakKami');	
	}

	// HIDDEN
	public function updatehiddenkontakkami($id)
	{
		if(isset($_POST['updatehiddenkontakkami']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);

			$this->M_MasterData->update_kontak_kami('tb_kontakkami',$data, $id);
		} 
		redirect('AdminKontak/indexKontakKami');	
	}

	// SHOW
	public function updateshowkontakkami($id)
	{
		if(isset($_POST['updateshowkontakkami']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_kontak_kami('tb_kontakkami',$data, $id);
		} 
		redirect('AdminKontak/indexKontakKami');	
	}
///////////////////END KONTAK KAMI///////////////////////////
}