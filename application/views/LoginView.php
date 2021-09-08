<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?=base_url();?>assets/images/images.ico">

        <title>SIK</title>

        <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/tami.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?=base_url();?>assets/js/modernizr.min.js"></script>
        
    </head>
    <body>

        <div class="account-pages" style="background-image: linear-gradient(to left, #ffe6e6, #feecf1, #fcf3f9, #fcf9fd, #ffffff)"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
            <div class="panel-heading"> 
                <center><img src="<?=base_url();?>assets/images/images.ico" height="70"></center>
                <h4 class="text-center" style="color:#535995;"> <strong >Sistem Informasi Kearsipan</strong> </h4>
                <h4 class="text-center" style="color:#535995;"> <strong >(SIK)</strong></h4>
            </div>

            <div style="background-color: #535995;width:70%;height:3px; margin-left:15%; margin-right:10%;">
            </div>

            <div class="panel-body">
            <form action="<?=base_url();?>index.php/LoginController/login" method="POST" class="form-horizontal m-t-20" >
                
                <div class="form-group ">
                    <div class="input-group" style="margin-left: 3%; margin-right: 3%;">
                        <span class="input-group-addon" style="background-color: #535995 !important; border: 1px solid #535995 !important"><i class="fa fa-user" style="color: white;"></i></span>
                        <input type="text"  name="username" class="form-control" placeholder="Username" autofocus="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group" style="margin-left: 3%; margin-right: 3%;">
                        <span class="input-group-addon" style="background-color: #535995 !important; border: 1px solid #535995 !important"><i class="fa fa-lock" style="color: white;"></i></span>
                        </span>
                        <input type="password"  name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-inverse btn-block text-uppercase waves-effect waves-light" type="submit" name="login" value="login" style="">Login</button>
                    </div>
                </div>

            </form> 
            
            </div>
            
        </div>
        
        

        
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


        <script src="<?=base_url();?>assets/js/jquery.core.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.app.js"></script>
    
    </body>
</html>