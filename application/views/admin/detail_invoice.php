<div class="container-fluid">
<div class="inside-banner">
  <div class="container"> 
    
    <h2>Data Akomodasi</h2>
</div>
</div>
<div class="page-content-wrapper">
		<div class="page-content">
		<div class="row">
				<div class="col-md-12">
					
					
						<div class="portlet-body">
							<div class="table-toolbar">
	<h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice : <?php echo $invoice->id_invoice ?></div></h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>NO</th>
			<th>NAMA KAMAR</th>
			<th>JUMLAH KAMAR YANG DIPESAN</th>
			<th>HARGA PERKAMAR</th>
			<th>SUB-TOTAL</th>
		</tr>

		<?php
        $total = 0;
        foreach ($pesanan as $psn):
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>

		 <tr>
		 	<td><?php echo $psn->id ?></td>
		 	<td><?php echo $psn->nama_kamar ?></td>
		 	<td><?php echo $psn->jumlah ?></td>
		 	<td><?php echo number_format($psn->harga,0,',','.') ?></td>
		 	<td><?php echo number_format($subtotal,0,',','.') ?></td>
		 </tr>

		<?php endforeach; ?>

		<tr>
			<td colspan="4" align="right">Grand Total</td>
			<td align="right">Rp. <?php echo number_format($total,0,',','.') ?></td>
		</tr>
	</table>

	<a href="<?php echo base_url('admin/invoice/index') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>  </div>
  </div>
</div>
</div></div>
									
									</div>
								</div>
									</div>
								</div>