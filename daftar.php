<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="<?php echo base_url('assets/plugin/datatables-plugins/dataTables.bootstrap.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/plugin/datatables-responsive/dataTables.responsive.css'); ?>" rel="stylesheet">

<div id="page-wrapper">
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Daftar Keaktifan</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					Daftar keaktifan pengguna
				</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<table width="100%" class="table table-striped table-bordered table-hover" id="daftar_keaktifan">
								
<thead>
									<tr>
										<th>Kegiatan</th>
										<th>Deskripsi Kegiatan</th>
										<th>Poin</th>
										<th>Bukti</th>
										<th>Status</th>
									</tr>
								</thead>
								<?php foreach($daftar_keaktifan as $dk): ?>
									<tbody>
										<tr class="odd gradeX">
											<td><a href="<?php echo site_url('Admin/Keaktifan/Rincian/'.$dk->id_keaktifan); ?>"><?php echo $dk->nama_kegiatan; ?></a></td>
											<td><?php echo $dk->deskripsi; ?></td>
											<td><?php echo $dk->poin_kegiatan; ?></td>
											<td><a href="<?php echo base_url('uploads/'.$dk->nama_file); ?>">Lihat</a></td>
											<td><?php echo ($dk->status_keaktifan==0?'Belum Disetujui':($dk->status_keaktifan==2?'Ditolak':'Disetujui')); ?></td>
										</tr>
									</tbody>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>

<script src="<?php echo base_url('assets/plugin/datatables/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugin/datatables-plugins/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugin/datatables-responsive/dataTables.responsive.js'); ?>"></script>

<script>
	$(document).ready(function() {
		$('#daftar_keaktifan').DataTable({
			responsive: true
		});
	});
</script>