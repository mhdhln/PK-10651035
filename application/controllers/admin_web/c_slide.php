<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class C_slide extends CI_Controller{
    function __construct (){
		session_start();
        parent::__construct();
		$this->load->model(array('m_slide','m_login'));
		if(!isset($_SESSION['username'])){
			redirect('admin_web/c_login','refresh');
		}
    }
	function index(){
		$data['title'] = 'Data Slide';		
		$data['browse_slide'] = $this->m_slide->get_slide_all();
		$data['main'] = 'admin_web/v_slide';
		$this->load->view('admin_web/v_main', $data);
	}
	//edit slide di halaman admin
	function edit_slide($id){
		if($this->input->post('submit')){
			$this->m_slide->e_slide($id);
			redirect('admin_web/c_slide');
		}
		$data['hasil'] = $this->m_slide->get_by_id($id);
		$data['title'] = 'Edit Data Slide';
		$data['main'] = 'admin_web/v_edit_slide';
		$this->load->view('admin_web/v_main',$data);
	}
	function delete_slide($id){
		$this->m_slide->d_slide($id);
		redirect('admin_web/c_slide');
	}
	
	function add(){
		$data['title'] = 'Tambah Slide';
		$data['browse_slide'] = $this->m_slide->get_slide_all();
		$data['main'] = 'admin_web/v_slide';
		$this->load->view('admin_web/v_main', $data);
	}
	function edit(){
		$data['title'] = 'Edit Data SLide';
		$data['detail_slide'] = $this->m_slide->getOne($this->uri->segment(4));
		$data['main'] = 'admin_web/v_edit_slide';
		$this->load->view('admin_web/v_main', $data);
	}
	function save(){
		$config = array(
				array(
					  'field'   => 'nama_slide',
					  'label'   => 'Nama Slide',
					  'rules'   => 'required'
				   ),
				array(
					  'field'   => 'keterangan',
					  'label'   => 'Keterengan',
					  'rules'   => 'required'
				   )
				 );
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		if ($this->form_validation->run() == FALSE){
			$this->add();
		}else{
			$nm_foto = $this->m_slide->do_upload('image');
			$this->m_slide->insert($nm_foto);
			redirect('admin_web/c_slide', 'refresh');
		}
	}
}