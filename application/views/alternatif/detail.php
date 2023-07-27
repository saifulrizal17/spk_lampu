<?php $this->load->view('layouts/header'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users"></i> Data Alternatif</h1>

	<a href="<?= base_url('Alternatif'); ?>" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
		<span class="text">Kembali</span>
	</a>
</div>

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-success"><i class="fas fa-fw fa-edit"></i> Detail Data Alternatif</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th>Nama</th>
					<td><?php echo $alternatif->nama ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>

<?php $this->load->view('layouts/footer'); ?>