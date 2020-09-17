<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPenunjangMedis extends CI_Controller {

	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != 'login'){
			redirect('Admin');
		}
	}
	
	function index(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/pelayananmedis');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexFarmasi(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/farmasi');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexLab(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/lab');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexAlurLab(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/Alur-Lab');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexRadiologi(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/radiologi');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexAlurRadiologi(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/Alur-Radiologi');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

////////////////////////////////////FARMASI//////////////////////////////////
	// INPUT DATA PROFILE
	public function createfarmasi()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'judul_farmasi' => $this->input->post('judul_farmasi'),
			'isi_farmasi' => $this->input->post('isi_farmasi'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN FARMASI'
		);

		if (!empty($_FILES['link_farmasi']['name'])) {
			$upload = $this->_do_upload_farmasi();
			$data['link_farmasi'] = $upload;
		}
		$this->M_MasterData->input_igd('tb_farmasi', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexFarmasi', $data);
	}

	private function _do_upload_farmasi()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/farmasi/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_farmasi')) {
			$this->session->flasfarmasiata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexFarmasi');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR farmasi
	public function updategambarfarmasi($id){

		$config['upload_path']="assets/images/rumah-sakit/farmasi/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_farmasi")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_farmasi' => $gambar,
			);

			$result= $this->M_MasterData->update_farmasi('tb_farmasi',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexFarmasi');
	}

	// UPDATE
	public function updateisifarmasi($id)
	{
		if(isset($_POST['updateisifarmasi']))
		{	
			$data = array(
				'judul_farmasi' => $this->input->post('judul_farmasi'),
				'isi_farmasi' => $this->input->post('isi_farmasi')
			);
			$this->M_MasterData->update_farmasi('tb_farmasi',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexFarmasi');	
	}

	// HAPUS FARMASI
	public function deletefarmasi($id)
	{
		if(isset($_POST['deletefarmasi']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_farmasi('tb_farmasi',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexFarmasi');	
	}

	// HIDDEN FARMASI
	public function updatehiddenfarmasi($id)
	{
		if(isset($_POST['updatehiddenfarmasi']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_farmasi('tb_farmasi',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexFarmasi');	
	}

	// SHOW FARMASI
	public function updateshowfarmasi($id)
	{
		if(isset($_POST['updateshowfarmasi']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_farmasi('tb_farmasi',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexFarmasi');	
	}
////////////////////////////////////END FARMASI//////////////////////////////

////////////////////////////////////LABORATORIUM//////////////////////////////////
	// INPUT DATA PROFILE
	public function createlab()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'judul_lab' => $this->input->post('judul_lab'),
			'isi_lab' => $this->input->post('isi_lab'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN LABORATORIUM'
		);

		if (!empty($_FILES['link_lab']['name'])) {
			$upload = $this->_do_upload_lab();
			$data['link_lab'] = $upload;
		}
		$this->M_MasterData->input_lab('tb_lab', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexLab', $data);
	}

	private function _do_upload_lab()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/lab/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_lab')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexLab');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR HD
	public function updategambarlab($id){

		$config['upload_path']="assets/images/rumah-sakit/laboratorium/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_lab")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_lab' => $gambar,
			);

			$result= $this->M_MasterData->update_lab('tb_lab',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexLab');
	}

	// UPDATE
	public function updateisilab($id)
	{
		if(isset($_POST['updateisilab']))
		{	
			$data = array(
				'judul_lab' => $this->input->post('judul_lab'),
				'isi_lab' => $this->input->post('isi_lab')
			);
			$this->M_MasterData->update_lab('tb_lab',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexLab');	
	}

	// HAPUS HD
	public function deletelab($id)
	{
		if(isset($_POST['deletelab']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_lab('tb_lab',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexLab');	
	}

	// HIDDEN HD
	public function updatehiddenlab($id)
	{
		if(isset($_POST['updatehiddenlab']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_lab('tb_lab',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexLab');	
	}

	// SHOW HD
	public function updateshowlab($id)
	{
		if(isset($_POST['updateshowlab']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_lab('tb_lab',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexLab');	
	}
////////////////////////////////////END LABORATORIUM//////////////////////////////

////////////////////////////////////RADIOLOGI//////////////////////////////////
	// INPUT DATA PROFILE
	public function createradiologi()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'judul_radiologi' => $this->input->post('judul_radiologi'),
			'isi_radiologi' => $this->input->post('isi_radiologi'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN RADIOLOGI'
		);

		if (!empty($_FILES['link_radiologi']['name'])) {
			$upload = $this->_do_upload_radiologi();
			$data['link_radiologi'] = $upload;
		}
		$this->M_MasterData->input_radiologi('tb_radiologi', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexRadiologi', $data);
	}

	private function _do_upload_radiologi()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/radiologi/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_radiologi')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexRadiologi');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR HD
	public function updategambarradiologi($id){

		$config['upload_path']="assets/images/rumah-sakit/radiologi/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_radiologi")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_radiologi' => $gambar,
			);

			$result= $this->M_MasterData->update_radiologi('tb_radiologi',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexRadiologi');
	}

	// UPDATE
	public function updateisiradiologi($id)
	{
		if(isset($_POST['updateisiradiologi']))
		{	
			$data = array(
				'judul_radiologi' => $this->input->post('judul_radiologi'),
				'isi_radiologi' => $this->input->post('isi_radiologi')
			);
			$this->M_MasterData->update_radiologi('tb_radiologi',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexRadiologi');	
	}

	// HAPUS HD
	public function deleteradiologi($id)
	{
		if(isset($_POST['deleteradiologi']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_radiologi('tb_radiologi',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexRadiologi');	
	}

	// HIDDEN HD
	public function updatehiddenradiologi($id)
	{
		if(isset($_POST['updatehiddenradiologi']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_radiologi('tb_radiologi',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexRadiologi');	
	}

	// SHOW HD
	public function updateshowradiologi($id)
	{
		if(isset($_POST['updateshowradiologi']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_radiologi('tb_radiologi',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexRadiologi');	
	}
////////////////////////////////////END RADIOLOGI//////////////////////////////
}