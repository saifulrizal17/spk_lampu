<?php $this->load->view('layouts/header'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-chart-area"></i> Data Hasil Akhir</h1>

	<a href="<?= base_url('Laporan/cetak_laporan_hasil'); ?>" class="btn btn-info"> <i class="fa fa-print"></i> Cetak Data </a>
</div>

<div class="card shadow mb-4">
	<!-- /.card-header -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Hasil Akhir Perankingan</h6>
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
				<thead class="bg-info text-white">
					<tr align="center">
						<th>Nama Lampu</th>
						<th>Nilai Preferensi</th>
						<th width="15%">Ranking</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($hasil as $keys) : ?>
						<tr align="center">
							<td align="left" style="padding-left: 5px;">

								<?php
								$nama_alternatif = $this->Perhitungan_model->get_hasil_alternatif($keys->id_alternatif);
								echo $nama_alternatif['nama'];
								?>

							</td>
							<td><?= $keys->nilai ?></td>
							<td><?= $no; ?></td>
						</tr>
					<?php
						$no++;
					endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
$this->load->view('layouts/footer');
?>