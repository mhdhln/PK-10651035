<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_slide'));
	}
	function index(){
		$data['title'] = 'Semoga Jadi';
		$data['browse_slide'] = $this->m_slide->get_slide();
		$this->load->view('v_main',$data);
	}
}