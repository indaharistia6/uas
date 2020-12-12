<div class="container-fluid">
<div class="inside-banner">
  <div class="container"> 
    
    <h2>Info Kamar</h2>
</div>
</div>

<div class="container">
<div class="properties-listing spacer">


        <?php foreach($akomodasi as $a): ?>
            <div class="row">
            <div class="col-lg-8">
            <div class="image-holder"><img src="<?php echo base_url().'/uploads/'.$a->gambar_kamar ?>" class="img-responsive" alt="properties"/>
	          
              </div>
                    </div>
            <div class="col-md-4">
                    
                            <h6><span></span> Nama Kamar :</h6>
                            <h6><span></span><strong><?php echo $a->nama_kamar ?></strong></h6>
                            <h6><span></span> Keterangan :</h6>
                            <h6><span></span><strong><?php echo $a->keterangan ?></strong></h6>
                            <h6><span></span>Kategori :</h6>
                            <h6><span></span><strong><?php echo $a->kategori ?></strong></h6>
                            <h6><span></span>Available :</h6>
                            <h6><span></span><strong><?php echo $a->stok ?></strong></h6>
                            <h6><span></span>Harga :</h6>
                            <h6><span></span><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($a->harga,0,',','.') ?></div></strong></h6>
                

                    <?php echo anchor('dashboard/booking/'.$a->id,'<div class="btn btn-sm btn-danger">Booking</div>') ?>
                    <?php echo anchor('welcome/index/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
            </div>
        </div>

        <?php endforeach; ?>
       </div>
    </div>
</div>
       </div>
    </div>
</div>
</div>
</div>
</div>

