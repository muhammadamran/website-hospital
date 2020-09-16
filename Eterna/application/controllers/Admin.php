<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_MasterData');
	}

	function index(){
		$this->load->view('protected/login');
	}

	function aksi_login(){
		if (isset($_POST['submit'])) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'username' => $username,
				'password' => md5($password)
			);
			$cek = $this->M_MasterData->cek_login('tb_user',$data);
			if(@$cek){

				$data_session = array(
					'user_id' => $cek->user_id,
					'username' => $username,
					'password' => $password,
					'NIP' => $cek->NIP,
					'foto' => $cek->foto,
					'full_name' => $cek->full_name,
					'tgl_lahir' => $cek->tgl_lahir,
					'jenis_kelamin' => $cek->jenis_kelamin,
					'email' => $cek->email,
					'alamat' => $cek->alamat,
					'no_hp' => $cek->no_hp,
					'jabatan' => $cek->jabatan,
					'unit' => $cek->unit,
					'date_created' => $cek->date_created,
					'status' => "login",
					'role' => $cek->user_role
				);

				$data_log = array(
					'username' => $username,
					'date_log' => date('Y-m-d H:i:s'),
					'status' => 'Login'
				);

				$this->session->set_userdata($data_session);
				$this->M_MasterData->input_log('tb_log', $data_log);
				redirect('AdminHome');
			}else{
				$this->load->view('protected/404');
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Admin');
	}
}