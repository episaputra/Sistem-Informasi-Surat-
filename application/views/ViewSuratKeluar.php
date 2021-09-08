<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?=base_url();?>assets/images/images.ico">

        <title>SIK</title>


    <!-- DataTables -->
    <link href="<?=base_url();?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/tami.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=base_url();?>assets/plugins/morris/morris.css">
        <link href="<?=base_url();?>assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">
 
        <link href="<?=base_url();?>assets/plugins/custombox/css/custombox.css" rel="stylesheet">
        <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?=base_url();?>assets/js/modernizr.min.js"></script>
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?=base_url();?>assets/js/modernizr.min.js"></script>
        
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span></i>SIKD</span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                           <!-- -->

                            
<ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profil waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><i class="ti-user m-r-10 text-primary"></i> </a>
                                    <ul class="dropdown-menu">
                                        
                                        <li><a href="<?= base_url() ?>index.php/LoginController/logout"><i class="ti-power-off m-r-10 text-primary"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                               </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                            <li class="text-muted menu-title">ARSIP SURAT DIGITAL</li>

                            <li class="has_sub">
                                <a href="<?= base_url() ?>index.php/Dashboard" class="waves-effect"><i class="ti-home"></i> <span> Dashboard</span></span></a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="<?= base_url() ?>index.php/SuratMasukController" class="waves-effect"><i class="glyphicon glyphicon-inbox"></i> <span> Surat Masuk </span>  </a>
                            </li>

                            <li class="has_sub">
                                <a href="<?= base_url() ?>index.php/SuratKeluarController" class="waves-effect"><i class="glyphicon glyphicon-send"></i></span><span> Surat keluar </span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="<?= base_url() ?>index.php/LaporanController" class="waves-effect"><i class="ti-arrow-up ti-clipboard"></i></span><span> Laporan </span> </a>
                            </li>


                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->





            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="card-box table-responsive">
                        <!-- Page-Title -->
                        <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box">
                                        <h4 class="page-title"><b>Surat Keluar</b></h4>
                                        <p class="text-muted m-b-30 font-13">
                                        
                                        </p>

                                        <div class="m-b-30">
                                            <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">+ Tambah Surat</button>
                                        </div>

<!--Start Notifikasi-->
<?php //alert berhasil menambah,mengubah dan menghapus data karyawan dan menambah absen
        if ($this->session->userdata('idAlert') ==1 || $this->session->userdata('idAlert') ==3 || $this->session->userdata('idAlert') ==4 || $this->session->userdata('idAlert') ==5) {
?>          
                <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                ×
                            </button>
                        <?php echo $this->session->userdata('isiAlert');; ?>
                </div>
<?php  //alert gagal menambah data karyawan
        }elseif ($this->session->userdata('idAlert') ==2) {
?>
                <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                ×
                            </button>
                        <?php echo $this->session->userdata('isiAlert');; ?>
                </div>
<?php 
        }
        $this->session->unset_userdata('idAlert');
