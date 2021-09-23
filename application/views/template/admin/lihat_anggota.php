<div class="container">
	<h1>Detail Anggota</h1>
	<br>
	<div class="row">
		<div class="col-2">
			<p><b>Nama Anggota</b>: </p>
			<p><b>Status</b> 	  : </p>
			<p><b>Alamat</b> 	  : </p>
		</div>
		<div class="col-2">
			<p><?php echo $anggota['nama']?></p>
			<p><?php echo $anggota['status']?></p>
			<p><?php echo $anggota['alamat']?></p>
		</div>
	</div>
	<br>
	<br>
	<a href="<?php echo base_url('Admin/anggota'); ?>" class="btn btn-primary"> KEMBALI</a>
</div>