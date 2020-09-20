<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminBeranda extends CI_Controller {

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
		$this->load->view('protected/beranda');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}
///////////////////////////////SLIDER///////////////////////////
	// INPUT DATA PROFILE
	public function createslider()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'SLIDER'
		);

		if (!empty($_FILES['slider']['name'])) {
			$upload = $this->_do_upload_slider();
			$data['slider'] = $upload;
		}
		$this->M_MasterData->input_slider('tb_slider', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminBeranda', $data);
	}

	private function _do_upload_slider()
	{
		$config['upload_path'] 		= 'assets/images/slide/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('slider')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminBeranda');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR slider
	public function updategambarslider($id){

		$config['upload_path']="assets/images/slide/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("slider")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'slider' => $gambar,
			);

			$result= $this->M_MasterData->update_slider('tb_slider',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminBeranda');
	}

	// HAPUS slider
	public function deleteslider($id)
	{
		if(isset($_POST['deleteslider']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_slider('tb_slider',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// HIDDEN slider
	public function updatehiddenslider($id)
	{
		if(isset($_POST['updatehiddenslider']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_slider('tb_slider',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// SHOW slider
	public function updateshowslider($id)
	{
		if(isset($_POST['updateshowslider']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_slider('tb_slider',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

///////////////////////////////REKANAN/MITRA///////////////////////////
	// INPUT DATA PROFILE
	public function createrekan()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'REKANAN/MITRA'
		);

		if (!empty($_FILES['rekan']['name'])) {
			$upload = $this->_do_upload_rekan();
			$data['rekan'] = $upload;
		}
		$this->M_MasterData->input_rekan('tb_rekan', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminBeranda', $data);
	}

	private function _do_upload_rekan()
	{
		$config['upload_path'] 		= 'assets/img/clients/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('rekan')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminBeranda');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR REKAN
	public function updategambarrekan($id){

		$config['upload_path']="assets/img/clients/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("rekan")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'rekan' => $gambar
			);

			$result= $this->M_MasterData->update_rekan('tb_rekan',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminBeranda');
	}

	// HAPUS REKAN
	public function deleterekan($id)
	{
		if(isset($_POST['deleterekan']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_rekan('tb_rekan',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// HIDDEN REKAN
	public function updatehiddenrekan($id)
	{
		if(isset($_POST['updatehiddenrekan']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			// var_dump($data);exit();
			$this->M_MasterData->update_rekan('tb_rekan',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// SHOW REKAN
	public function updateshowrekan($id)
	{
		if(isset($_POST['updateshowrekan']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_rekan('tb_rekan',$data, $id);
		} 
		redirect('AdminBeranda');	
	}
}