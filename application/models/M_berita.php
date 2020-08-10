<?php defined("BASEPATH") or exit('No direct script acces allowed');
 
class M_berita extends CI_Model{
	 

	 public function __construct()
    {
        $this->load->database();
    }

    function ambil_data(){
        return $this->db->get('berita');
    }

    function input_data($data,$table){
        $this->kode    = $_POST['id_berita']; 
        $this->db->insert($table,$data);
        return $this->db->get('berita');
   
    }

     public function kode()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_berita,2)) as id_berita from berita");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->id_berita)+1;
                $kd = sprintf("%02s", $tmp);
            }
        }else{
            $kd = "01";
        }
        
        return "K".$kd;
    }


    
    

}
