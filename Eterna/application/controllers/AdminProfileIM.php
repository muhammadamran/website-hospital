<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProfileIM extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_MasterData');
		if($this->session->userdata('status') != 'login'){
			redirect('Admin');
		}
	}
	function indexIM(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/profile-indikatormutu');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}


	// INPUT DATA PROFILE
	public function create()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'title_head' => $this->input->post('title_head'),
			'mail' => $this->input->post('mail'),
			'telepone' => $this->input->post('telepone'),
			'whatsapp' => $this->input->post('whatsapp'),
			'alamat' => $this->input->post('alamat'),
			'facebook' => $this->input->post('facebook'),
			'twitter' => $this->input->post('twitter'),
			'youtube' => $this->input->post('youtube'),
			'instagram' => $this->input->post('instagram'),
			'slogan' => $this->input->post('slogan'),
			'pesan' => $this->input->post('pesan'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'PROFILE INFORMASI'
		);

		if (!empty($_FILES['icon']['name'])) {
			$upload = $this->_do_upload();
			$data['icon'] = $upload;
		}
		$this->M_MasterData->input_profile('tb_profile', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminProfileIM/indexIM', $data);
	}

	private function _do_upload()
	{
		$config['upload_path'] 		= 'assets/images/icon/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('icon')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminProfileIM/indexIM');
		}
		return $this->upload->data('file_name');
	}

	// UPDATE PROFILE
	public function update($id)
	{
		if(isset($_POST['update']))
		{	
			$data = array(
				'title_head' => $this->input->post('title_head'),
				'mail' => $this->input->post('mail'),
				'telepone' => $this->input->post('telepone'),
				'whatsapp' => $this->input->post('whatsapp'),
				'alamat' => $this->input->post('alamat'),
				'facebook' => $this->input->post('facebook'),
				'twitter' => $this->input->post('twitter'),
				'youtube' => $this->input->post('youtube'),
				'instagram' => $this->input->post('instagram'),
				'slogan' => $this->input->post('slogan'),
				'pesan' => $this->input->post('pesan')
			);
			$this->M_MasterData->update_profile('tb_profile',$data, $id);
		} 
		redirect('AdminProfileIM/indexIM');	
	}

	// UPDATE ICON
	public function updateicon($id){

		$config['upload_path']="assets/images/icon/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("icon")){
			$file = $this->upload->data();
			
			$gambaricon= $file['file_name'];
			
			$data = array(
				'icon' => $gambaricon
			);

			$result= $this->M_MasterData->update_profile('tb_profile',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminProfileIM/indexIM');
	}

	// UPDATE LOGO
	public function updatelogo($id){

		$config['upload_path']="assets/images/logo/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("logo")){
			$file = $this->upload->data();
			
			$gambarlogo= $file['file_name'];
			
			$data = array(
				'logo' => $gambarlogo
			);

			$result= $this->M_MasterData->update_profile('tb_profile',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminProfileIM/indexIM');
	}

	// UPDATE LOGO FOOTER
	public function updatelogofooter($id){

		$config['upload_path']="assets/images/footer/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("logo_footer")){
			$file = $this->upload->data();
			
			$gambarlogo_footer= $file['file_name'];
			
			$data = array(
				'logo_footer' => $gambarlogo_footer
			);

			$result= $this->M_MasterData->update_profile('tb_profile',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminProfileIM/indexIM');
	}

	// UPDATE FOOTER ONE
	public function updatefooterone($id){

		$config['upload_path']="assets/images/footer/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("galerione")){
			$file = $this->upload->data();
			
			$ddgalerione= $file['file_name'];
			
			$data = array(
				'galerione' => $ddgalerione
			);

			$result= $this->M_MasterData->update_profile('tb_profile',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminProfileIM/indexIM');
	}

	// UPDATE FOOTER TWO
	public function updatefootertwo($id){

		$config['upload_path']="assets/images/footer/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("galeritwo")){
			$file = $this->upload->data();
			
			$ddgaleritwo= $file['file_name'];
			
			$data = array(
				'galeritwo' => $ddgaleritwo
			);

			$result= $this->M_MasterData->update_profile('tb_profile',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminProfileIM/indexIM');
	}

	// UPDATE FOOTER THREE
	public function updatefooterthree($id){

		$config['upload_path']="assets/images/footer/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("galerithree")){
			$file = $this->upload->data();
			
			$ddgalerithree= $file['file_name'];
			
			$data = array(
				'galerithree' => $ddgalerithree
			);

			$result= $this->M_MasterData->update_profile('tb_profile',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminProfileIM/indexIM');
	}

	// UPDATE FOOTER FOUR
	public function updatefooterfour($id){

		$config['upload_path']="assets/images/footer/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("galerifour")){
			$file = $this->upload->data();
			
			$ddgalerifour= $file['file_name'];
			
			$data = array(
				'galerifour' => $ddgalerifour
			);

			$result= $this->M_MasterData->update_profile('tb_profile',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminProfileIM/indexIM');
	}

	// HAPUS PROFILE
	public function hapus($id)
	{
		if(isset($_POST['hapus']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_profile('tb_profile',$data, $id);
		} 
		redirect('AdminProfileIM/indexIM');	
	}

	// HIDDEN PROFILE
	public function updatehidden($id)
	{
		if(isset($_POST['updatehidden']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_profile('tb_profile',$data, $id);
		} 
		redirect('AdminProfileIM/indexIM');	
	}

	// SHOW PROFILE
	public function updateshow($id)
	{
		if(isset($_POST['updateshow']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_profile('tb_profile',$data, $id);
		} 
		redirect('AdminProfileIM/indexIM');	
	}
}