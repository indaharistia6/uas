<div class="">
    

    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
			<img src="<?php echo base_url('assets/img/sliderbaru.jpg') ?>" class="d-block w-100" >
              <h2><a href="#">Hotel Elegan Nuansa Moderen</a></h2>
              <blockquote>              
              <p>Hotel yang sangat elegan dan mewah dengan nuansa moderen membuat anda beristirahat dengan nyaman</p>
              
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
			      <img src="<?php echo base_url('assets/img/slidertiga.jpg') ?>" class="d-block w-100" >
              <h2><a href="#">Ruang Meeting</a></h2>
              <blockquote>              
              <p>Memiliki ruang meeting yang bisa anda gunakan untuk bisnis anda dalam pertemuan atau pembahasan bisnis anda.</p>

              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
			<img src="<?php echo base_url('assets/img/sliderempat.jpg') ?>" class="d-block w-100" >
              <h2><a href="#">Ruang Meeting</a></h2>
              <blockquote>              
              <p>Memiliki ruang meeting yang bisa anda gunakan untuk bisnis anda dalam pertemuan atau pembahasan bisnis anda.</p>

              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
			<img src="<?php echo base_url('assets/img/sliderlima.jpg') ?>" class="d-block w-100" >
              <h2><a href="#">Ruang Meeting</a></h2>
              <blockquote>              
              <p>Memiliki ruang meeting yang bisa anda gunakan untuk bisnis anda dalam pertemuan atau pembahasan bisnis anda.</p>

              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
			<img src="<?php echo base_url('assets/img/sliderenam.jpg') ?>" class="d-block w-100" >
              <h2><a href="#">Ruang Meeting</a></h2>
              <blockquote>              
              <p>Memiliki ruang meeting yang bisa anda gunakan untuk bisnis anda dalam pertemuan atau pembahasan bisnis anda.</p>

              </blockquote>
            </div>
          </div>
        </div>




        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>


<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="<?php echo base_url('Welcome/index') ?>" class="pull-right viewall">Lihat Semua Kamar</a>
    <h2>Daftar Kamar</h2>
    <div id="owl-example" class="owl-carousel">
      
    	
	<?php foreach ($akomodasi as $a) : ?>
	      <div class="properties">
	        <div class="image-holder"><img src="<?php echo base_url().'/uploads/'.$a->gambar_kamar ?>" class="img-responsive" alt="properties"/>
	          
	        </div>
	        <small><?php echo $a->keterangan ?></small><br>
	        <p class="price">Rp. <?php echo number_format($a->harga, 0,',','.') ?></p>
	        <div class="listing-detail"><?php echo $a->nama_kamar ?>   </div>
	        <?php echo anchor('dashboard/booking/'.$a->id, '<div class="btn btn-sm btn-primary">Booking</div><br><br>') ?>
			<?php echo anchor('dashboard/detail/'.$a->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?>
	      </div>
    	
      
	<?php endforeach; ?>
      
    </div>
  </div>
  
</div>









