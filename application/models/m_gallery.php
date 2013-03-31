<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class M_gallery extends CI_Model{

	var $gallery_path;
	var $gallery_path_url;
	
	function __construct() {
		parent::__construct();
		$this->gallery_path = realpath(APPPATH . '../uploads');
		$this->gallery_path_url = base_url().'uploads/';
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
}