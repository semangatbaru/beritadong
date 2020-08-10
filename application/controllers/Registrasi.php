<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

		function __construct(){
		parent::__construct();		
		$this->load->model('M_registrasi');
                $this->load->helper('url');
	}

	public function index()
	{
		$dariDB = $this->M_registrasi->kode();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        // $nourut = substr($dariDB, 3, 4);
        // $kodeBarangSekarang = $nourut+1;
        $data = array('id_user' => $dariDB);
		$data['user'] = $this->M_registrasi->ambil_data()->result_array();
		$this->load->view('registrasi',$data);
	}

		function tambah(){
		$this->load->view('registrasi');
	}		
 
 		function tambah_aksi(){
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data = array(
			'id_user' => $id_user,
			'username' => $username,
			'password' => password_hash($password, PASSWORD_BCRYPT),
			);
		$this->M_registrasi->input_data($data,'user');
		redirect('registrasi');
	}

	function hapus($id_user){
		$where = array('id_user' => $id_user);
		$this->M_registrasi->hapus_data($where,'user');
		redirect('registrasi');
	}

	
}