?>                                    <!--End Notifikasi-->

                                        
                                         <label class="form-inline">Tampilkan
                            <select id="demo-show-entries" class="form-control input-sm">
                                <option value="5">5</option>
                                <option value="10" selected="">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </select>
                            Data
                            <div style="padding-left: 910px" id="datatable-editable_filter" class="dataTables_filter"><label>Search:
                                <form action="<?= base_url()?>index.php/SuratKeluarController/search" method="POST">
                                    <label><input type="text"  name="keyword" class="form-control input-sm" placeholder="" aria-controls="datatable-editable"></label>

                                    <button type="submit" class="btn btn-default waves-effect waves-light">Cari</button>
                                </form>
                                </div>
                        </label>

                        <br>
                        <table id="demo-foo-pagination" class="table m-b-0 toggle-arrow-tiny" data-page-size="40">
                                        <thead>
                                            <tr role="row">
                                                <th tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1"  style="width: 90px;">Id </th>
                                                <th tabindex="0" rowspan="1" colspan="1"  style="width: 190px;">No. Surat</th>
                                                <th tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 290px;">Isi Ringkas</th><th rowspan="1" colspan="1" aria-label="Actions" style="width: 160px; ">Tujuan</th>
                                                <th rowspan="1" colspan="1" aria-label="Actions" style="width: 135px;">Tanggal</th>
                                                <th tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 200px;">Sifat Surat</th>
                                                <th rowspan="1" colspan="1" aria-label="Actions" style="width: 70px;padding-left:0px">Aksi</th></tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                            
                                            <?php
        foreach($suratkeluar as $data){ ?>
             <tr>
                        <td><?php echo $data->id ?></td>
                        <td><?php echo $data->no_surat ?></td>
                        <td><a href="#tampil_surat<?php echo $data->id;?>" data-toggle="modal"><?php echo $data->perihal ?></a></td>
                        <td><?php echo $data->tujuan ?></td>
                        <td><?php echo date('d-m-Y',strtotime($data->tanggal)); ?></td>
                        <td><?php echo $data->sifat_surat ?></td>
                        

            <td><a href="#edit_surat<?php echo $data->id;?>" data-toggle="modal"><button class="btn btn-icon waves-effect waves-light btn-warning"> <i class="fa fa-edit"></i> </button></a>  </td>

            <td><a href=javascript:pesanDelete('<?php echo("$data->id")?>')><button type='button' class='btn btn-danger'> Hapus </button></a></td>
            </tr>

<?php                       
                    
        }
