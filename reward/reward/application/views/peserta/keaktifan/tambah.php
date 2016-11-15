<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Tambah Keaktifan</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					Masukkan rincian kegiatan anda
				</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
						<?php if($alert!=null){echo $alert;} ?>
							<form action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
								<div class="form-group">
									<label>Pilih Kegiatan :</label>
									<select class="form-control" name="kegiatan" required="">
										<option value="" disabled selected>Pilih salah satu kegiatan</option>
										<?php foreach ($daftar_kegiatan as $dk) : ?>
											<option value="<?php echo $dk->id_kegiatan; ?>">
												<?php echo $dk->nama_kegiatan.' - '.$dk->poin_kegiatan; ?>
											</option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<input class="form-control" name="deskripsi" placeholder="Deskripsi Kegiatan yang Anda Ikuti" required>
								</div>
								<div class="form-group">
									<label>Unggah Bukti Kegiatan</label>
									<input type="file" name="bukti" accept="image/*" required />
								</div>
								<button class="btn btn-info" name="submit">Submit</button>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>
