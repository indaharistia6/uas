
<body id="page-top">

  <!-- Page Wrapper -->




      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">

            </div>

            


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">

               <li class="active"><a href="<?php echo base_url('Welcome/index') ?>">Home</a></li> 
               
                <li><a href="<?php echo base_url('User/Home/tentang_kami') ?>"><i class="fas fa-route"></i>Tentang Kami</a></li>
               
                <li><a href="<?php echo base_url('User/Home/saran') ?>"><i class="fas fa-address-book"></i>Kritik/Saran</a></li>
               
                <li><a href="<?php echo base_url('Kategori/galeri') ?>"><i class="fas fa-image"></i>Galeri</a></li>
                <li>
                  <?php 
                  $booking = 'Booking Now : '.$this->cart->total_items().'items' ?>

                  <?php echo anchor('dashboard/detail_booking', $booking) ?>
                </li>
                
                <?php if($this->session->userdata('username')) { ?>

                
                <li class="ml-2"><?php echo anchor('auth/logout', 'Logout'); ?></li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <?php } else { ?>
                <li><?php echo anchor('auth/login', 'Login'); ?></li>
                <?php } ?>
              </ul>
            </div>
            <!-- #Nav Ends -->

  
          </div>
        </div>
      </div>
        


<div class="header">
<center><img src="<?php echo base_url('images/tentang_kami/logo.png') ?>"></a></center>

</div>

        

          <!-- Topbar Navbar -->
          

        </nav>

</body>