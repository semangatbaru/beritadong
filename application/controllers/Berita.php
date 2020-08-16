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

		$data["berita"] = $this->M_berita->ambil_data()->result_array();
		$data["kategori"] = $this->M_berita->ambilKategori();
		$this->load->view('berita', $data);
	}

	function coba()
	{
		$data = $this->M_berita->ambil_data()->result();
		print_r($data);
	}

	

	function tambah(){
		$this->load->view('berita');
	}		
 
 		public function tambah_aksi(){
 	 		$config['upload_path']         = './gambar/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
            $config['max_size']             = 20000;
            $config['file_name']			= $this->input->post('id_berita');
            $config['overwrite']   			= true;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
 
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
				$tgl=date('Ydm');
 
               $data = array(
			        'id_berita' => $id_berita,
			        'judul' => $judul,
			        'deskripsi' => $deskripsi,
			        'gambar' => $gambar,
			        'penulis' => $penulis,
					'id_kategori' => $id_kategori,
					'tanggal' => $tgl
				);
				$this->M_berita->input_data($data,'berita');
				redirect('Berita');
 
            }
		}

   function hapus($id_berita){
   	$where = array('id_berita' => $id_berita);
   	$this->M_berita->hapus_data($where,'berita');
   	redirect('berita');
   }

   function edit(){
		$id_berita = $this->input->post('id_berita');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$gambar= $this->input->post('gambar');
		$penulis = $this->input->post('penulis');
		$id_kategori = $this->input->post('id_kategori');
		$tanggal = $this->input->post('tanggal');

		$data = array('id_berita' => $id_berita, 'judul' => $judul, 'deskripsi' => $deskripsi, 'gambar' => $gambar, 'penulis' => $penulis, 'id_kategori' => $id_kategori, 'tanggal' => $tanggal);
		$this->M_berita->edit_data($id_berita, $data);
			redirect('berita');
		// print_r($data);

	}
}