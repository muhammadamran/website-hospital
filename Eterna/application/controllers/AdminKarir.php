<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminKarir extends CI_Controller {

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
		$this->load->view('protected/karir');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}
////////////////////////////////////KARIR//////////////////////////////////
	// INPUT DATA 
	public function create()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'admin_name' => $this->input->post('admin_name'),
			'judul_karir' => $this->input->post('judul_karir'),
			'isi_karir' => $this->input->post('isi_karir'),
			'created_date' => $this->input->post('created_date'),
			'due_date' => $this->input->post('due_date'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'KARIR'
		);

		if (!empty($_FILES['link_karir']['name'])) {
			$upload = $this->_do_upload();
			$data['link_karir'] = $upload;
		}
		$this->M_MasterData->input_karir('tb_karir', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminKarir', $data);
	}

	private function _do_upload()
	{
		$config['upload_path'] 		= 'assets/images/karir/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_karir')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminKarir');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR 
	public function updategambar($id){

		$config['upload_path']="assets/images/karir/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_karir")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_karir' => $gambar,
			);

			$result= $this->M_MasterData->update_karir_rs('tb_karir',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminKarir');
	}

	// UPDATE
	public function updateisi($id)
	{
		if(isset($_POST['updateisi']))
		{	
			$data = array(
				'judul_karir' => $this->input->post('judul_karir'),
				'isi_karir' => $this->input->post('isi_karir'),
				'due_date' => $this->input->post('due_date')
			);
			$this->M_MasterData->update_karir_rs('tb_karir',$data, $id);
		} 
		redirect('AdminKarir');	
	}

	// HAPUS 
	public function delete($id)
	{
		if(isset($_POST['delete']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_karir_rs('tb_karir',$data, $id);
		} 
		redirect('AdminKarir');	
	}

	// HIDDEN 
	public function updatehidden($id)
	{
		if(isset($_POST['updatehidden']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_karir_rs('tb_karir',$data, $id);
		} 
		redirect('AdminKarir');	
	}

	// SHOW 
	public function updateshow($id)
	{
		if(isset($_POST['updateshow']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_karir_rs('tb_karir',$data, $id);
		} 
		redirect('AdminKarir');	
	}
////////////////////////////////////END KARIR//////////////////////////////	
}