<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Informasi</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo base_url('Welcome/index') ?>">Home</a></li>         
                <!-- <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo base_url();?>home/reserfasi">Reserfasi</a></li> -->
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo base_url('Kategori/tentang_kami') ?>">Tentang Kami</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo base_url('Kategori/buku_tamu') ?>">Kritik/Saran</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Tentang Kami</h4>
                    
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Social Media</h4>
                    <a href="https://www.facebook.com/dimpil.homestaypemuteran"><img src="<?php echo base_url();?>images/facebook.png" alt="facebook"></a>
                    <a href="https://www.instagram.com/dimpilhomestay/"><img src="<?php echo base_url();?>images/instagram.png" alt="twitter"></a>
                   <!--  <a href="#"><img src="<?php echo base_url();?>images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="<?php echo base_url();?>images/instagram.png" alt="instagram"></a> -->
            
            </div>

<p class="copyright">Copyright 2020. Dimpil Homestay. </p>


</div></div>



<script src="<?php echo base_url();?>assets2/date_picker_bootstrap/bootstrap.min.js" type="text/javascript"></script>


<script type="text/javascript" src="<?php echo base_url();?>assets2/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets2/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>


<script type="text/javascript">

 $('.form_date').datetimepicker({

        language:  'id',

        weekStart: 1,

        todayBtn:  1,

  autoclose: 1,

  todayHighlight: 1,

  startView: 2,

  minView: 2,

  forceParse: 0

    });

</script>

</body>
</html>
