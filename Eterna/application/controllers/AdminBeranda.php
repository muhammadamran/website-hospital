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
///////////////////////////////JUDUL///////////////////////////////
	// INPUT DATA PROFILE
	public function createjudul()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'judul_top' => $this->input->post('judul_top'),
			'judul_bottom' => $this->input->post('judul_bottom'),
			'letak' => $this->input->post('letak'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'JUDUL BERANDA'
		);
		
		$this->M_MasterData->input_judulberanda('tb_judul', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminBeranda', $data);
	}

	// EDIT 
	public function updateisijudul($id)
	{
		if(isset($_POST['updateisijudul']))
		{	
			$data = array(
				'judul_top' => $this->input->post('judul_top'),
				'judul_bottom' => $this->input->post('judul_bottom'),
				'letak' => $this->input->post('letak')
			);
			$this->M_MasterData->update_judulberanda('tb_judul',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// HAPUS 
	public function deletejudul($id)
	{
		if(isset($_POST['deletejudul']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_judulberanda('tb_judul',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// HIDDEN
	public function updatehiddenjudul($id)
	{
		if(isset($_POST['updatehiddenjudul']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);

			$this->M_MasterData->update_judulberanda('tb_judul',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// SHOW
	public function updateshowjudul($id)
	{
		if(isset($_POST['updateshowjudul']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_judulberanda('tb_judul',$data, $id);
		} 
		redirect('AdminBeranda');	
	}
///////////////////////////////SLIDER//////////////////////////////
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
			'modul' => 'SLIDER BERANDA'
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

	// GAMBAR
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

			$result= $this->M_MasterData->update_sliderrs('tb_slider',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminBeranda');
	}

	// HAPUS 
	public function deleteslider($id)
	{
		if(isset($_POST['deleteslider']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_sliderrs('tb_slider',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// HIDDEN
	public function updatehiddenslider($id)
	{
		if(isset($_POST['updatehiddenslider']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);

			$this->M_MasterData->update_sliderrs('tb_slider',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// SHOW
	public function updateshowslider($id)
	{
		if(isset($_POST['updateshowslider']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_sliderrs('tb_slider',$data, $id);
		} 
		redirect('AdminBeranda');	
	}
///////////////////////////////LAYOUT 1////////////////////////////
	// INPUT DATA PROFILE
	public function createlyone()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'link_one' => $this->input->post('link_one'),
			'isi_one' => $this->input->post('isi_one'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'LAYOUT 1 BERANDA'
		);
		
		$this->M_MasterData->input_layout_1('tb_layoutone', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminBeranda', $data);
	}

	// EDIT 
	public function updateisilyone($id)
	{
		if(isset($_POST['updateisilyone']))
		{	
			$data = array(
				'link_one' => $this->input->post('link_one'),
				'isi_one' => $this->input->post('isi_one')
			);
			$this->M_MasterData->update_layoutone('tb_layoutone',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// HAPUS 
	public function deletelyone($id)
	{
		if(isset($_POST['deletelyone']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_layoutone('tb_layoutone',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// HIDDEN
	public function updatehiddenlyone($id)
	{
		if(isset($_POST['updatehiddenlyone']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);

			$this->M_MasterData->update_layoutone('tb_layoutone',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// SHOW
	public function updateshowlyone($id)
	{
		if(isset($_POST['updateshowlyone']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_layoutone('tb_layoutone',$data, $id);
		} 
		redirect('AdminBeranda');	
	}
///////////////////////////////LAYOUT 2////////////////////////////
	// INPUT DATA PROFILE
	public function createlytwo()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'isi_two' => $this->input->post('isi_two'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'BERANDA LAYOUT 2'
		);

		if (!empty($_FILES['link_two']['name'])) {
			$upload = $this->_do_upload_layouttwo();
			$data['link_two'] = $upload;
		}
		$this->M_MasterData->input_layout_2('tb_layouttwo', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminBeranda', $data);
	}

	private function _do_upload_layouttwo()
	{
		$config['upload_path'] 		= 'assets/images/layout2/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_two')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminBeranda');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR HD
	public function updategambarlytwo($id){

		$config['upload_path']="assets/images/layout2/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_two")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_two' => $gambar,
			);

			$result= $this->M_MasterData->update_layouttwo('tb_layouttwo',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminBeranda');
	}

	// UPDATE
	public function updateisilytwo($id)
	{
		if(isset($_POST['updateisilytwo']))
		{	
			$data = array(
				'isi_two' => $this->input->post('isi_two')
			);
			$this->M_MasterData->update_layouttwo('tb_layouttwo',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// HAPUS HD
	public function deletelytwo($id)
	{
		if(isset($_POST['deletelytwo']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_layouttwo('tb_layouttwo',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// HIDDEN HD
	public function updatehiddenlytwo($id)
	{
		if(isset($_POST['updatehiddenlytwo']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_layouttwo('tb_layouttwo',$data, $id);
		} 
		redirect('AdminBeranda');	
	}

	// SHOW HD
	public function updateshowlytwo($id)
	{
		if(isset($_POST['updateshowlytwo']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_layouttwo('tb_layouttwo',$data, $id);
		} 
		redirect('AdminBeranda');	
	}
///////////////////////////////PELAYANAN///////////////////////////
///////////////////////////////SPESIALIS///////////////////////////
///////////////////////////////REKANAN/MITRA///////////////////////
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
				'rekan' => $gambar,
			);

			$result= $this->M_MasterData->update_mitrakami('tb_rekan',$data, $id);
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
			$this->M_MasterData->update_mitrakami('tb_rekan',$data, $id);
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

			$this->M_MasterData->update_mitrakami('tb_rekan',$data, $id);
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
			$this->M_MasterData->update_mitrakami('tb_rekan',$data, $id);
		} 
		redirect('AdminBeranda');	
	}
}