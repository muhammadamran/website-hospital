<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPelayananMedis extends CI_Controller {

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
		$this->load->view('protected/pelayananmedis');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexHD(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/HD');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexAlurHD(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/Alur-HD');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexIGD(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/IGD');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexAlurIGD(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/Alur-IGD');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexRJ(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/RJ');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexAlurRJ(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/Alur-RJ');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexAdmRJ(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/Adm-RJ');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexRI(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/RI');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexAlurRI(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/Alur-RI');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexAdmRI(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/Adm-RI');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexTTRI(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/TT-RI');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexHKPRI(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/HKP-RI');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexCAPD(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/CAPD');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexAlurCAPD(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/Alur-CAPD');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexBedah(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/bedah');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexAlurBedah(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/Alur-Bedah');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexMCU(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/MCU');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

	function indexAlurMCU(){
		$this->load->view('protected/include/head');
		$this->load->view('protected/include/header');
		$this->load->view('protected/include/sidebar');
		$this->load->view('protected/Alur-MCU');
		$this->load->view('protected/include/footer');
		$this->load->view('protected/include/thirdparty');
	}

//////////////////////////////////////PELAYANAN////////////////////////////////////////////////////
////////////////////////////////////HD//////////////////////////////////
	// INPUT DATA PROFILE
	public function createhd()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'judul_hd' => $this->input->post('judul_hd'),
			'isi_hd' => $this->input->post('isi_hd'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN HEMODIALISIS'
		);

		if (!empty($_FILES['link_hd']['name'])) {
			$upload = $this->_do_upload_hd();
			$data['link_hd'] = $upload;
		}
		$this->M_MasterData->input_igd('tb_hd', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexHD', $data);
	}

	private function _do_upload_hd()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/hd/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_hd')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexHD');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR HD
	public function updategambarhd($id){

		$config['upload_path']="assets/images/rumah-sakit/hd/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_hd")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_hd' => $gambar,
			);

			$result= $this->M_MasterData->update_hd('tb_hd',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexHD');
	}

	// UPDATE
	public function updateisihd($id)
	{
		if(isset($_POST['updateisihd']))
		{	
			$data = array(
				'judul_hd' => $this->input->post('judul_hd'),
				'isi_hd' => $this->input->post('isi_hd')
			);
			$this->M_MasterData->update_hd('tb_hd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexHD');	
	}

	// HAPUS HD
	public function deletehd($id)
	{
		if(isset($_POST['deletehd']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_hd('tb_hd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexHD');	
	}

	// HIDDEN HD
	public function updatehiddenhd($id)
	{
		if(isset($_POST['updatehiddenhd']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_hd('tb_hd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexHD');	
	}

	// SHOW HD
	public function updateshowhd($id)
	{
		if(isset($_POST['updateshowhd']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_hd('tb_hd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexHD');	
	}
////////////////////////////////////END HD//////////////////////////////

////////////////////////////////////IGD//////////////////////////////////
	// INPUT DATA PROFILE
	public function createigd()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'judul_igd' => $this->input->post('judul_igd'),
			'isi_igd' => $this->input->post('isi_igd'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN IGD'
		);

		if (!empty($_FILES['link_igd']['name'])) {
			$upload = $this->_do_upload_igd();
			$data['link_igd'] = $upload;
		}
		$this->M_MasterData->input_igd('tb_igd', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexIGD', $data);
	}

	private function _do_upload_igd()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/igd/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_igd')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexIGD');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR HD
	public function updategambarigd($id){

		$config['upload_path']="assets/images/rumah-sakit/igd/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_igd")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_igd' => $gambar,
			);

			$result= $this->M_MasterData->update_igd('tb_igd',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexIGD');
	}

	// UPDATE
	public function updateisiigd($id)
	{
		if(isset($_POST['updateisiigd']))
		{	
			$data = array(
				'judul_igd' => $this->input->post('judul_igd'),
				'isi_igd' => $this->input->post('isi_igd')
			);
			$this->M_MasterData->update_igd('tb_igd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexIGD');	
	}

	// HAPUS HD
	public function deleteigd($id)
	{
		if(isset($_POST['deleteigd']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_igd('tb_igd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexIGD');	
	}

	// HIDDEN HD
	public function updatehiddenigd($id)
	{
		if(isset($_POST['updatehiddenigd']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_igd('tb_igd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexIGD');	
	}

	// SHOW HD
	public function updateshowigd($id)
	{
		if(isset($_POST['updateshowigd']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_igd('tb_igd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexIGD');	
	}
////////////////////////////////////END IGD//////////////////////////////

////////////////////////////////////RAWAT JALAN//////////////////////////////////
	// INPUT DATA PROFILE
	public function createrj()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'judul_rj' => $this->input->post('judul_rj'),
			'isi_rj' => $this->input->post('isi_rj'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN RAWAT JALAN'
		);

		if (!empty($_FILES['link_rj']['name'])) {
			$upload = $this->_do_upload_rj();
			$data['link_rj'] = $upload;
		}
		$this->M_MasterData->input_rj('tb_rj', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexRJ', $data);
	}

	private function _do_upload_rj()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/rawat-jalan/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_rj')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexRJ');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR HD
	public function updategambarrj($id){

		$config['upload_path']="assets/images/rumah-sakit/rawat-jalan/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_rj")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_rj' => $gambar,
			);

			$result= $this->M_MasterData->update_rj('tb_rj',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexRJ');
	}

	// UPDATE
	public function updateisirj($id)
	{
		if(isset($_POST['updateisirj']))
		{	
			$data = array(
				'judul_rj' => $this->input->post('judul_rj'),
				'isi_rj' => $this->input->post('isi_rj')
			);
			$this->M_MasterData->update_rj('tb_rj',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexRJ');	
	}

	// HAPUS HD
	public function deleterj($id)
	{
		if(isset($_POST['deleterj']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_rj('tb_rj',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexRJ');	
	}

	// HIDDEN HD
	public function updatehiddenrj($id)
	{
		if(isset($_POST['updatehiddenrj']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_rj('tb_rj',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexRJ');	
	}

	// SHOW HD
	public function updateshowrj($id)
	{
		if(isset($_POST['updateshowrj']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_rj('tb_rj',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexRJ');	
	}
////////////////////////////////////END RAWAT JALAN//////////////////////////////

////////////////////////////////////RAWAT INAP//////////////////////////////////
	// INPUT DATA PROFILE
	public function createri()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'judul_ri' => $this->input->post('judul_ri'),
			'isi_ri' => $this->input->post('isi_ri'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN RAWAT INAP'
		);

		if (!empty($_FILES['link_ri']['name'])) {
			$upload = $this->_do_upload_ri();
			$data['link_ri'] = $upload;
		}
		$this->M_MasterData->input_ri('tb_ri', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexRI', $data);
	}

	private function _do_upload_ri()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/rawat-inap/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_ri')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexRI');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR HD
	public function updategambarri($id){

		$config['upload_path']="assets/images/rumah-sakit/rawat-inap/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_ri")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_ri' => $gambar,
			);

			$result= $this->M_MasterData->update_ri('tb_ri',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexRI');
	}

	// UPDATE
	public function updateisiri($id)
	{
		if(isset($_POST['updateisiri']))
		{	
			$data = array(
				'judul_ri' => $this->input->post('judul_ri'),
				'isi_ri' => $this->input->post('isi_ri')
			);
			$this->M_MasterData->update_ri('tb_ri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexRI');	
	}

	// HAPUS HD
	public function deleteri($id)
	{
		if(isset($_POST['deleteri']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_ri('tb_ri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexRI');	
	}

	// HIDDEN HD
	public function updatehiddenri($id)
	{
		if(isset($_POST['updatehiddenri']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_ri('tb_ri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexRI');	
	}

	// SHOW HD
	public function updateshowri($id)
	{
		if(isset($_POST['updateshowri']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_ri('tb_ri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexRI');	
	}
////////////////////////////////////END RAWAT INAP//////////////////////////////

////////////////////////////////////CAPD//////////////////////////////////
	// INPUT DATA PROFILE
	public function createcapd()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'judul_capd' => $this->input->post('judul_capd'),
			'isi_capd' => $this->input->post('isi_capd'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN CAPD'
		);

		if (!empty($_FILES['link_capd']['name'])) {
			$upload = $this->_do_upload_capd();
			$data['link_capd'] = $upload;
		}
		$this->M_MasterData->input_capd('tb_capd', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexCAPD', $data);
	}

	private function _do_upload_capd()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/capd/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_capd')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexCAPD');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR HD
	public function updategambarcapd($id){

		$config['upload_path']="assets/images/rumah-sakit/capd/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_capd")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_capd' => $gambar,
			);

			$result= $this->M_MasterData->update_capd('tb_capd',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexCAPD');
	}

	// UPDATE
	public function updateisicapd($id)
	{
		if(isset($_POST['updateisicapd']))
		{	
			$data = array(
				'judul_capd' => $this->input->post('judul_capd'),
				'isi_capd' => $this->input->post('isi_capd')
			);
			$this->M_MasterData->update_capd('tb_capd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexCAPD');	
	}

	// HAPUS HD
	public function deletecapd($id)
	{
		if(isset($_POST['deletecapd']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_capd('tb_capd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexCAPD');	
	}

	// HIDDEN HD
	public function updatehiddencapd($id)
	{
		if(isset($_POST['updatehiddencapd']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_capd('tb_capd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexCAPD');	
	}

	// SHOW HD
	public function updateshowcapd($id)
	{
		if(isset($_POST['updateshowcapd']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_capd('tb_capd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexCAPD');	
	}
////////////////////////////////////END CAPD//////////////////////////////

////////////////////////////////////BEDAH//////////////////////////////////
	// INPUT DATA PROFILE
	public function createbedah()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'judul_bedah' => $this->input->post('judul_bedah'),
			'isi_bedah' => $this->input->post('isi_bedah'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN PELAYANAN BEDAH'
		);

		if (!empty($_FILES['link_bedah']['name'])) {
			$upload = $this->_do_upload_bedah();
			$data['link_bedah'] = $upload;
		}
		$this->M_MasterData->input_bedah('tb_bedah', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexBedah', $data);
	}

	private function _do_upload_bedah()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/pelayanan-bedah/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_bedah')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexBedah');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR HD
	public function updategambarbedah($id){

		$config['upload_path']="assets/images/rumah-sakit/pelayanan-bedah/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_bedah")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_bedah' => $gambar,
			);

			$result= $this->M_MasterData->update_bedah('tb_bedah',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexBedah');
	}

	// UPDATE
	public function updateisibedah($id)
	{
		if(isset($_POST['updateisibedah']))
		{	
			$data = array(
				'judul_bedah' => $this->input->post('judul_bedah'),
				'isi_bedah' => $this->input->post('isi_bedah')
			);
			$this->M_MasterData->update_bedah('tb_bedah',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexBedah');	
	}

	// HAPUS HD
	public function deletebedah($id)
	{
		if(isset($_POST['deletebedah']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_bedah('tb_bedah',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexBedah');	
	}

	// HIDDEN HD
	public function updatehiddenbedah($id)
	{
		if(isset($_POST['updatehiddenbedah']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_bedah('tb_bedah',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexBedah');	
	}

	// SHOW HD
	public function updateshowbedah($id)
	{
		if(isset($_POST['updateshowbedah']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_bedah('tb_bedah',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexBedah');	
	}
////////////////////////////////////END BEDAH//////////////////////////////

////////////////////////////////////MCU//////////////////////////////////
	// INPUT DATA PROFILE
	public function createmcu()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'judul_mcu' => $this->input->post('judul_mcu'),
			'isi_mcu' => $this->input->post('isi_mcu'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN MEDICAL CHECK UP'
		);

		if (!empty($_FILES['link_mcu']['name'])) {
			$upload = $this->_do_upload_mcu();
			$data['link_mcu'] = $upload;
		}
		$this->M_MasterData->input_mcu('tb_mcu', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexMCU', $data);
	}

	private function _do_upload_mcu()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/MCU/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_mcu')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexMCU');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR HD
	public function updategambarmcu($id){

		$config['upload_path']="assets/images/rumah-sakit/MCU/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_mcu")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_mcu' => $gambar,
			);

			$result= $this->M_MasterData->update_mcu('tb_mcu',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexMCU');
	}

	// UPDATE
	public function updateisimcu($id)
	{
		if(isset($_POST['updateisimcu']))
		{	
			$data = array(
				'judul_mcu' => $this->input->post('judul_mcu'),
				'isi_mcu' => $this->input->post('isi_mcu')
			);
			$this->M_MasterData->update_mcu('tb_mcu',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexMCU');	
	}

	// HAPUS HD
	public function deletemcu($id)
	{
		if(isset($_POST['deletemcu']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_mcu('tb_mcu',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexMCU');	
	}

	// HIDDEN HD
	public function updatehiddenmcu($id)
	{
		if(isset($_POST['updatehiddenmcu']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_mcu('tb_mcu',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexMCU');	
	}

	// SHOW HD
	public function updateshowmcu($id)
	{
		if(isset($_POST['updateshowmcu']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_mcu('tb_mcu',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexMCU');	
	}
////////////////////////////////////END MCU//////////////////////////////

//////////////////////////////////////ALUR PELAYANAN////////////////////////////////////////////////////
////////////////////////////////////ALUR HD//////////////////////////////////
	// INPUT DATA PROFILE
	public function createalurhd()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'isi_alurhd' => $this->input->post('isi_alurhd'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN ALUR HEMODIALISIS'
		);

		if (!empty($_FILES['alur_hd']['name'])) {
			$upload = $this->_do_upload_alurhd();
			$data['alur_hd'] = $upload;
		}
		$this->M_MasterData->input_igd('tb_alurhd', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexAlurHD', $data);
	}

	private function _do_upload_alurhd()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/hd/alur/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('alur_hd')) {
			$this->session->flashdata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexAlurHD');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR HD
	public function updategambaralurhd($id){

		$config['upload_path']="assets/images/rumah-sakit/hd/alur/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("alur_hd")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'alur_hd' => $gambar,
			);

			$result= $this->M_MasterData->update_alurhd('tb_alurhd',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexAlurHD');
	}

	// UPDATE
	public function updateisialurhd($id)
	{
		if(isset($_POST['updateisialurhd']))
		{	
			$data = array(
				'isi_alurhd' => $this->input->post('isi_alurhd')
			);
			$this->M_MasterData->update_alurhd('tb_alurhd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurHD');	
	}

	// HAPUS HD
	public function deletealurhd($id)
	{
		if(isset($_POST['deletealurhd']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_alurhd('tb_alurhd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurHD');	
	}

	// HIDDEN HD
	public function updatehiddenalurhd($id)
	{
		if(isset($_POST['updatehiddenalurhd']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_alurhd('tb_alurhd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurHD');	
	}

	// SHOW HD
	public function updateshowalurhd($id)
	{
		if(isset($_POST['updateshowalurhd']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_alurhd('tb_alurhd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurHD');	
	}
////////////////////////////////////END ALUR HD//////////////////////////////

////////////////////////////////////ALUR IGD//////////////////////////////////
	// INPUT DATA PROFILE
	public function createalurigd()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'isi_alurigd' => $this->input->post('isi_alurigd'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN ALUR IGD'
		);

		if (!empty($_FILES['alur_igd']['name'])) {
			$upload = $this->_do_upload_alurigd();
			$data['alur_igd'] = $upload;
		}
		$this->M_MasterData->input_alurigd('tb_alurigd', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexAlurIGD', $data);
	}

	private function _do_upload_alurigd()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/igd/alur/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('alur_igd')) {
			$this->session->flasigdata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexAlurIGD');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR igd
	public function updategambaralurigd($id){

		$config['upload_path']="assets/images/rumah-sakit/igd/alur/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("alur_igd")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'alur_igd' => $gambar,
			);

			$result= $this->M_MasterData->update_alurigd('tb_alurigd',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexAlurIGD');
	}

	// UPDATE
	public function updateisialurigd($id)
	{
		if(isset($_POST['updateisialurigd']))
		{	
			$data = array(
				'isi_alurigd' => $this->input->post('isi_alurigd')
			);
			$this->M_MasterData->update_alurigd('tb_alurigd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurIGD');	
	}

	// HAPUS igd
	public function deletealurigd($id)
	{
		if(isset($_POST['deletealurigd']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_alurigd('tb_alurigd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurIGD');	
	}

	// HIDDEN igd
	public function updatehiddenalurigd($id)
	{
		if(isset($_POST['updatehiddenalurigd']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_alurigd('tb_alurigd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurIGD');	
	}

	// SHOW igd
	public function updateshowalurigd($id)
	{
		if(isset($_POST['updateshowalurigd']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_alurigd('tb_alurigd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurIGD');	
	}
////////////////////////////////////END ALUR IGD//////////////////////////////

////////////////////////////////////ALUR RAWAT JALAN//////////////////////////////////
	// INPUT DATA PROFILE
	public function createalurrj()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'isi_alurrj' => $this->input->post('isi_alurrj'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN ALUR RAWAT JALAN'
		);

		if (!empty($_FILES['alur_rj']['name'])) {
			$upload = $this->_do_upload_alurrj();
			$data['alur_rj'] = $upload;
		}
		$this->M_MasterData->input_alurrj('tb_alurrj', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexAlurRJ', $data);
	}

	private function _do_upload_alurrj()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/rawat-jalan/alur/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('alur_rj')) {
			$this->session->flasrjata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexAlurRJ');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR rj
	public function updategambaralurrj($id){

		$config['upload_path']="assets/images/rumah-sakit/rawat-jalan/alur/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("alur_rj")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'alur_rj' => $gambar,
			);

			$result= $this->M_MasterData->update_alurrj('tb_alurrj',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexAlurRJ');
	}

	// UPDATE
	public function updateisialurrj($id)
	{
		if(isset($_POST['updateisialurrj']))
		{	
			$data = array(
				'isi_alurrj' => $this->input->post('isi_alurrj')
			);
			$this->M_MasterData->update_alurrj('tb_alurrj',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurRJ');	
	}

	// HAPUS rj
	public function deletealurrj($id)
	{
		if(isset($_POST['deletealurrj']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_alurrj('tb_alurrj',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurRJ');	
	}

	// HIDDEN rj
	public function updatehiddenalurrj($id)
	{
		if(isset($_POST['updatehiddenalurrj']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_alurrj('tb_alurrj',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurRJ');	
	}

	// SHOW rj
	public function updateshowalurrj($id)
	{
		if(isset($_POST['updateshowalurrj']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_alurrj('tb_alurrj',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurRJ');	
	}
////////////////////////////////////END ALUR RAWAT JALAN//////////////////////////////

////////////////////////////////////ALUR RAWAT INAP//////////////////////////////////
	// INPUT DATA PROFILE
	public function createalurri()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'isi_alurri' => $this->input->post('isi_alurri'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN ALUR RAWAT JALAN'
		);

		if (!empty($_FILES['alur_ri']['name'])) {
			$upload = $this->_do_upload_alurri();
			$data['alur_ri'] = $upload;
		}
		$this->M_MasterData->input_alurri('tb_alurri', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexAlurRI', $data);
	}

	private function _do_upload_alurri()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/rawat-inap/alur/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('alur_ri')) {
			$this->session->flasriata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexAlurRI');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR ri
	public function updategambaralurri($id){

		$config['upload_path']="assets/images/rumah-sakit/rawat-inap/alur/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("alur_ri")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'alur_ri' => $gambar,
			);

			$result= $this->M_MasterData->update_alurri('tb_alurri',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexAlurRI');
	}

	// UPDATE
	public function updateisialurri($id)
	{
		if(isset($_POST['updateisialurri']))
		{	
			$data = array(
				'isi_alurri' => $this->input->post('isi_alurri')
			);
			$this->M_MasterData->update_alurri('tb_alurri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurRI');	
	}

	// HAPUS ri
	public function deletealurri($id)
	{
		if(isset($_POST['deletealurri']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_alurri('tb_alurri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurRI');	
	}

	// HIDDEN ri
	public function updatehiddenalurri($id)
	{
		if(isset($_POST['updatehiddenalurri']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_alurri('tb_alurri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurRI');	
	}

	// SHOW ri
	public function updateshowalurri($id)
	{
		if(isset($_POST['updateshowalurri']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_alurri('tb_alurri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurRI');	
	}
////////////////////////////////////END ALUR RAWAT INAP//////////////////////////////

////////////////////////////////////ALUR CAPD//////////////////////////////////
	// INPUT DATA PROFILE
	public function createalurcapd()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'isi_alurcapd' => $this->input->post('isi_alurcapd'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN ALUR CAPD'
		);

		if (!empty($_FILES['alur_capd']['name'])) {
			$upload = $this->_do_upload_alurcapd();
			$data['alur_capd'] = $upload;
		}
		$this->M_MasterData->input_alurcapd('tb_alurcapd', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexAlurCAPD', $data);
	}

	private function _do_upload_alurcapd()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/capd/alur/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('alur_capd')) {
			$this->session->flascapdata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexAlurCAPD');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR capd
	public function updategambaralurcapd($id){

		$config['upload_path']="assets/images/rumah-sakit/capd/alur/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("alur_capd")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'alur_capd' => $gambar,
			);

			$result= $this->M_MasterData->update_alurcapd('tb_alurcapd',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexAlurCAPD');
	}

	// UPDATE
	public function updateisialurcapd($id)
	{
		if(isset($_POST['updateisialurcapd']))
		{	
			$data = array(
				'isi_alurcapd' => $this->input->post('isi_alurcapd')
			);
			$this->M_MasterData->update_alurcapd('tb_alurcapd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurCAPD');	
	}

	// HAPUS capd
	public function deletealurcapd($id)
	{
		if(isset($_POST['deletealurcapd']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_alurcapd('tb_alurcapd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurCAPD');	
	}

	// HIDDEN capd
	public function updatehiddenalurcapd($id)
	{
		if(isset($_POST['updatehiddenalurcapd']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_alurcapd('tb_alurcapd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurCAPD');	
	}

	// SHOW capd
	public function updateshowalurcapd($id)
	{
		if(isset($_POST['updateshowalurcapd']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_alurcapd('tb_alurcapd',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAlurCAPD');	
	}
////////////////////////////////////END ALUR CAPD//////////////////////////////

////////////////////////////////////TATA TERTIB RAWAT INAP//////////////////////////////////
	// INPUT DATA PROFILE
	public function createttri()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'isi_ttri' => $this->input->post('isi_ttri'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN TATA TERTIB RAWAT JALAN'
		);

		if (!empty($_FILES['link_ttri']['name'])) {
			$upload = $this->_do_upload_ttri();
			$data['link_ttri'] = $upload;
		}
		$this->M_MasterData->input_ri('tb_ttri', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexTTRI', $data);
	}

	private function _do_upload_ttri()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/rawat-inap/tata-tertib/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_ttri')) {
			$this->session->flasriata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexTTRI');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR ri
	public function updategambarttri($id){

		$config['upload_path']="assets/images/rumah-sakit/rawat-inap/tata-tertib/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_ttri")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_ttri' => $gambar,
			);

			$result= $this->M_MasterData->update_tt_ri('tb_ttri',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexTTRI');
	}

	// UPDATE
	public function updateisittri($id)
	{
		if(isset($_POST['updateisittri']))
		{	
			$data = array(
				'isi_ttri' => $this->input->post('isi_ttri')
			);
			$this->M_MasterData->update_tt_ri('tb_ttri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexTTRI');	
	}

	// HAPUS ri
	public function deletettri($id)
	{
		if(isset($_POST['deletettri']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_tt_ri('tb_ttri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexTTRI');	
	}

	// HIDDEN ri
	public function updatehiddenttri($id)
	{
		if(isset($_POST['updatehiddenttri']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_tt_ri('tb_ttri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexTTRI');	
	}

	// SHOW ri
	public function updateshowttri($id)
	{
		if(isset($_POST['updateshowttri']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_tt_ri('tb_ttri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexTTRI');	
	}
////////////////////////////////////END TATA TERTIB RAWAT INAP//////////////////////////////

////////////////////////////////////HAK & KEWAJIBAN PASIEN RAWAT INAP//////////////////////////////////
	// INPUT DATA PROFILE
	public function createhkpri()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'isi_hkpri' => $this->input->post('isi_hkpri'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN HAK DAN KEWAJIBAN PASIEN RAWAT JALAN'
		);

		if (!empty($_FILES['link_hkpri']['name'])) {
			$upload = $this->_do_upload_hkpri();
			$data['link_hkpri'] = $upload;
		}
		$this->M_MasterData->input_hkp_ri('tb_hkpri', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexHKPRI', $data);
	}

	private function _do_upload_hkpri()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/rawat-inap/hak-kewajiban/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_hkpri')) {
			$this->session->flasriata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexHKPRI');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR ri
	public function updategambarhkpri($id){

		$config['upload_path']="assets/images/rumah-sakit/rawat-inap/hak-kewajiban/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_hkpri")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_hkpri' => $gambar,
			);

			$result= $this->M_MasterData->update_hkp_ri('tb_hkpri',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexHKPRI');
	}

	// UPDATE
	public function updateisihkpri($id)
	{
		if(isset($_POST['updateisihkpri']))
		{	
			$data = array(
				'isi_hkpri' => $this->input->post('isi_hkpri')
			);
			$this->M_MasterData->update_hkp_ri('tb_hkpri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexHKPRI');	
	}

	// HAPUS ri
	public function deletehkpri($id)
	{
		if(isset($_POST['deletehkpri']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_hkp_ri('tb_hkpri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexHKPRI');	
	}

	// HIDDEN ri
	public function updatehiddenhkpri($id)
	{
		if(isset($_POST['updatehiddenhkpri']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_hkp_ri('tb_hkpri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexHKPRI');	
	}

	// SHOW ri
	public function updateshowhkpri($id)
	{
		if(isset($_POST['updateshowhkpri']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_hkp_ri('tb_hkpri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexHKPRI');	
	}
////////////////////////////////////END HAK & KEWAJIBAN PASIEN RAWAT INAP//////////////////////////////	

////////////////////////////////////ADMINISTRASI RAWAT JALAN//////////////////////////////////
	// INPUT DATA PROFILE
	public function createadmrj()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'isi_admrj' => $this->input->post('isi_admrj'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN ADMINISTRASI RAWAT JALAN'
		);

		if (!empty($_FILES['link_admrj']['name'])) {
			$upload = $this->_do_upload_admrj();
			$data['link_admrj'] = $upload;
		}
		$this->M_MasterData->input_admrj('tb_admrj', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexAdmRJ', $data);
	}

	private function _do_upload_admrj()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/rawat-jalan/adm/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_admrj')) {
			$this->session->flasriata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexAdmRJ');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR ri
	public function updategambaradmrj($id){

		$config['upload_path']="assets/images/rumah-sakit/rawat-jalan/adm/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_admrj")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_admrj' => $gambar,
			);

			$result= $this->M_MasterData->update_admrj('tb_admrj',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexAdmRJ');
	}

	// UPDATE
	public function updateisiadmrj($id)
	{
		if(isset($_POST['updateisiadmrj']))
		{	
			$data = array(
				'isi_admrj' => $this->input->post('isi_admrj')
			);
			$this->M_MasterData->update_admrj('tb_admrj',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAdmRJ');	
	}

	// HAPUS ri
	public function deleteadmrj($id)
	{
		if(isset($_POST['deleteadmrj']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_admrj('tb_admrj',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAdmRJ');	
	}

	// HIDDEN ri
	public function updatehiddenadmrj($id)
	{
		if(isset($_POST['updatehiddenadmrj']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_admrj('tb_admrj',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAdmRJ');	
	}

	// SHOW ri
	public function updateshowadmrj($id)
	{
		if(isset($_POST['updateshowadmrj']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_admrj('tb_admrj',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAdmRJ');	
	}
////////////////////////////////////END ADMINISTRASI RAWAT JALAN//////////////////////////////	

////////////////////////////////////ADMINISTRASI RAWAT JALAN//////////////////////////////////
	// INPUT DATA PROFILE
	public function createadmri()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'user_id' => $this->input->post('user_id'),
			'isi_admri' => $this->input->post('isi_admri'),
			'status' => $this->input->post('status')
		);

		$data2 = array(
			'kode' => $this->input->post('kode'),
			'date_input' => date('Y-m-d H:i:s'),
			'user_id' => $this->input->post('user_id'),
			'modul' => 'TAMPILAN ADMINISTRASI RAWAT INAO'
		);

		if (!empty($_FILES['link_admri']['name'])) {
			$upload = $this->_do_upload_admri();
			$data['link_admri'] = $upload;
		}
		$this->M_MasterData->input_admri('tb_admri', $data);
		$this->M_MasterData->input_wh('tb_warehouse', $data2);
		redirect('AdminPelayananMedis/indexAdmRI', $data);
	}

	private function _do_upload_admri()
	{
		$config['upload_path'] 		= 'assets/images/rumah-sakit/rawat-jalan/adm/';
		$config['allowed_types'] 	= 'jpeg|jpg|png|pdf';
		$config['max_size'] 		= 2000;
		$config['encrypt_name'] 	= true;
		

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('link_admri')) {
			$this->session->flasriata('flash', $this->upload->display_errors('',''));
			redirect('AdminPelayananMedis/indexAdmRI');
		}
		return $this->upload->data('file_name');
	}

	// GAMBAR ri
	public function updategambaradmri($id){

		$config['upload_path']="assets/images/rumah-sakit/rawat-inap/adm/";
		$config['allowed_types']='pdf|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("link_admri")){
			$file = $this->upload->data();
			
			$gambar= $file['file_name'];

			$data = array(
				'link_admri' => $gambar,
			);

			$result= $this->M_MasterData->update_admri('tb_admri',$data, $id);
			echo json_decode($result);
		}
		redirect('AdminPelayananMedis/indexAdmRI');
	}

	// UPDATE
	public function updateisiadmri($id)
	{
		if(isset($_POST['updateisiadmri']))
		{	
			$data = array(
				'isi_admri' => $this->input->post('isi_admri')
			);
			$this->M_MasterData->update_admri('tb_admri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAdmRI');	
	}

	// HAPUS ri
	public function deleteadmri($id)
	{
		if(isset($_POST['deleteadmri']))
		{	
			$data = array(
				'berkas' => $this->input->post('berkas')
			);
			$this->M_MasterData->update_admri('tb_admri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAdmRI');	
	}

	// HIDDEN ri
	public function updatehiddenadmri($id)
	{
		if(isset($_POST['updatehiddenadmri']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_admri('tb_admri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAdmRI');	
	}

	// SHOW ri
	public function updateshowadmri($id)
	{
		if(isset($_POST['updateshowadmri']))
		{	
			$data = array(
				'status' => $this->input->post('status')
			);
			$this->M_MasterData->update_admri('tb_admri',$data, $id);
		} 
		redirect('AdminPelayananMedis/indexAdmRI');	
	}
////////////////////////////////////END ADMINISTRASI RAWAT JALAN//////////////////////////////	
}