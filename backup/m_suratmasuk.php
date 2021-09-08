<?php
/**
* 
*/
class m_suratmasuk extends CI_Model
{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function selectAll(){
		$this->db->select('*');
		$this->db->from('surat_masuk');
		return $this->db->get();
	}
	function insertSurat($data){


        $aksi= $this->db->insert('surat_masuk',$data);
        return $aksi;
           
    }

    function selectById($id){
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->where('id', $id);
        
        return $this->db->get();
    }

    public function edit_surat($where, $data, $tabel){
        $this->db->where($where);
        return $this->db->update($tabel, $data);
    }
function hapus_surat($where,$surat_masuk){
    $this->db->where($where);
    $this->db->delete($surat_masuk);
}


	
}


?>