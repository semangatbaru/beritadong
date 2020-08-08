<?php defined("BASEPATH") or exit('No direct script acces allowed');
 
class M_berita extends CI_Model{
	 

	 public function __construct()
    {
        $this->load->database();
    }

	function ambil_data(){
		return $this->db->get('berita');
	}
}
