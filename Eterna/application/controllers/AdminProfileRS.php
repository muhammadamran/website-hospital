<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProfileRS extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_MasterData');
		if($this->session->userdata('status') != 'login'){
			redirect('Admin');
		}
	}
	function indexRS(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/profile-rs');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	// INPUT DATA PROFILE
	public function create()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'judul_1' => $this->input->post('judul_1'),
			'isi_1' => $this->input->post('isi_1'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'PROFILE RUMAH SAKIT'
		);

		if (!empty($_FILES['link_1']['name'])) {
			$upload = $this->_do_upload();
			$data['link_1'] = $upload;
		}
		$this->M_MasterData->input_rumahsakit('tb_rumahsakit', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminProfileRS/indexRS', $data);
	}

	private function _do_upload()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_1')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminProfileRS/indexRS');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR ONE
	public function updategambarone($id){

		$config['upload_path']="assets/images/rumah-sakit/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_1")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_1' => $gambar,
			);

			$result= $this->M_MasterData->update_rumahsakit('tb_rumahsakit',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminProfileRS/indexRS');
	}

	// UPDATE JUDUL ONE
	public function updatejudulone($id)
	{
		if(isset($_POST['updatejudulone']))
		{	
			$data = array(
				'judul_1' => $this->input->post('judul_1'),
				'isi_1' => $this->input->post('isi_1')
			);
			$this->M_MasterData->update_rumahsakit('tb_rumahsakit',$data, $id);
		} 
		redirect('AdminProfileRS/indexRS');	
	}

	// UPDATE JUDUL TWO
	public function updatejudultwo($id)
	{
		if(isset($_POST['updatejudultwo']))
		{	
			$data = array(
				'link_2' => $this->input->post('link_2'),
				'judul_2' => $this->input->post('judul_2'),
				'isi_2' => $this->input->post('isi_2')
			);
			$this->M_MasterData->update_rumahsakit('tb_rumahsakit',$data, $id);
		} 
		redirect('AdminProfileRS/indexRS');	
	}

	// UPDATE MOTTO VISI MISI
	public function updatemvm($id)
	{
		if(isset($_POST['updatemvm']))
		{	
			$data = array(
				'motto' => $this->input->post('motto'),
				'visi' => $this->input->post('visi'),
				'misi' => $this->input->post('misi')
			);
			$this->M_MasterData->update_rumahsakit('tb_rumahsakit',$data, $id);
		} 
		redirect('AdminProfileRS/indexRS');	
	}

	// HAPUS PROFILE
	public function hapus($id)
	{
		if(isset($_POST['hapus']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_rumahsakit('tb_rumahsakit',$data, $id);
		} 
		redirect('AdminProfileRS/indexRS');	
	}

	// HIDDEN PROFILE
	public function updatehidden($id)
	{
		if(isset($_POST['updatehidden']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_rumahsakit('tb_rumahsakit',$data, $id);
		} 
		redirect('AdminProfileRS/indexRS');	
	}

	// SHOW PROFILE
	public function updateshow($id)
	{
		if(isset($_POST['updateshow']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_rumahsakit('tb_rumahsakit',$data, $id);
		} 
		redirect('AdminProfileRS/indexRS');	
	}
}