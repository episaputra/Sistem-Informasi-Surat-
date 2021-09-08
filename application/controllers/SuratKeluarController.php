<?php
/**
* 
*/
class SuratKeluarController extends CI_Controller{
    
    function __construct()  {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('ModelSuratKeluar');
    }

public function index(){

    $data['suratkeluar'] = $this->ModelSuratKeluar->selectAll()->result();

    $this->load->view('ViewSuratKeluar', $data);
}

public function search(){

   $cari = $this->input->post('keyword');
    
    $data['suratkeluar']=$this->db->query("SELECT * FROM suratkeluar WHERE id like '%".$cari."%' OR  no_surat like '%".$cari."%' OR judul like '%".$cari."%' OR tujuan like '%".$cari."%' OR tanggal like '%".$cari."%' OR keterangan like '%".$cari."%'")->result();

    $this->load->view('ViewSuratKeluar',$data);
}

function kembali(){
    redirect('index.php/SuratKeluarController');
}
    public function prosesTambahSurat(){


            $config['upload_path']         = './assets/dokumen/suratkeluar';  // folder upload 
            $config['allowed_types']        = 'pdf'; // jenis file
            $config['max_size']             = 300000;
 
           $this->load->library('upload', $config);
           $this->upload->do_upload('berkassurat'); 

            $data['id']=$this->input->post('idsurat');
        
             $data['no_surat']=$this->input->post('nosurat');
             $data['perihal']=$this->input->post('perihalsurat');
             $data['tujuan']=$this->input->post('tujuansurat');
             $data['sifat_surat']=$this->input->post('sifatsurat');
             $data['lampiran']=$this->input->post('lampiran');
             $data['jenis_surat']=$this->input->post('jenissurat');
             $data['tembusan']=$this->input->post('tembusan');
             
             $data['keterangan']=$this->input->post('keterangan');
             $data['tanggal']=$this->input->post('tglsurat');
             $file = $this->upload->data();
             $data['berkas']=$file['file_name'];


if (count($cekData) >0) {

        $dataAlert = array(
                'idAlert' => 2,
                'isiAlert' => "<b>Gagal !</b> Data dengan ID ".$data['id']." Telah Ada"
                );
        $this->session->set_userdata($dataAlert);
        redirect('index.php/SuratKeluar');

    }else{
 
            $aksi=$this->ModelSuratKeluar->insertSurat($data);

    if($aksi){

        $dataAlert = array(
                'idAlert' => 1,
                'isiAlert' => "<b>Berhasil !</b> Data Berhasil Ditambahkan"
                );
        $this->session->set_userdata($dataAlert);

        redirect('index.php/SuratKeluarController');
    
        }else{
                echo "Maaf Gagal";
        }
}
}



public function editSurat(){


        
            $config['upload_path']         = './assets/dokumen/suratkeluar';  // folder upload 
            $config['allowed_types']        = 'pdf'; // jenis file
            $config['max_size']             = 300000;
            $config['overwrite']           = false;

           $this->load->library('upload', $config);
           $this->upload->initialize($config);
           if($this->upload->do_upload('berkas')){ 
            $dat = array('upload_data' => $this->upload->data());

            $data['id']=$this->input->post('id');
                $data['no_surat']=$this->input->post('nosurat');
             $data['perihal']=$this->input->post('perihalsurat');
             $data['tujuan']=$this->input->post('tujuansurat');
             $data['jenis_surat']=$this->input->post('jenissurat');
             $data['sifat_surat']=$this->input->post('sifatsurat');

            
             $data['tanggal']=$this->input->post('tglsurat');
             $data['tembusan']=$this->input->post('tembusan');
             $data['lampiran']=$this->input->post('lampiran');
             $data['keterangan']=$this->input->post('keterangan');
             $data['berkas']=$dat['upload_data']['file_name'];
             $where = array('id' => $data['id']);

            $data  = array('id' => $data['id'],'no_surat' => $data['no_surat'],'perihal' => $data['perihal'],'tujuan' => $data['tujuan'],'jenis_surat' => $data['jenis_surat'],'sifat_surat' => $data['sifat_surat'],'tanggal' => $data['tanggal'],'tembusan' => $data['tembusan'],'lampiran' => $data['lampiran'], 'keterangan' => $data['keterangan'],'berkas' => $data['berkas'] );
            $aksi=$this->ModelSuratKeluar->edit_surat($where, $data, 'suratkeluar');
if($aksi){

        $dataAlert = array(
                'idAlert' => 3,
                'isiAlert' => "<b>Berhasil !</b> Data Telah Diubah"
                );
        $this->session->set_userdata($dataAlert);

            redirect('index.php/SuratKeluarController');
    
        }else{
                echo "Maaf Gagal";
        }
            }else{            
            $data['id']=$this->input->post('id');
            $data['no_surat']=$this->input->post('nosurat');
             $data['perihal']=$this->input->post('perihalsurat');
             $data['tujuan']=$this->input->post('tujuansurat');
             $data['jenis_surat']=$this->input->post('jenissurat');
             $data['sifat_surat']=$this->input->post('sifatsurat');

            
             $data['tanggal']=$this->input->post('tglsurat');
             $data['tembusan']=$this->input->post('tembusan');
             $data['lampiran']=$this->input->post('lampiran');
             $data['keterangan']=$this->input->post('keterangan');
             $where = array('id' => $data['id']);

            $data  = array('id' => $data['id'],'no_surat' => $data['no_surat'],'perihal' => $data['perihal'],'tujuan' => $data['tujuan'],'jenis_surat' => $data['jenis_surat'],'sifat_surat' => $data['sifat_surat'],'tanggal' => $data['tanggal'],'tembusan' => $data['tembusan'],'lampiran' => $data['lampiran'], 'keterangan' => $data['keterangan'] );
            $aksi=$this->ModelSuratKeluar->edit_surat($where, $data, 'suratkeluar');
if($aksi){

        $dataAlert = array(
                'idAlert' => 3,
                'isiAlert' => "<b>Berhasil !</b> Data Telah Diubah"
                );
        $this->session->set_userdata($dataAlert);

            redirect('index.php/SuratKeluarController');
    
        }else{
                echo "Maaf Gagal";
        }            
            }
    }
   public function prosesHapusSurat($id){
    
        $where = array('id' => $id);
        $this->ModelSuratKeluar->hapus_surat($where,'suratkeluar');
        
        $dataAlert = array(
            'idAlert' => 4,
            'isiAlert' => "<b>Berhasil !</b> Data dengan ID ".$id." Telah Dihapus"
            );
        $this->session->set_userdata($dataAlert);
        redirect('index.php/SuratKeluarController');
    }

}







?>