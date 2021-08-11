<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="text-align: center;">
		<h2>TIKET PENITIPAN HELM</h2>
		<h3>TH STORAGE</h3>
	</div>
	<div>
		<?php foreach ($penitipan as $key): ?>
			<div style="padding-left: 200px; padding-right: 150px;">
				<table>
					<tr>
						<td width="100px">Petugas</td>
						<td>: <?= $key->nama ?></td>
					</tr>
					<tr>
						<td width="100px">Penitip</td>
						<td>: <?= $key->nama_penitip ?></td>
					</tr>
					<tr>
						<td width="100px">Waktu Masuk</td>
						<td>: <?= $key->time_in ?></td>
					</tr>
				</table>
			</div>
			<br>
			<div align="center">
				<?php 
				$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
				echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($key->kode_penitipan, $generator::TYPE_CODE_128)) . '" style="align: center">';
				?>
				<br>
				<?php echo $key->kode_penitipan ?>
				<br><br>
			</div>
			<div style="padding-left: 200px; padding-right: 200px;" align="center">
				JANGAN MENINGGALKAN TIKET & BARANG BERHARGA
				<br>
				HILANGNYA TIKET BUKAN TANGGUNG JAWAB PETUGAS
			</div>
		<?php endforeach ?>
	</div>
</body>
</html>