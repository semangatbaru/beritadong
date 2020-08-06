<?php defined("BASEPATH") or exit('No direct script acces allowed');
 
class M_kategori extends CI_Model{
	 public $kode;

	 public function __construct()
    {
        $this->load->database();
    }

	function ambil_data(){
		return $this->db->get('kategori');
	}

		function input_data($data,$table){
		$this->kode    = $_POST['id_kategori'];	
		$this->db->insert($table,$data);
	}

	 public function kode()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_kategori,2)) as id_kategori from kategori");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->id_kategori)+1;
                $kd = sprintf("%02s", $tmp);
            }
        }else{
            $kd = "01";
        }
        
        return "K".$kd;
    }

    	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}	

    function select_data($where,$table){
		$this->db->where($where);
		return $this->db->get($table);
	}

    function edit_data($where,$data){
        $this->db->where('id_kategori', $where);
        $this->db->update('kategori',$data);
    }	
}