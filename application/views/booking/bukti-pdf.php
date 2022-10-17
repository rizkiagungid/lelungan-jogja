<H3>STRUK PEMBAYARAN SILAHKAN DISIMPAN</H3>
<table border=1>
	<?php
	foreach ($useraktif as $u) {
	?>
		<tr>
			<th>Nama Pemesan : <?= $u->nama; ?></th>
		</tr>
		<tr>
			<th>Tiket Yang dibooking:</th>
		</tr>
	<?php } ?>
	<tr>
		<td>
			<div class="table-responsive">
				<table border=1>
					<tr>
						<th>No.</th>
						<th>Nama Destinasi</th>
						<th>Harga Tiket</th>
						<th>Jumlah Tiket</th>
						<th>Total Harga</th>
						<th>Tanggal Booking</th>
					</tr>
					<?php
					$no = 1;
					foreach ($temp as $i) {
					?>
						<tr>
							<td><?= $no; ?></td>
							<td nowrap><?= $i['judul_buku']; ?></td>
							<td nowrap><?= $i['harga_buku']; ?></td>
							<td nowrap><?= $i['tiket']; ?></td>
							<td nowrap><?= $i['total_harga']; ?></td>
							<td nowrap><?= $i['tgl_booking']; ?></td>
						</tr>
					<?php $no++;
					} ?>
				</table>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<hr>
		</td>
	</tr>
	<tr>
		<td align="center">
		<P>Id Pembayaran ini di Enkripsi </p>
			<?= md5(date('d M Y H:i:s')); ?>
		</td>
		<tr>
		<td align="center">
			<P>Silahkan Melakukan Pembayaran</p>
			<P>54375619130 BCA </p>
			<P>A/n PT.Lelungan Jogja </p>
			<br>
		<br>
		<h3>TERIMA KASIH SUDAH MELAKUKAN TRANSAKSI DI WEBSITE KAMI.SEMOGA PERJALANAN ANDA MENYENANGKAN :) </H3>
		</td>
	</tr>
</table>