?>  
                                            
                                </tbody>

                                <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="text-right">
                                            <ul class="pagination pagination-split m-t-30"></ul>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                                    </table></div></div></div>
                                </div>
                            </div>
                                </div>
                            </div>

                           

                    </div>
                    </div> <!-- container -->
                </div><!-- content -->

                <footer class="footer text-right">
                    © 2018. 
                </footer>
            </div>
            
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
 <?php echo form_open_multipart('index.php/SuratKeluarController/prosesTambahSurat'); ?>
    
 <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog"> 
                                            <div class="modal-content"> 
                                                <div class="modal-header"> 
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                    <h4 class="modal-title">Tambah Surat Keluar</h4> 
                                                </div> 
                                                <div class="modal-body"> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">No. Surat</label> 
                                                                <input type="text" required class="form-control field-3" name="nosurat" placeholder=""> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Perihal</label> 
                                                                <input type="text" required class="form-control field-3" name="perihalsurat" placeholder=""> 
                                                            </div> 
                                                        </div> 
                                                    </div>
                                                     <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Tujuan Surat</label> 
                                                                <input type="text" required class="form-control field-3" name="tujuansurat"  placeholder="Asal Surat"> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Jenis Surat</label> 
                                                                <input type="text" required class="form-control field-3" name="jenissurat"  placeholder="Jenis Surat"> 
                                                            </div> 
                                                        </div> 
                                                    </div>
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Sifat Surat</label> 
                                                                <select  name="sifatsurat" class="form-control">
                                        
                                                       
                                                        <option value="Penting">Penting</option>
                                                        <option value="Biasa">Biasa</option>
                                                        <option value="Rahasia">Rahasia</option>
                                                    </select>
                                                            </div> 
                                                        </div> 
                                                    </div>

                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="field-3" class="control-label">Tanggal Surat</label> 
                                                                <input type="date" name="tglsurat" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Tembusan</label> 
                                                                <input required type="text" class="form-control field-3" name="tembusan" placeholder="Tembusan"> 
                                                            </div> 
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group">
                                                            <label for="field-3" class="control-label">Lampiran</label>  
                                                                <input required type="text" class="form-control field-3" name="lampiran" placeholder="Lampiran"> 
                                                            </div> 
                                                        </div> 
                                                    </div>

                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="field-3" class="control-label">Keterangan</label> 
                                                                <input type="text" name="keterangan" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <br>
                                                    <div class="row">
                                                        <label  class="col-md-12 control-label">Berkas</label>
                                                        <div class="col-sm-7">
                                                            <input required type="file" name="berkassurat" class="form-control">
                                                        </div>
                                                    </div>  
                                                </div> 
                                                <div class="modal-footer"> 
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button> 
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button> 
                                                </div> 
                                            </div> 
                                        </div>
                                    </div><!-- /.modal --><?php echo form_close() ?>


 <?php foreach ($suratkeluar as $data) {?> 

 <?php echo form_open_multipart('index.php/SuratKeluarController/editSurat'); ?>
 <div id="edit_surat<?php echo $data->id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<form action="<?= base_url('index.php/SuratKeluarController/editSurat');?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-dialog"> 
                                            <div class="modal-content"> 
                                                <div class="modal-header"> 
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                    <h4 class="modal-title">Edit Surat Keluar</h4> 
                                                </div> 
                                                <div class="modal-body"> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">No. Surat</label> 
                                                                <input type="hidden" name="id" value="<?=$data->id ?>"> 
                                                                <input type="text" value="<?=$data->no_surat?>" required class="form-control field-3" name="nosurat" placeholder=""> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Perihal</label> 
                                                                <input type="text" required value="<?=$data->perihal?>" class="form-control field-3" name="perihalsurat" placeholder=""> 
                                                            </div> 
                                                        </div> 
                                                    </div>
                                                     <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Tujuan Surat</label> 
                                                                <input type="text" required class="form-control field-3" name="tujuansurat"  placeholder="Tujuan Surat" value="<?=$data->tujuan?>"> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Jenis Surat</label> 
                                                                <input type="text" value="<?=$data->jenis_surat?>" required class="form-control field-3" name="jenissurat"  placeholder="Jenis Surat"> 
                                                            </div> 
                                                        </div> 
                                                    </div>
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Sifat Surat</label> 
                                                                <select  name="sifatsurat" class="form-control">
                                        
                                                       
                                                        <option value="Penting">Penting</option>
                                                        <option value="Biasa">Biasa</option>
                                                        <option value="Rahasia">Rahasia</option>
                                                    </select>
                                                            </div> 
                                                        </div> 
                                                    </div>

                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="field-3" class="control-label">Tanggal Surat</label> 
                                                                <input type="date" value="<?=$data->tanggal?>" name="tglsurat" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Tembusan</label> 
                                                                <input required type="text" class="form-control field-3" value="<?=$data->tembusan?>" name="tembusan" placeholder="Tembusan"> 
                                                            </div> 
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group">
                                                            <label for="field-3" class="control-label">Lampiran</label>  
                                                                <input required type="text" value="<?=$data->lampiran?>" class="form-control field-3" name="lampiran" placeholder="Lampiran"> 
                                                            </div> 
                                                        </div> 
                                                    </div>

                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="field-3" class="control-label">Keterangan</label> 
                                                                <input type="text" value="<?=$data->lampiran?>" name="keterangan" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <br>
                                                    <div class="row">
                                                        <label  class="col-md-12 control-label">Berkas</label>
                                                        <div class="col-sm-7">
                                                            <input  type="file" multiple="multiple" name="berkas" class="form-control">
                                                        </div>
                                                    </div> 
                                                </div> 
                                                <div class="modal-footer"> 
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button> 
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button> 
                                                </div> 
                                            </div> 
                                        </div>
                                    </div><!-- /.modal -->
</form>
  <?php 
}
  ?>


