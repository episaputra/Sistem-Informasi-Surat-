<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?=base_url();?>assets/images/pmi_icon.ico">

        <title>SIKD</title>


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
                        <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span></i>SMART</span></a>
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
                                <li class="dropdown top-menu-item-xs">
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
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
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> Data Master </span></span></a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="<?= base_url() ?>SuratMasuk" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Surat Masuk </span>  </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-light-bulb"></i></span><span> Surat keluar </span> </a>
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
                        <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="m-b-30">
                                            <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">+ Tambah Surat</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="">
                                    <div id="datatable-editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="datatable-editable_length"><label>Show <select name="datatable-editable_length" aria-controls="datatable-editable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="datatable-editable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-editable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer" id="datatable-editable" role="grid" aria-describedby="datatable-editable_info">
                                        <thead>
                                            <tr role="row">
                                                <th tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1"  style="width: 90px;">Id </th>
                                                <th tabindex="0" rowspan="1" colspan="1"  style="width: 190px;">No. Surat</th>
                                                <th tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 290px;">Judul Surat</th><th rowspan="1" colspan="1" aria-label="Actions" style="width: 160px; ">Asal</th>
                                                <th rowspan="1" colspan="1" aria-label="Actions" style="width: 135px;">Tanggal</th>
                                                <th rowspan="1" colspan="1" aria-label="Actions" style="width: 135px;padding-left: 80px">Aksi</th></tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                            
                                            <?php
        foreach($surat_masuk as $data){
            echo    "<tr>".
                        "<td>".$data->id."</td>".
                        "<td>".$data->no_surat."</td>".
                        "<td>".$data->judul."</td>".
                        "<td>".$data->asal."</td>".
                        "<td>".$data->tanggal."</td>";?>

            <td><a href="#edit_surat<?php echo $data->id;?>" data-toggle="modal"><button class="btn btn-icon waves-effect waves-light btn-warning"> <i class="fa fa-edit"></i> </button></a>  </td>

            <td><a href="#"><button type='button' class='btn btn-danger'> Hapus </button></a></td>
            </tr>

<?php                       
                    
        }
?>  
                                            
                                </tbody>
                                    </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="datatable-editable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="datatable-editable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="datatable-editable" tabindex="0" id="datatable-editable_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="datatable-editable" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="datatable-editable" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="datatable-editable" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="datatable-editable" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="datatable-editable" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="datatable-editable" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="datatable-editable" tabindex="0" id="datatable-editable_next"><a href="#">Next</a></li></ul></div></div></div></div>
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

<form action="<?= base_url()?>index.php/SuratMasuk/prosesTambahSurat" method="post">
 <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog"> 
                                            <div class="modal-content"> 
                                                <div class="modal-header"> 
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                    <h4 class="modal-title">Tambah Surat Masuk</h4> 
                                                </div> 
                                                <div class="modal-body"> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">No. Surat</label> 
                                                                <input type="text" class="form-control field-3" name="nosurat" placeholder=""> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Judul Surat</label> 
                                                                <input type="text" class="form-control field-3" name="judulsurat" placeholder=""> 
                                                            </div> 
                                                        </div> 
                                                    </div>
                                                     <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Asal Surat</label> 
                                                                <input type="text" class="form-control field-3" name="asalsurat"  placeholder=""> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                        

                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="field-3" class="control-label">Tanggal</label> 
                                                                <input type="date" name="tglsurat" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <label  class="col-md-12 control-label">Berkas</label>
                                                        <div class="col-sm-7">
                                                            <input type="file" name="berkassurat" class="form-control">
                                                        </div>
                                                    </div>  
                                                </div> 
                                                <div class="modal-footer"> 
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                                </div> 
                                            </div> 
                                        </div>
                                    </div><!-- /.modal -->
</form>

 <?php foreach ($surat_masuk as $data) {?> 
 <div id="edit_surat<?php echo $data->id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<form action="<?= base_url('index.php/SuratMasuk/editSurat');?>" method="post">
                                        <div class="modal-dialog"> 
                                            <div class="modal-content"> 
                                                <div class="modal-header"> 
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                    <h4 class="modal-title">Edit Surat Masuk</h4> 
                                                </div> 
                                                <div class="modal-body"> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">No. Surat</label> 
                                                                <input type="text" value="<?=$data->no_surat?>" class="form-control field-3" name="nosurat" placeholder=""> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Judul Surat</label> 
                                                                <input type="text" class="form-control field-3" value="<?=$data->judul?>" name="judulsurat" placeholder=""> 
                                                            </div> 
                                                        </div> 
                                                    </div>
                                                     <div class="row"> 
                                                        <div class="col-md-12"> 
                                                            <div class="form-group"> 
                                                                <label for="field-3" class="control-label">Asal Surat</label> 
                                                                <input type="text" class="form-control field-3" name="asalsurat"  placeholder=""> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                        

                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="field-3" class="control-label">Tanggal</label> 
                                                                <input type="date" name="tglsurat" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <label  class="col-md-12 control-label">Berkas</label>
                                                        <div class="col-sm-7">
                                                            <input type="file" name="berkassurat" class="form-control">
                                                        </div>
                                                    </div>  
                                                </div> 
                                                <div class="modal-footer"> 
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button> 
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