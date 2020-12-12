<div class="container-fluid">
<div class="page-content-wrapper">
		<div class="page-content">
		<div class="row">
				<div class="col-md-12">
					
					
						<div class="portlet-body">
							<div class="table-toolbar">
	<h3><i class="fas fa-edit"></i>EDIT DATA AKOMODASI</h3>

	<?php foreach($tentang_kami as $tk) : ?>

		<form method="post" action="<?php echo base_url().'admin/sistem/update_tentang_kami' ?>">
			
			<div class="form-group">
				<label>Nama Hotel</label>
				<input type="text" name="nama_hotel" class="form-control" value="<?php echo $tk->nama_hotel ?>">
			</div>

			<div class="form-group">
				<label>Alamat Hotel</label>
				<input type="text" name="alamat_tentang_hotel" class="form-control" value="<?php echo $tk->alamat_tentang_hotel ?>">
			</div>

			<div class="form-group">
				<label>Email Hotel</label>
				<input type="hidden" name="id_tentang_hotel" class="form-control" value="<?php echo $tk->id_tentang_hotel ?>">
				<input type="text" name="email_tentang_hotel" class="form-control" value="<?php echo $tk->email_tentang_hotel ?>">
			</div>

			<div class="form-group">
				<label>Telepon</label>
				<input type="text" name="telp_tentang_hotel" class="form-control" value="<?php echo $tk->telp_tentang_hotel ?>">
			</div>

			<div class="form-group">
				<label>Isi Tentang Hotel</label>
				<input type="text" name="isi_tentang_hotel" class="form-control" value="<?php echo $tk->isi_tentang_hotel ?>">
			</div>

			<div class="form-group">
				<label>Facebook</label>
				<input type="text" name="fb" class="form-control" value="<?php echo $tk->fb ?>">
			</div>

			<div class="form-group">
				<label>Twitter</label>
				<input type="text" name="tw" class="form-control" value="<?php echo $tk->tw ?>">
			</div>
			<div class="form-group">
				<label>Gp</label>
				<input type="text" name="gp" class="form-control" value="<?php echo $tk->gp ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm"> Simpan</button>

		</form>

	<?php endforeach; ?>
</div>
</div>
									
									</div>
								</div>
									</div>
								</div>