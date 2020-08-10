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
		$dariDB = $this->M_berita->kode();
        $data = array('id_berita' => $dariDB);

		$data['berita'] = $this->M_berita->ambil_data()->result_array();
		$this->load->view('berita', $data);
	}

			function tambah(){
		$this->load->view('berita');
	}		
 
 		function tambah_aksi(){
 	 $config['upload_path']         = './gambar/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
                   echo 'anda gagal upload';
            }
            else
            {
            	//tampung data dari form
            	$id_berita = $this->input->post('id_berita');
            	$judul = $this->input->post('judul');
            	$deskripsi = $this->input->post('deskripsi');
            	$file = $this->upload->data();
            	$gambar = $file['file_name'];
            	$penulis = $this->input->post('penulis');
            	$id_kategori = $this->input->post('id_kategori');
 
               $data = array(
			        'id_berita' => $id_berita,
			        'judul' => $judul,
			        'deskripsi' => $deskripsi,
			        'gambar' => $gambar,
			        'penulis' => $penulis,
			        'id_kategori' => $id_kategori
				);
				$this->M_berita->input_data($data,'berita');
				redirect('berita');
 
            }
		}

   
}