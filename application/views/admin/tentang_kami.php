<div class="container-fluid">
<div class="page-content-wrapper">
		<div class="page-content">
		<div class="row">
				<div class="col-md-12">
					
					
						<div class="portlet-body">
							<div class="table-toolbar">
								
										
									
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_akomodasi">Tambah Tentang Kami</button>
<br><br>
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA HOTEL</th>
			<th>ALAMAT HOTEL</th>
			<th>EMAIL HOTEL</th>
			<th>TELP</th>
			<th>ISI</th>
			<th>LOGO</th>
			<th>FACEB00K</th>
			<th>TWITTER</th>
			<th>GP</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php 
		$no=1;
		foreach($tentang_kami as $tk) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $tk->nama_hotel ?></td>
				<td><?php echo $tk->alamat_tentang_hotel ?></td>
				<td><?php echo $tk->email_tentang_hotel ?></td>
				<td><?php echo $tk->telp_tentang_hotel ?></td>
				<td><?php echo $tk->isi_tentang_hotel ?></td>
				<td><?php echo $tk->logo ?></td>
				<td><?php echo $tk->fb ?></td>
				<td><?php echo $tk->tw ?></td>
				<td><?php echo $tk->gp ?></td>
				<td class="text-center"><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
				<td class="text-center"><?php echo anchor('admin/sistem/edit_tentang_kami/' .$tk->id_tentang_hotel, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td onclick="javascript: return confirm('Anda yakin hapus?')" class="text-center"><?php echo anchor('admin/sistem/hapus_tentang_kami/' .$tk->id_tentang_hotel, '<div class="btn btn-danger btn-sm"><i class="fa fa-times"></i></div>') ?></td>
			</tr>

		<?php endforeach; ?>

	</table>



<!-- Modal -->
<div class="modal fade" id="tambah_akomodasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM TENTANG KAMI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'Admin/Sistem/tambah_aksi_tentang_kami'; ?>" method="post" enctype="multipart/form-data">

        	<div class="form-group">
        		<label>Nama Hotel</label>
        		<input type="text" name="nama_hotel" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Alamat Hotel</label>
        		<input type="text" name="alamat_tentang_hotel" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Email Hotel</label>
        		<input type="text" name="email_tentang_hotel" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Telepon</label>
        		<input type="text" name="telp_tentang_hotel" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Isi Tentang Hotel</label>
        		<input type="text" name="isi_tentang_hotel" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Logo</label>
        		<input type="file" name="logo" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Facebook</label>
        		<input type="text" name="fb" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Twitter</label>
        		<input type="text" name="tw" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Gp</label>
        		<input type="text" name="gp" class="form-control">
        	</div>
        	
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
</div></div>
									
									</div>
								</div>
									</div>
								</div>
							