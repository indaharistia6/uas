<div class="inside-banner">
  <div class="container"> 
    
  <h2>Galeri</h2>
</div>
</div><br><br>
<br><br>
<div id="owl-example" class="owl-carousel">
      
    	
	<?php foreach ($akomodasi as $a) : ?>
	      <div class="properties">
	        <div class="image-holder"><img src="<?php echo base_url().'/uploads/'.$a->gambar_kamar ?>" class="img-responsive" alt="properties"/>
	          
	        </div>
	        <small><?php echo $a->keterangan ?></small><br>
	        <div class="listing-detail"><?php echo $a->nama_kamar ?>   </div>
			<?php echo anchor('dashboard/detail/'.$a->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?>
	      </div>
    	
      
	<?php endforeach; ?>
      
	</div>
</div>
<br><br>