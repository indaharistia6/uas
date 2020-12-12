<div class="container-fluid">
<div class="inside-banner">
  <div class="container"> 
    
    <h2>Tentang Kami</h2>
</div>
</div>

<div class="container">
<div class="properties-listing spacer">

            <?php foreach ($tentang_kami as $tk) : ?>
            <div class="row">
            <div class="col-lg-8">
            <div class="image-holder"><img src="<?php echo base_url().'/uploads/'.$tk->logo ?>" class="img-responsive" alt="properties"/>
	          
              </div>
                    </div>
            <div class="col-md-4">
        <div class="alert alert-success">
            <p class="text-center align-middle"><strong><?php echo $tk->isi_tentang_hotel ?></strong><br></p>
          </div>
            
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

