<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller{
	function __construct(){
		session_start();
		parent::__construct();
		$this->load->model(array('m_login','m_artikel'));
		$this->load->helper(array('url','form'));
		if(!isset($_SESSION['username'])){
			redirect('admin_web/c_login','refresh');
		}
	}
	function index(){
		$data['title'] = 'Admin Web';
		$data['main'] = 'admin_web/v_sambut';
		$this->load->view('admin_web/v_main',$data);
	}
}