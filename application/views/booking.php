<div class="inside-banner">
  <div class="container"> 
    
    <h2>Booking Hotel</h2>
</div>
</div>
<br>

<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg col-sm-9 ">


	<table class="table table-striped table-hover table-bordered" id="sample_editable_2">
	<thead>
		<tr>
			<th>NO</th>
			<th>Nama Kamar</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Sub-Total</th>
		</tr>
	</thead>

		<?php 
		$no=1;
		foreach ($this->cart->contents() as $items) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $items['name'] ?></td>
				<td><?php echo $items['qty'] ?></td>
				<td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
				<td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
			</tr>

		<?php endforeach; ?>

			<tr>
				<td colspan="4"></td>
				<td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
			</tr>
		
	</table>

	<div align="right">
		<a href="<?php echo base_url('dashboard/hapus_booking') ?>"><div class="btn btn-sm btn-danger">Hapus</div></a>
		<a href="<?php echo base_url('dashboard/index') ?>"><div class="btn btn-sm btn-danger">Lanjutkan</div></a>
		<a href="<?php echo base_url('dashboard/pembayaran') ?>"><div class="btn btn-sm btn-danger">Pembayaran</div></a>
	</div>

</div>
	</div>

</div>
	</div>

</div>

<br>
<br>
<br>
<br>
<br>