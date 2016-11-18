<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Rincian Keaktifan</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Perbarui rincian kegiatan anda
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<?php echo ($alert!=null?$alert:'');
							foreach ($rincian_keaktifan as $rk):
								?>
							<form action="" method="POST">
								<div class="form-group">
									<label>Pilih Kegiatan :</label>
									<select class="form-control" name="kegiatan" required="">
										<?php foreach ($daftar_kegiatan as $dk) : ?>
											<option value="<?php echo $dk->id_kegiatan; ?>" <?php echo ($rk->id_kegiatan==$dk->id_kegiatan?'Selected':'');?>>
												<?php echo $dk->nama_kegiatan.' - '.$dk->poin_kegiatan; ?>
											</option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<input class="form-control" name="deskripsi" placeholder="Deskripsi Kegiatan yang Anda Ikuti" value="<?php echo $rk->deskripsi; ?>" required>
								</div>
								<div class="form-group">
									<label>Bukti Kegiatan :</label>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buktiKegiatan">
										Lihat
									</button>

								<div class="modal fade" id="buktiKegiatan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title" id="myModalLabel">Bukti Kegiatan</h4>
												</div>
												<div class="modal-body">
													<img src="<?php echo base_url('uploads/'.$rk->nama_file); ?>" alt="" width=100%>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

								</div>
								<?php if($rk->status_keaktifan!=1): ?>
									<button class="btn btn-info" name="submit">Perbarui</button>
								<?php endif; ?>
							</form>
							<?php
							endforeach; ?>
						</div>
					</div>
				</div>
			</div>

			<?php
			foreach ($rincian_keaktifan as $rk):
				if($rk->status_keaktifan!=1): ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					Perbarui bukti kegiatan Anda
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<?php echo ($alert_bukti!=null?$alert_bukti:'');?>
							<form action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
								<div class="form-group">
									<label>Unggah Bukti Kegiatan Baru</label>
									<input type="file" name="bukti" accept="image/*" required />
								</div>
								<button class="btn btn-info" name="submit_bukti">Perbarui</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php
			endif;
			endforeach;?>
		</div>
	</div>

</div>
