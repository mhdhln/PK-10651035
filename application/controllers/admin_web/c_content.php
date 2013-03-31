<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class C_content extends CI_Controller{
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
		$data['main'] = 'admin_web/v_artikel';
		$this->load->view('admin_web/v_main',$data);
	}
	function lihat_artikel(){
		$data['title'] = 'Artikel Admin';
		$data['hasil'] = $this->m_artikel->get_artikel_all();
		$data['query'] = $this->m_artikel->get_komen_all();
		$data['main'] = 'admin_web/v_artikel';
		$this->load->view('admin_web/v_main',$data);
	}
	function tambah_artikel(){
		if($this->input->post('submit')){
			$this->m_artikel->tambah_art();
			redirect('admin_web/c_content/lihat_artikel',$data);
		}
		$data['title'] = 'Tambah Artikel';
		$data['main'] = 'admin_web/v_tambah_artikel';
		$this->load->view('admin_web/v_main',$data);
	}
	function edit_artikel($id){
		if($this->input->post('submit')){
			$this->m_artikel->edit_art($id);
			redirect('admin_web/c_content/lihat_artikel');
		}
		$data['hasil'] = $this->m_artikel->get_by_id($id);
		$data['title'] = 'Edit Artikel';
		$data['main'] = 'admin_web/v_edit_artikel';
		$this->load->view('admin_web/v_main',$data);
	}
	function delete_artikel($id){
		$this->m_artikel->delete_art($id);
		redirect('admin_web/c_content/lihat_artikel');
	}
	function delete_komentar($id){
		$this->m_artikel->delete_komen($id);
		redirect('admin_web/c_content/lihat_artikel');
	}
	/*function lihat_komentar(){
		$data['title'] = 'Komentar Artikel';
		$data['q'] = $this->m_artikel->get_komentar($id);
		$data['main'] = 'admin_web/v_artikel';
		$this->load->view('admin_web/v_main',$data);
	}*/
}