<?php foreach ($suratkeluar as $data) {?> 

 <?php echo form_open_multipart('index.php/SuratKeluarController/editSurat'); ?>
 <div id="tampil_surat<?php echo $data->id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<form action="<?= base_url('index.php/SuratMasukController/editSurat');?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-dialog"> 
                                            <div class="modal-content"> 
                                                <div class="modal-header"> 
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                    <h4 class="modal-title">Lihat Surat Keluar</h4> 
                                                </div> 
                                                <div class="modal-body"> 
                                                    <table  >
                                                    <tr>
                                                        <td ><b>No. Surat</b></td> <td>:</td>
                                                        <td > <?php echo $data->no_surat; ?></td>
                                                        
                                                    </tr>

                                                    <tr>
                                                        <td ><b>Tujuan Surat</b></td> <td>:</td>
                                                        <td > <?php echo $data->tujuan; ?></td>
                                                        
                                                    </tr>
                                                    <tr><td ><b>Jenis Surat</b></td><td>:</td>
                                                        <td> <?php echo $data->jenis_surat?></td></tr>
                                                    <tr>
                                                        <td><b>Perihal</b></td> <td>:</td>
                                                        <td> <?php echo $data->perihal; ?></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td><b>Tembusan</b></td><td>:</td>
                                                        <td> <?php echo $data->tembusan?></td>
                                                    </tr>
                                                    <tr>
                                                        <td ><b>Sifat Surat</b></td><td>:</td>
                                                        <td > <?php echo $data->sifat_surat?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Tanggal Surat</b></td> <td>:</td>
                                                        <td> <?php echo date('d-m-Y',strtotime($data->tanggal)); ?></td>
                                                        
                                                    </tr>
                                                     
                                                    <tr>
                                                         <td><b>Lampiran</b></td><td>:</td>
                                                        <td > <?php echo $data->lampiran ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Keterangan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td>:</td>
                                                        <td><?php echo $data->keterangan?></td>
                                                    </tr>


                                                    </table>
                                                   
                                                    <div class="row">
                                                    <label  class="col-md-12 control-label">Berkas</label>
                                                        <div class="col-sm-9">
                                                            <button type="button" class="btn-custom btn-white waves-effect"><a href="<?php echo base_url();?>assets/dokumen/suratkeluar/<?php echo $data->berkas?>" >Lihat</a></button> 
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


        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>
        <script type="text/javascript">
function pesanDelete(id){
var pesan = confirm("Apakah anda yakin ingin menghapus Surat ID "+id+" ?");
        if(pesan){
            window.location.href ="<?= base_url()?>index.php/SuratKeluarController/prosesHapusSurat/"+id;
        }
    }
</script>
        
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?=base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>assets/js/detect.js"></script>
        <script src="<?=base_url();?>assets/js/fastclick.js"></script>

        <script src="<?=base_url();?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.blockUI.js"></script>
        <script src="<?=base_url();?>assets/js/waves.js"></script>
        <script src="<?=base_url();?>assets/js/wow.min.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?=base_url();?>assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="<?=base_url();?>assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="<?=base_url();?>assets/plugins/counterup/jquery.counterup.min.js"></script>



        <script src="<?=base_url();?>assets/plugins/morris/morris.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/raphael/raphael-min.js"></script>

        <script src="<?=base_url();?>assets/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="<?=base_url();?>assets/pages/jquery.dashboard.js"></script>

        <script src="<?=base_url();?>assets/js/jquery.core.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.app.js"></script>

        <!-- data tabel -->

        <script src="<?=base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <script src="<?=base_url();?>assets/pages/datatables.init.js"></script>

        <!--FooTable-->
        <script src="<?=base_url();?>assets/plugins/footable/js/footable.all.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>

        <!--FooTable Example-->
        <script src="<?=base_url();?>assets/pages/jquery.footable.js"></script>


        <!-- Modal-Effect -->
        <script src="<?=base_url();?>assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/custombox/js/legacy.min.js"></script>

        <script src="<?=base_url();?>assets/pages/datatables.editable.init.js"></script>


        <script type="text/javascript" src="<?=base_url();?>assets/plugins/parsleyjs/parsley.min.js"></script>

        <!-- form advance -->
        <script src="<?=base_url();?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/switchery/js/switchery.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="<?=base_url();?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="<?=base_url();?>assets/plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/pages/autocomplete.js"></script>

        <script type="text/javascript" src="<?=base_url();?>assets/pages/jquery.form-advanced.init.js"></script>

        <!-- Examples -->
        <script src="<?=base_url();?>assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
        <script src="<?=base_url();?>assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script> 
        <script src="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?=base_url();?>assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
        <script src="<?=base_url();?>assets/plugins/tiny-editable/numeric-input-example.js"></script>

        <script>
            $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "<?=base_url();?>assets/plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "400px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();
        </script>

    </body>
</html>