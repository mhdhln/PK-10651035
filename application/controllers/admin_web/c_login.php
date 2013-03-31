<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class C_login extends CI_Controller{
	function __construct(){
		session_start();
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('form_validation');
	}
	function index(){
		if(isset($_SESSION['username'])){
			redirect('admin_web/main','refresh');
		}
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() == TRUE){
			$this->load->model('m_login');
			$result = $this->m_login->cek_login_admin(
				$this->input->post('username'),
				$this->input->post('password')
			);
			if($result == TRUE){
				$_SESSION['username'] = $this->input->post('username');
				redirect('admin_web/main','refresh');				
			}
		}
		$data['title'] = 'Login Admin';
		$this->load->view('admin_web/v_login',$data);
	}
	function logout(){
		session_destroy();
		redirect('admin_web/c_login','refresh');
	}
}