<!DOCTYPE html>


<html lang="en">

<head>
<meta charset="utf-8"/>
<link rel="icon" href="<?php echo base_url('assets2/img/homestay2.png'); ?>">
<title>Registrasi</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<link href="<?php echo base_url() ?>assets3/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets3/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets3/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets3/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets3/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>

<link href="<?php echo base_url() ?>assets3/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets3/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>

<link href="<?php echo base_url() ?>assets3/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets3/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets3/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url() ?>assets3/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets3/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>


</head>
<br><br>
<body class="login">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg col-lg my-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar Akun!</h1>
              </div>
              <form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user">
              <div class="container">
              <div class="spacer">
              <div class="row contact">
                <div class="col-lg ">
                <div class="p-5">
              <div class="text-center">
                
              <div class="form-group">
                  <label class="control-label visible-ie8 visible-ie9">Nama</label>
                  <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Nama" name="nama"/>
                    <?php echo form_error('nama','<div class="text-danger small ml-2">','</div>') ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label visible-ie8 visible-ie9">username</label>
                  <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
                    <?php echo form_error('username','<div class="text-danger small ml-2">','</div>') ?>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label visible-ie8 visible-ie9">Password</label>
                  <div class="input-icon">
                  <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password_1" id="exampleInputPassword"autocomplete="off" placeholder="Password" name="password_1"/>
                    <?php echo form_error('password_1','<div class="text-danger small ml-2">','</div>') ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label visible-ie8 visible-ie9">Ulangi Password</label>
                  <div class="input-icon">
                  <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password_2" id="exampleRepeatPassword" autocomplete="off" placeholder="Ulangi Password" name="password_2"/>
                    <?php echo form_error('password_2','<div class="text-danger small ml-2">','</div>') ?> 
                  </div>
                </div>
             <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
              </form>
              <hr>
              
              <div class="text-center">
                <a class="small" href="<?php echo base_url('auth/login') ?>">Sudah Punya Akun? Silahkan Login</a>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



<div class="copyright">
	 2020 &copy; Dimpil Homestay.
</div>

<script src="<?php echo base_url() ?>assets3/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets3/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

<script src="<?php echo base_url() ?>assets3/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets3/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets3/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets3/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets3/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets3/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets3/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets3/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

<script src="<?php echo base_url() ?>assets3/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets3/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets3/global/plugins/select2/select2.min.js"></script>

<script src="<?php echo base_url() ?>assets3/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets3/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets3/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets3/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets3/admin/pages/scripts/login-soft.js" type="text/javascript"></script>

<script>
jQuery(document).ready(function() {     
  Metronic.init(); 
Layout.init(); 
QuickSidebar.init(); 
Demo.init(); 
  Login.init();
     
      
});
</script>


</body>


</html>



