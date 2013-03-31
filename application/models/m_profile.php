<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class M_profile extends CI_Model{
	function get_profile(){
		$this->db->select('*');
		$this->db->from('profile');
		$this->db->order_by('id','DESC');
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result();
		}else{
			return array();
		}
	}
}