<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class M_artikel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function ambil_artikel($num, $offset) {
		$this->db->select("*");
		$this->db->from("artikel");
		$this->db->order_by('id_artikel','ASC');
		$data = $this->db->get('', $num, $offset);
		if($data->num_rows() > 0 ){
			return $data->result();
		}else{
			return array();
		}
	}
	function per_id($id){
		$this->db->where('id_artikel', $id);
		$data = $this->db->get('artikel');
		if($data->num_rows() > 0 ){
			return $data->result();
		}else{
			return array();
		}
	}
	function get_komentar($id){
		$this->db->select("*");
		$this->db->from("komentar");
		$this->db->join("artikel","artikel.id_artikel=komentar.id_artikel");
		$this->db->where('artikel.id_artikel', $id);
		$data = $this->db->get();
		if($data->num_rows() > 0 ){
			return $data->result();
		}else{
			return array();
		}
	}
	function t_komentar(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$komentar = $this->input->post('komentar');
		$tanggal = $this->input->post('tgl_komentar');
		$id_art = $this->input->post('id_artikel');
		$judul = $this->input->post('judul');
		$data = array(
				'nama'=>$nama,
				'email'=>$email,
				'komentar'=>$komentar,
				'tgl_komentar'=>$tanggal,
				'id_artikel'=>$id_art,
				'judul'=>$judul
		);
		$this->db->insert('komentar',$data);
	}
	function get_artikel_all(){
		$ambil = $this->db->get('artikel');
		if($ambil->num_rows() > 0){
			foreach($ambil->result() as $data){
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	function get_komen_all(){
		$ambil = $this->db->get('komentar');
		if($ambil->num_rows() > 0){
			foreach($ambil->result() as $data){
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	function tambah_art(){
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tgl_posting = $this->input->post('tgl_posting');
		$data = array(
			'judul'=>$judul,
			'isi'=>$isi,
			'tgl_posting'=>$tgl_posting
		);
		$this->db->insert('artikel',$data);
	}
	function get_by_id($id){
		return $this->db->get_where('artikel',array('id_artikel'=>$id))->row();
	}
	function edit_art($id){
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$data = array(
				'judul'=>$judul,
				'isi'=>$isi
		);
		$this->db->where('id_artikel',$id);
		$this->db->update('artikel',$data);
	}
	function delete_art($id){
		$this->db->where('id_artikel',$id);
		$this->db->delete('artikel');
	}
	function delete_komen($id){
		$this->db->where('id_komentar',$id);
		$this->db->delete('komentar');
	}
}