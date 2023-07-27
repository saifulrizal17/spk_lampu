<!DOCTYPE html>
<html>

<head>
	<title>Sistem Pendukung Keputusan Metode MAUT</title>
</head>
<style>
	table {
		border-collapse: collapse;
	}

	.line-title {
		border: 0;
		border-style: inset;
		border-top: 1px solid #000;
		margin-top: 15px;
	}
</style>

<body>
	<table style="width: 100%;">
		<tr>
			<td align="center">
				<span style="line-height: 1.7; font-weight: bold;">
					UNIVERSITAS ISLAM BALITAR
					<br>Kelompok 5
				</span>
			</td>
		</tr>
	</table>

	<hr class="line-title">
	<p align="center">
		LAPORAN HASIL AKHIR <br>
		<b>Pemilihan Lampu</b>
	</p>

	<table border="1" width="100%">
		<thead>
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
					<td style="padding-left: 5px;">
						<?php
						$nim_alternatif = $this->Perhitungan_model->get_hasil_alternatif($keys->id_alternatif);
						echo $nim_alternatif['nama'];
						?>
					<td><?= $keys->nilai ?></td>
					<td><?= $no; ?></td>
				</tr>
			<?php
				$no++;
			endforeach ?>
		</tbody>
	</table>
</body>

</html>