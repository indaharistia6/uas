<div class="inside-banner">
  <div class="container"> 
    
    <h2>Input Pembayaran</h2>
</div>
</div>

<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-9 col-sm-9 ">

  <div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if ($booking = $this->cart->contents()) 
					{
						foreach ($booking as $item)	
						{
							$grand_total = $grand_total + $item['subtotal'];
						}

					echo "<h4>Total Pemesanan Anda: Rp.".number_format($grand_total,0,',','.');	
					 ?>
			</div><br><br>

			<form method="post" action="<?php echo base_url('dashboard/proses_pembayaran') ?>">

  				<input type="text" class="form-control" name="nama" placeholder="Nama Pemesan">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap Anda ">
                <input type="text" class="form-control" name="email" placeholder="Email Anda">
                <select class="form-control">
						<option>BCA - XXXXXXX</option>
						<option>BNI - XXXXXXX</option>
						<option>BRI - XXXXXXX</option>
						<option>MANDIRI - XXXXXXX</option>
					</select>
      			<button type="submit" class="btn btn-success" name="Submit">Pesan</button>
			</form>

			<?php 
			} else 
			{
				echo "<h4>Anda Belum Memesan";
			} ?>
		</div>

		<div class="col-md2"></div>
	</div>
	</div>
	</div>
	</div>
	</div>
