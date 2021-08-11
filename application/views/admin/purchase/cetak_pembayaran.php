<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div align="center">
		<h2>TH STORAGE</h2>
	</div>
	<div>
		<?php foreach ($bayar as $key): ?>
			<div style="padding-left: 200px; padding-right: 150px;">
				<table>
					<tr>
						<td width="105px">PETUGAS</td>
						<td>: <?= $key->nama ?></td>
					</tr>
					<tr>
						<td width="105px">JAM MASUK</td>
						<td>: <?= $key->time_in ?></td>
					</tr>
					<tr>
						<td width="105px">JAM KELUAR</td>
						<td>: <?= $key->time_out ?></td>
					</tr>
					<tr>
						<td width="105px">LAMA PENITIPAN</td>
						<td>: <?= $key->lama_penitipan ?> Jam</td>
					</tr>
					<tr>
						<td width="105px">CUCI HELM</td>
						<td>: Rp <?= number_format($key->tarif_cuci, 0, ".", ".") ?></td>
					</tr>
					<tr>
						<td width="105px">DENDA</td>
						<td>: Rp <?= number_format($key->denda, 0, ".", ".") ?></td>
					</tr>
					<tr>
						<td width="105px">TARIF PENITIPAN</td>
						<td>: Rp <?= number_format($key->tarif_penitipan, 0, ".", ".") ?></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center">
							<?php 
							$totalDenda = $key->denda;
							$tarif = $key->tarif_penitipan;
							$cuci = $key->tarif_cuci;
							$total = $tarif + $totalDenda + $cuci;

							echo "<b style='font-size: large'> Rp " . number_format($total, 0, ".", ".") . "</b>";
							?>
						</td>
					</tr>
				</table>
			</div>
			<br>
		<?php endforeach ?>
		<div style="padding-left: 200px; padding-right: 200px;" align="center">
			TERIMAKASIH SUDAH MEMPERCAYAI TH STORAGE
			<br>
			SELAMAT JALAN DAN HATI-HATI
		</div>
	</div>
</body>
</html>