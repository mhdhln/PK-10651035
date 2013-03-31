<?php if(!defined('BASEPATH')) exit('No direct script acess allowes');
class C_users extends CI_Controller{
	function __construct(){
		session_start();
		parent::__construct();
		$this->load->model(array('m_users'));
		$this->load->helper(array('url','form'));
		if(!isset($_SESSION['username'])){
			redirect('admin_web/c_login','refresh');
		}
	}
	function index(){
		$data['title'] = 'Data Users';
		$data['main'] = 'admin_web/v_users';
		$data['hasil'] = $this->m_users->ambil_users();
		$this->load->view('admin_web/v_main',$data);
	}
	function tambah_users(){
		if($this->input->post('submit')){
			$this->m_users->tambah_usr();
			redirect('admin_web/c_users');
		}
		$data['title'] = 'Tambah User';
		$data['main'] = 'admin_web/v_tambah_users';
		$this->load->view('admin_web/v_main',$data);
	}
	function edit_users($id){
		if($this->input->post('submit')){
			$this->m_users->edit_usr($id);
			redirect('admin_web/c_users');
		}
		$data['title'] = 'Edit Data User';
		$data['hasil'] = $this->m_users->get_usr_id($id);
		$data['main'] = 'admin_web/v_edit_users';
		$this->load->view('admin_web/v_main',$data);
	}
	function delete_users($id){
		$this->m_users->delete_usr($id);
		redirect('admin_web/c_users');
	}
	function you_profile(){
		$data['title'] = 'Akun Anda';
		//$data['query'] = $this->m_users->ambil_profile();
		$data['main'] = 'admin_web/v_you_profile';
		$this->load->view('admin_web/v_main',$data);
	}
}