<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class C_gallery extends CI_Controller{
	function __construct(){
		session_start();
		parent::__construct();
		$this->load->model(array('m_gallery'));
		if(!isset($_SESSION['username'])){
			redirect('admin_web/c_login','refresh');
		}
	}
	function index(){
		$data['title'] = 'Data Gallery';
		$data['images'] = $this->m_gallery->get_images();
		$data['main'] = 'admin_web/v_gallery';
		$this->load->view('admin_web/v_main',$data);
	}
}