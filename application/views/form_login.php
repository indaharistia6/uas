<!DOCTYPE html>


<html lang="en">

<head>
<meta charset="utf-8"/>
<link rel="icon" href="<?php echo base_url('assets2/img/homestay2.png'); ?>">
<title>Login</title>
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

<body class="login">

<div class="logo">
<img src="<?php echo base_url('images/tentang_kami/logo.png') ?>">
</div>

<div class="menu-toggler sidebar-toggler">
</div>

<div class="content">

              <?php echo $this->session->flashdata('pesan') ?>
                  <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                    
		<div class="form-group">
			
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
        <?php echo form_error('username','<div class="text-danger ml-2">','</div>') ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Password" name="password"/>
        <?php echo form_error('password','<div class="text-danger ml-2">','</div>') ?>
      </div>
		</div>
		<div class="form-actions">
			
			<button type="submit" class="btn blue pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
      
    <a class="small" href="<?php echo base_url('registrasi/index') ?>">Belum Punya Akun? Daftar!</a>
    
		</div>

    
		
		
	<?php echo form_close();?>
	
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



