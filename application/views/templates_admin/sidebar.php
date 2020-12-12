<body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<div class="hor-menu hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				
				<li class="classic-menu-dropdown active">
					<a href="<?php echo base_url('admin/dashboard_admin') ?>">
					DASHBOARD <span class="selected">
					</span>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('admin/data_akomodasi') ?>">
					<span>Data Akomodasi</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('admin/invoice') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Invoices</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('admin/sistem/tentang_kami') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Tentang Kami</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('admin/sistem/saran') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Kritik & Saran</span></a>
				</li>
				
			</ul>
		</div>
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">

			<div class="topbar-divider d-none d-sm-block"></div>

            
              <?php if($this->session->userdata('username')) { ?>

            
                <li class="ml-2"><?php echo anchor('auth/logout', 'Logout'); ?></li>

              <?php } else { ?>
                <li><?php echo anchor('auth/login', 'Login'); ?></li>
              <?php } ?>
                
            

				

				
				
				
			</ul>
		</div>
		
	</div>
	
</div>




