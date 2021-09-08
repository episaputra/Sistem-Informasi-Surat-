<?php
/**
* 
*/
class LaporanController extends CI_Controller{
    
    function __construct()  {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->helper(array('form', 'url'));
        $this->load->model('ModelSuratMasuk');
        $this->load->model('ModelSuratKeluar');
    }

public function index(){

  

    $this->load->view('ViewLaporan');
}

public function laporanSurat(){

        $jenis = $this->input->post('jenis');
        $tanggalAwal = $this->input->post('tanggalAwal');
        $tanggalAkhir = $this->input->post('tanggalAkhir');
        $judul = '';


        $data = '';
        if ($jenis == 'suratmasuk') {
        
        $data=$this->ModelSuratMasuk->laporanSurat($tanggalAwal,$tanggalAkhir)->result();
        $judul = "ARSIP SURAT MASUK";
        }else{

        $data=$this->ModelSuratKeluar->laporanSurat($tanggalAwal,$tanggalAkhir)->result();
            
        $judul = "ARSIP SURAT KELUAR";
        }


        
        //$dataDiri = $this->db->query("SELECT * FROM karyawan WHERE idKaryawan = '".$idKaryawan."'")->result();

        $pdf = new pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Laporan Absen');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('TVRI RIAU');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->SetFont('times','',10);
            $pdf->AddPage();

            ob_start();            
?>
<h4 style="text-align: center;"><strong>PEMERINTAH PROVINSI RIAU</strong></h4>
<h3 style="line-height: 5px;text-align: center;"><strong>BADAN KEPEGAWAIAN DAERAH</strong></h3>
<p style="line-height: 5px;text-align: center;">Jl. Cut Nyak Dien No. 1 Pekanbaru, Kode pos 28216</p>
<p style="line-height: 0px;text-align: center;">Telepon (0761) 33073, Fax (0761) 21172, 28971</p>
<p style="line-height: 0px;text-align: center;">Email : bkd@riau.go.id, Web http:// bkd.riau.go.id</p>



<hr />
<p style="line-height: 0px; text-align: center; color: black;">&nbsp;</p>

<p style="text-align: center; "><strong>LAPORAN</strong></p>

<p style="text-align: center; line-height: 0px"><strong><?php echo $judul; ?></strong></p>

<table>
    <tr>
        <td style="width: 15%">Dari tanggal</td><td style="width: 1%">:</td>
        <td style="width: 20%"><?php echo date('d-m-Y',strtotime($tanggalAwal)); ?></td>
    </tr>
    <tr>
        <td>Hingga tanggal</td><td>:</td>
        <td><?php echo date('d-m-Y',strtotime($tanggalAkhir)); ?></td>
    </tr>
    
</table>

    <table border="1">
        <tr>
            <td style="text-align: center;"><b>Id Surat</b></td>
            <td style="text-align: center;"><b>Nomor Surat</b></td>
            <td style="text-align: center; "><b>Perihal</b></td>
            <td style="text-align: center; "><b>Jenis Surat</b></td>
            <td style="text-align: center; "><b>Sifat Surat</b></td>
            <td style="text-align: center; "><b>Tanggal Surat</b></td>
            
        </tr>

<?php
    
    
    foreach ($data as $v) {

        

?>        
        <tr>
            <td style="text-align: center;"><?php echo $v->id?></td>
            <td style="text-align: center;"><?php echo $v->no_surat?></td>
            <td style="text-align: center;"><?php echo $v->perihal; ?></td>
            <td style="text-align: center;"><?php echo $v->jenis_surat; ?></td>
            <td style="text-align: center;"><?php echo $v->sifat_surat; ?></td>
            <td style="text-align: center;"><?php echo $v->tanggal; ?></td>
        </tr>
<?php       
}    
?>
        </table>
        
<?php

            $pdf->writeHTML(ob_get_contents());
            ob_clean();
            $pdf->Output('Laporan Absen.pdf', 'I');

    }


}
?>