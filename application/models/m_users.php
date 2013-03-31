<?php if(!defined('BASEPATH')) exit('No direct script acess allowed');
class M_users extends CI_Model{
	function ambil_users(){
		$ambil = $this->db->get('admin');
		if($ambil->num_rows() > 0){
			foreach($ambil->result() as $data){
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	function get_usr_id($id){
		return $this->db->get_where('admin',array('id_admin'=>$id))->row();
	}
	function edit_usr($id){
		$nama_lengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$almt = $this->input->post('alamat');
		$email = $this->input->post('email');
		$data = array(
			'nama_lengkap'=>$nama_lengkap,
			'username'=>$username,
			'password'=>md5($password),
			'alamat'=>$almt,
			'email'=>$email
		);
		$this->db->where('id_admin',$id);
		$this->db->update('admin',$data);
	}
	function tambah_usr(){
		$nama_leng = $this->input->post('nama_lengkap');
		$usr = $this->input->post('username');
		$passw = $this->input->post('password');
		$almt = $this->input->post('alamat');
		$email = $this->input->post('email');
		$data = array(
			'nama_lengkap'=>$nama_leng,
			'username'=>$usr,
			'password'=>$passw,
			'alamat'=>$almt,
			'email'=>$email
		);
		$this->db->insert('admin',$data);
	}
	function delete_usr($id){
		$this->db->where('id_admin',$id);
		$this->db->delete('admin');
	}
	function ambil_profile(){
		$a = $_SESSION['username'];
		$this->db->select("*");
		$this->db->from("admin");
		$this->db->where("username=$a");
		$data = $this->db->get();
		if($data->num_rows() >= 1){
			return $data->result();
		}else{
			return array();
		}
	}
}