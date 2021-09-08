<?php
/**
* 
*/
class ModelSuratKeluar extends CI_Model
{
    
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function selectAll(){
        $this->db->select('*');
        $this->db->from('suratkeluar');
        return $this->db->get();
    }
    function insertSurat($data){


        $aksi= $this->db->insert('suratkeluar',$data);
        return $aksi;
           
    }

    public function get_product_keyword($keyword,$jenisKeyword){
           
        $this->db->select('*');
        $this->db->from('suratkeluar');
        $this->db->where($jenisKeyword, $keyword);
        
        return $this->db->get();   
    }

    function selectById($id){
       
        $this->db->select('*');
        $this->db->from('suratkeluar');
        $this->db->where('id', $id);
        
        return $this->db->get();
    }

    public function edit_surat($where, $data, $tabel){
        $this->db->where($where);
        return $this->db->update($tabel, $data);
    }
function hapus_surat($where,$surat_keluar){
    $this->db->where($where);
    $this->db->delete($surat_keluar);
}
public function laporanSurat($tanggalAwal,$tanggalAkhir){

        $query=$this->db->query("SELECT * FROM suratkeluar WHERE   tanggal >= '".$tanggalAwal."' AND tanggal<= '".$tanggalAkhir."'");

        return $query; 
    }


    
}


?>