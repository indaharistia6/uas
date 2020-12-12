<div class="container-fluid">
<div class="page-content-wrapper">
		<div class="page-content">
		<div class="row">
				<div class="col-md-12">
					
					
						<div class="portlet-body">
							<div class="table-toolbar">
	<h4>Kritik dan Saran</h4>
	<table class="table table-bordered table-hover table-striped">
		
		<tr>
			<th>No</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Telp</th>
								<th>Krtik/Saran</th>
		</tr>

		<?php foreach ($saran as $s): ?>
		<tr>
			<td><?php echo $s->id_saran ?></td>
			<td><?php echo $s->nama_saran ?></td>
			<td><?php echo $s->email_saran ?></td>
			<td><?php echo $s->telp_saran ?></td>
			<td><?php echo $s->isi_saran ?></td>
			</tr>

	<?php endforeach; ?>

	</table>
</div>
</div>
									
									</div>
								</div>
									</div>
								</div>