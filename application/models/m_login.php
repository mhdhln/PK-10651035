<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class M_login extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function cek_login_admin($username, $password){
		$query = $this->db->where('username',$username)
				 ->where('password',md5($password))
				 ->limit(1)
				 ->get('admin');
		if($query->num_rows() == 1){
		return $query->num_rows();
		}else{
			return FALSE;
		}
	}
}