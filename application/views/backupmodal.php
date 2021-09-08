<?php foreach ($suratmasuk as $data) {?> 

 <?php echo form_open_multipart('index.php/SuratMasukController/editSurat'); ?>
 <div id="tampil_surat<?php echo $data->id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<form action="<?= base_url('index.php/SuratMasukController/editSurat');?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-dialog"> 
                                            <div class="modal-content"> 
                                                <div class="modal-header"> 
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                    <h4 class="modal-title">Lihat Surat Masuk</h4> 
                                                </div> 
                                                <div class="modal-body"> 
                                                    <div class="row"> 
                                                        <div class="col-md-7"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">No. Surat &nbsp;&nbsp;&nbsp;:</label>
                                                                <input type="hidden"  name="id" value="<?=$data->id ?>"> 
                                                               <?php echo $data->no_surat?>
                                                            </div> 
                                                        </div> 
                                                         <div class="col-md-5"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Jenis Surat &nbsp;&nbsp;: </label> 
                                                                <?php echo $data->jenis_surat?>
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                     <div class="row"> 
                                                        <div class="col-md-7"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Asal Surat &nbsp;&nbsp;:</label> <?php echo $data->asal?>
                                                            </div> 
                                                        </div> 
                                                        <div class="col-md-5"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Sifat Surat &nbsp;&nbsp;:</label> 
                                                                <?php echo $data->sifat_surat?>
                                                            </div> 
                                                        </div>
                                                    </div> 

                                                     <div class="row"> 
                                                        <div class="col-md-7"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Perihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label> 
                                                                <?php echo $data->perihal?>
                                                            </div> 
                                                        </div> 
                                                        <div class="col-md-5"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Tembusan &nbsp;&nbsp;:</label> 
                                                                <?php echo $data->tembusan?> 
                                                            </div> 
                                                        </div>
                                                    </div>

                                                    

                                                    
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <label for="field-3" class="control-label">Tanggal<br>Surat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label> 
                                                                <?php echo $data->tanggal?>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label for="field-3" class="control-label">Tanggal<br>Diterima&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label> 
                                                                <?php echo $data->tanggalDiterima?>
                                                            </div>
                                                        </div>
                                                    
                                                    <br>
                                                    <div class="row"> 
                                                        <div class="col-md-7"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Disposisi<br>Surat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label> 
                                                                <?php echo $data->disposisi?> 
                                                            </div> 
                                                        </div> 
                                                        <div class="col-md-5"> 
                                                            <div class="form-group">
                                                            <label for="field-3" class="control-label">Lampiran &nbsp;&nbsp;&nbsp;:</label>  
                                                                <?php echo $data->lampiran?>
                                                            </div> 
                                                        </div> 
                                                    </div>
                                                    
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="field-3" class="control-label">Keterangan :</label> 
                                                                <?php echo $data->keterangan?>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <br>
                                                    <div class="row">
                                                        <label  class="col-md-12 control-label">Berkas</label>
                                                        <div class="col-sm-7">
                                                            <button type="button" class="btn-custom btn-white waves-effect"><a href="<?php echo base_url();?>assets/dokumen/suratmasuk/<?php echo $data->berkas?>" >Lihat</a></button> 
                                                        </div>
                                                    </div>  
                                                </div> 
                                                <div class="modal-footer"> 
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button> 
                                                </div> 
                                            </div> 
                                        </div>
                                    </div><!-- /.modal -->
</form>
  <?php 
}
  ?>
