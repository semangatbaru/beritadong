<?php defined("BASEPATH") or exit('No direct script acces allowed');
 
class M_berita extends CI_Model{
    
    private $_tableB = "kategori";


   public function ambil_data()
   {
        // query sql di database SELECT berita.*, kategori.nama_kategori FROM `berita` INNER JOIN kategori ON kategori.id_kategori = berita.id_berita
        $this->db->select('berita.*, kategori.nama_kategori');
        $this->db->from('berita');
        $this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori','left');
        $query = $this->db->get();
        return $query;
    }

    public function ambil_kategori()
   {
    return $this->db->get('kategori');
    }
    public function ambilKategori(){
        return $this->db->get($this->_tableB)->result();
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
