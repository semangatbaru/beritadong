<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

		function __construct(){
		parent::__construct();		
		$this->load->model('M_kategori');
                $this->load->helper('url');
	}

	public function index()
	{
		$dariDB = $this->M_kategori->kode();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        // $nourut = substr($dariDB, 3, 4);
        // $kodeBarangSekarang = $nourut+1;
        $data = array('id_kategori' => $dariDB);
		$data['kategori'] = $this->M_kategori->ambil_data()->result_array();
		$this->load->view('kategori',$data);
	}

		function tambah(){
		$this->load->view('kategori');
	}		
 
 		function tambah_aksi(){
		$id_kategori = $this->input->post('id_kategori');
		$kategori = $this->input->post('nama_kategori');
		
		$data = array(
			'id_kategori' => $id_kategori,
			'nama_kategori' => $kategori,
			
			);
		$this->M_kategori->input_data($data,'kategori');
		redirect('kategori');
	}

	function hapus($id_kategori){
		$where = array('id_kategori' => $id_kategori);
		$this->M_kategori->hapus_data($where,'kategori');
		redirect('kategori');
	}

	function edit(){
		$id_kategori = $this->input->post('id_kategori');
		$nama_kategori = $this->input->post('nama_kategori');

		$data = array('id_kategori' => $id_kategori, 'nama_kategori' => $nama_kategori);
		$this->M_kategori->edit_data($id_kategori, $data);
		redirect('Kategori');

	}

	
}
