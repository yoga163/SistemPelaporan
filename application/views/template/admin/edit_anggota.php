
<div class="container">
<h1>EDIT USER</h1>
	<?php echo form_open_multipart('admin/do_edit_anggota') ?>
	<input type="hidden" name="id" value="<?php echo $anggota['id_agt'] ?>">
		<div class="form-group">
			<label>MASUKAN NAMA</label>
			<input type="text" name="nama" class="form-control bes" value="<?php echo $anggota['nama'] ?>">
		</div>
		<div class="form-group">
			<label>USERNAME</label>
			<input type="text" name="username" class="form-control" value="<?php echo $anggota['username']?>">
		</div>
		<div class="form-group">
			<label>STATUS</label>
			<input type="text" name="status" class="form-control bes" value="<?php echo $anggota['status']?>">
		</div>
		<div class="form-group">
			<label>MASUKAN ALAMAT</label>
			<textarea class="form-control" name="alamat" rows="5"><?php echo $anggota['alamat'] ?></textarea>
		</div>
		<input type="submit" name="simpan" value="SAVE" class="btn btn-info">
		<a href="<?php echo base_url('admin/anggota'); ?>" class="btn btn-primary"> KEMBALI</a>
	</form>
</div>
