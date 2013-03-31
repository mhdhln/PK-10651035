<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class M_slide extends CI_Model {
	var $gallery_path;
	var $gallery_path_url;
	
	function __construct() {
		parent::__construct();
		$this->gallery_path = realpath(APPPATH . '../images');
		$this->gallery_path_url = base_url().'images/';
	}
	function get_images(){
		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.', '..', 'thumbs'));
		$images = array();
		foreach ($files as $file) {
			$images []= array (
				'url' => $this->gallery_path_url . $file,
				'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file
			);
		}
		return $images;
	}
	//ambil slide di halaman utama
	function get_slide(){
		$data = array();
		$sql = "SELECT * FROM slide WHERE image <> '' ORDER BY id_slide DESC LIMIT 4";
		$hasil = $this->db->query($sql);
		if($hasil->num_rows() > 0){
			$data = $hasil->result();
		}
		$hasil->free_result();
		return $data;
	}
	//ambil semua slide di halaman admin
	function get_slide_all(){
		$data = array();
		$sql = "SELECT * FROM slide WHERE image <> '' ORDER BY id_slide DESC";
		$hasil = $this->db->query($sql);
		if($hasil->num_rows() > 0){
			$data = $hasil->result();
		}
		$hasil->free_result();
		return $data;
	}
	function get_by_id($id){
		return $this->db->get_where('slide',array('id_slide'=>$id))->row();
	}
	/*function e_slide($id){
		$nama_slide = $this->input->post('nama_slide');
		$keterangan = $this->input->post('keterangan');
		$data = array(
				'nama_slide'=>$nama_slide,
				'keterangan'=>$keterangan
		);
		$this->db->where('id_slide',$id);
		$this->db->update('slide',$data);
	}*/
	function d_slide($id){
		$this->db->where('id_slide',$id);
		$query = $this->db->get('slide');
		$row = $query->row();
		unlink("./images/$row->image");
		unlink("./images/thumbs/$row->image");
		$this->db->delete('slide',array('id_slide'=>$id));
	}
	/*tambah slide di halaman admin
	function t_slide($image,$nama_slide,$keterangan,$tgl_upload){
        $data= array(
			'nama_slide'=>$nama_slide,
			'tgl_upload'=>$tgl_upload,
			'image'=>$image,
			'keterangan'=>$keterangan
        );
       $res= $this->db->insert('slide', $data);
        return $res;
        var_dump($res);
    }*/
	function do_upload($nama_file) {
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path,
			'max_size' => 20000
		);
			
		$this->load->library('upload', $config);
		$this->upload->do_upload($nama_file);
		$data = $this->upload->data($nama_file);
		$image_data = $this->upload->data();
		$nama_filenya = $image_data['file_name'];
		$config = array(
			'source_image' => $image_data['full_path'],
			'new_image' => './images/thumbs',
			'maintain_ratio' => false,
			'width' => 960,
			'height' => 400
		);

		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		return $nama_filenya;
	}
	function getOne($id=''){
		$data = array();
		$sql = "SELECT * FROM slide WHERE id_slide ='".$id."'";
		$hasil = $this->db->query($sql);
		if($hasil->num_rows() > 0){
			$data = $hasil->result();
		}
		$hasil->free_result();
		return $data;
	}
	//hal admin insert	
	function insert($foto = ''){
		if(!$foto){
			$data = array(
				"nama_slide"	=> $this->input->post("nama_slide"),
				"tgl_upload"	=> $this->input->post("tgl_upload"),
				"keterangan"	=> $this->input->post("keterangan")
			);
		}else{
			$data = array(
				"nama_slide" => $this->input->post("nama_slide"),
				"tgl_upload" => $this->input->post("tgl_upload"),
				"image"		 => $foto,
				"keterangan" => $this->input->post("keterangan")
			);
		}
		if($this->input->post('id_slide')){
			$this->db->where("id_slide", $this->input->post('id_slide'));
			$this->db->update("slide", $data);
		}else{
			$this->db->insert("slide",$data);
		}
	}		
}