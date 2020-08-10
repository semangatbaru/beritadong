<?php defined("BASEPATH") or exit('No direct script acces allowed');
 
class M_registrasi extends CI_Model{
	 public $kode;

	 public function __construct()
    {
        $this->load->database();
    }

	function ambil_data(){
		return $this->db->get('user');
	}

		function input_data($data,$table){
		$this->kode    = $_POST['id_user'];	
		$this->db->insert($table,$data);
	}

	 public function kode()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_user,2)) as id_user from user");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $u){
                $tmp = ((int)$u->id_user)+1;
                $kd = sprintf("%02s", $tmp);
            }
        }else{
            $kd = "01";
        }
        
        return "U".$kd;
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
        $this->db->where('id_user', $where);
        $this->db->update('user',$data);
    }	
}