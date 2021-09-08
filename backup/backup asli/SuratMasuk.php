<?php
/**
* 
*/
class SuratMasuk extends CI_Controller{
	
	function __construct()	{
		parent::__construct();
		$this->load->model('m_suratmasuk');
	}

public function index(){
	$data['surat_masuk'] = $this->m_suratmasuk->selectAll()->result();

	$this->load->view('v_suratmasuk', $data);


}
function kembali(){
	redirect('index.php/SuratMasuk');
}
public function prosesTambahSurat(){
        $data['id']=$this->input->post('idsurat');
        
    	$data['no_surat']=$this->input->post('nosurat');
    	$data['judul']=$this->input->post('judulsurat');
    	$data['asal']=$this->input->post('asalsurat');

    	$tanggal2=$this->input->post('tanggalsurat');

    	$data['tanggal']=date('Y-m-d',strtotime($tanggal2));
    	$data['berkas']=$this->input->post('berkassurat');


    $aksi=$this->m_suratmasuk->insertSurat($data);

    if($aksi){

    $this->session->set_flashdata('message', 
                '<div  id="berhasil" class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda berhasil Input Data Barang </p>
                </div>');    

    $this->kembali(); 
    
        }else{
                echo "gagal Vrooh";
        }
    }




public function editSurat($id){

        $id = $this->input->post('idsurat');
        $no_surat = $this->input->post('nosurat');
        $judul = $this->input->post('judulsurat');
        $asal = $this->input->post('asalsurat');
        $tanggal2 = $this->input->post('tanggalsurat');
        $tanggal = date(Y-m-d,strtotime($tanggal2));
        $berkas =  $this->input->post('berkassurat');
        $where = array('id' => $id);

        $data = array('idsurat' => $id, 'nosurat' => $no_surat, 'judulsurat' => $judul, 'asalsurat'=> $asal, 'tanggalsurat' => $tanggal2, 'berkassurat' => $berkas);
        $this->m_suratmasuk->edit_surat($where, $data, 'surat_masuk');
        redirect('index.php/SuratMasuk');
    }



}







?>