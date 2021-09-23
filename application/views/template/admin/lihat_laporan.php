<div class="container">
	<h1>Detail Laporan</h1>
	<br>
	<div class="row">
		<div class="col-3">
			<p><b>Nama</b> : <?php echo $lapor['nama']?></p>
			<p><b>No HP</b> : <?php echo $lapor['nohp']?></p>
			<p><b>Alamat</b> : <?php echo $lapor['alamat']?></p>
			<p><b>Laporan</b> : <?php echo $lapor['laporan']?></p>
			<p><b>Tanggal</b> : <?php echo $lapor['tgl']?></p>
		</div>
		<div class="col-5">
			<img style="width: 250px; height: 300px;"src="<?php echo base_url() ?>assets/foto/<?php echo $lapor['foto'] ?>">
		</div>
	</div>
	<br>
	<br>
	<a href="<?php echo base_url('admin/laporan'); ?>" class="btn btn-primary"> KEMBALI</a>
</div>