<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_berita');
                $this->load->helper('url');
}
	
	public function index()
	{

	$data['berita'] = $this->M_berita->ambil_data()->result_array();
		$this->load->view('berita', $data);
	}

}
